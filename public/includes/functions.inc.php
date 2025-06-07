<?php
// Functions page, where most (if not all) functions are referenced from

// Checks for an empty input for sign up
function emptyInputSignup($firstName, $lastName, $email, $username, $password, $passwordRepeat) {
    $result = "";

    if (empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

// Checks for an invalid first name 
function invalidfirstName($firstName) {
    $result = "";
    
    if (!preg_match("/^[a-zA-Z]+$/", $firstName)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

// Checks for an invalid last name 
function invalidlastName($lastName) {
    $result = "";
    
    if (!preg_match("/^[a-zA-Z]+$/", $lastName)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

// Checks for an invalid username 
function invalidUsername($username) {
    $result = "";
    
    if (!preg_match("/^[a-zA-Z0-9_?!@#$%^&*]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;

}

// Checks for an invalid email
function invalidEmail($email) {
    $result = "";
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

// Checks if passwords match
function passwordMatch($password, $passwordRepeat) {
    $result = "";

    if ($password !== $passwordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

// Checks if old password and new password are the same on change-password.php
function passwordSame($passwordOld, $passwordNew) {
    $result = "";

    if ($passwordOld == $passwordNew) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

// Checks if desired username is taken
function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/register-home.php?error=stmtfailed");
        exit();  
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }

    else {
        $result = false;
        return $result;
    }
}

//
function passwordExists($conn, $password) {
    $sql = "SELECT * FROM users WHERE usersPassword = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/change-password.php?error=stmtfailed");
        exit();  
    }

    mysqli_stmt_bind_param($stmt, "s", $password);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }

    else {
        $result = false;
        return $result;
    }
}

// Checks if desired new password and old password are the same 
function oldPasswordMatch($conn, $userId, $passwordOld) {
    $sql = "SELECT usersPassword FROM users WHERE usersID = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/change-password.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        $hashedPwd = $row["usersPassword"];
        return !password_verify($passwordOld, $hashedPwd); // returns true if it DOESN'T match
    } else {
        return true; // treat it as a mismatch if user is not found
    }
}

// Checks for an invalid password (a password less than 8 characters)
function invalidPassword($password) {
    return strlen($password) < 8;
}

// Creates a new user
function createUser($conn, $firstName, $lastName, $email, $username, $password, $PIN) {
    $sql = "INSERT INTO users (usersfirstName, userslastName, usersEmail, usersUsername, usersPassword, usersPIN) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/register-home.php?error=stmtfailed");
        exit();  
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $email, $username, $hashedPassword, $PIN);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../pages/top-of-home-page/register-home.php?error=none");
    exit();  
}

// Saves a cookie
function saveRememberToken($pdo, $userId, $token) {
    // Securely hash the token
    $tokenHash = hash('sha256', $token);

    // Set expiration time (e.g., 30 days)
    $expiresAt = date('Y-m-d H:i:s', strtotime('+30 days'));

    // Prepare the SQL query to save the token and expiration date
    $stmt = $pdo->prepare("INSERT INTO remember_tokens (user_id, token_hash, expires_at) VALUES (?, ?, ?)");

    // Execute the query
    $stmt->execute([$userId, $tokenHash, $expiresAt]);

    // Return true if the token was successfully saved
    return $stmt->affected_rows > 0;
}

// Deletes a cookie
function deleteRememberToken($pdo, $token) {
    // Hash the token to match the stored token hash
    $tokenHash = hash('sha256', $token);

    // Prepare the SQL query to delete the token from the database
    $stmt = $pdo->prepare("DELETE FROM remember_tokens WHERE token_hash = ?");

    // Execute the query
    $stmt->execute([$tokenHash]);

    // Return true if the token was successfully deleted
    return $stmt->rowCount() > 0;
}

// Checks for an invalid PIN number (a PIN number less than 6 characters)
function invalidPIN($PIN) {
    return strlen($PIN) != 6;

    if (!preg_match("/^[a-zA-Z_?!@#$%^&*]*$/", $PIN)) {
        $result = true;
        header("location: ../pages/top-of-home-page/login-page.php?error=invalidpin");
    }
    else {
        $result = false;
    }
}


// Checks for empty input for user logins
function emptyInputLogin($username, $password) {
    $result = "";

    if (empty($username) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

// Logs in the user if all parameters are met
function loginUser($conn, $username, $password) {
    $usernameExists = usernameExists($conn, $username, $username);

    // Checks for existing username
    if ($usernameExists === false) {
        header("location: ../pages/top-of-home-page/login-page.php?error=wrongusername");
        exit();
    }

    // Hashes password
    $passwordHashed = $usernameExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    // Checks if hashed password from user entry matches the hased password stored in the database
    if ($checkPassword === false) {
        header("location: ../pages/top-of-home-page/login-page.php?error=wrongpwlogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $usernameExists["usersID"];
        $_SESSION["userusername"] = $usernameExists["usersUsername"];
        $_SESSION["userfirstname"] = $usernameExists["usersfirstName"];
        $_SESSION["userlastname"] = $usernameExists["userslastName"];
        $_SESSION["useremail"] = $usernameExists["usersEmail"];

        // Generate a secure token for "Remember Me" functionality
        $token = bin2hex(random_bytes(32)); // Generate a 64-character secure random token

        // Save the token to the database
        if (saveRememberToken($conn, $usernameExists["usersID"], $token)) {
            // Set the token cookie with a 30-day expiration
            setcookie("remember_token", $token, time() + (86400 * 30), "/", "", true, true);
        }

        // Redirect to the shopping page
        header("location: ../pages/shop-now-redirection.php");
        exit();
    }
}

// Checks for empty inputs on forgot-password.php
function emptyInputUsernamePIN($username, $PIN) {
    $result = "";

    if (empty($username) || empty($PIN)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

// Gives user ability to log in via PIN
function loginViaPIN($conn, $username, $PIN) {
    $usernameExists = usernameExists($conn, $username, $username);

    if ($usernameExists === false) {
        header("location: ../pages/top-of-home-page/login-page.php?error=wronglogin");
        exit();
    }

    $databasePIN = $usernameExists["usersPIN"];

    if ($databasePIN !== $PIN) {
        header("location: ../pages/top-of-home-page/login-page.php?error=wrongpin");
        exit();
    }
    else {
        session_start();
        $_SESSION["userid"] = $usernameExists["usersID"];
        $_SESSION["userusername"] = $usernameExists["usersUsername"];
        $_SESSION["userfirstname"] = $usernameExists["usersfirstName"];
        $_SESSION["userlastname"] = $usernameExists["userslastName"];
        $_SESSION["useremail"] = $usernameExists["usersEmail"];
        header("location: ../pages/top-of-home-page/change-password.php?error=none");
        exit();
    }  
}

// Checks for empty inputs on change-password.php
function emptyPasswordReset($passwordOld, $password, $passwordRepeat) {
    $result = "";

    if (empty($passwordOld) || empty($password) || empty($passwordRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

// Creates a new password
function createNewPassword($conn, $userId, $passwordNew) {
    $sql = "UPDATE users SET usersPassword = ? WHERE usersID = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/change-password.php?error=stmtfailed");
        exit();
    }

    // Hashes new password
    $newHashedPassword = password_hash($passwordNew, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "si", $newHashedPassword, $userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
}

// Checks if the user's old email matches their new one
function emailMatch($emailOld, $emailNew) {
    $result = "";

    if ($emailOld == $emailNew) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

// Replaces the user's old email with their new one
function createNewEmail($conn, $userId, $emailNew) {
    $sql = "UPDATE users SET usersEmail = ? WHERE usersID = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/change-email.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $emailNew, $userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
}

// Invalid PIN
function invalidPIN1($PINOld) {
    return strlen($PINOld) != 6;

    if (!preg_match("/^[a-zA-Z_?!@#$%^&*]*$/", $PINOld)) {
        $result = true;
        header("location: ../pages/top-of-home-page/change-pin.php?error=invalidpin");
    }
    else {
        $result = false;
    }
}

// Invalid PIN
function invalidPIN2($PINNew) {
    return strlen($PINNew) != 6;

    if (!preg_match("/^[a-zA-Z_?!@#$%^&*]*$/", $PINNew)) {
        $result = true;
        header("location: ../pages/top-of-home-page/change-pin.php?error=invalidpin");
    }
    else {
        $result = false;
    }
}

// Checks if PIN numbers are the same
function PINMatch($PINOld, $PINNew) {
    $result = "";

    if ($PINOld == $PINNew) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

// Creates a new PIN number
function createNewPIN($conn, $userId, $PINNew) {
    $sql = "UPDATE users SET usersPIN = ? WHERE usersID = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/top-of-home-page/change-pin.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $PINNew, $userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
}

// Creates a new shipping address
function createShippingAddress($conn, $userId, $first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number, $is_default) {
    // If the new address is marked as default, set all other addresses as non-default
    if ($is_default) {
        $sql = "UPDATE ShippingInfo SET is_default = FALSE WHERE usersID = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            die("SQL prepare failed: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    // Now insert the new address as usual
    $sql = "INSERT INTO ShippingInfo (usersID, first_name, last_name, address, apartment_number, city, state_or_province, postal_code, country, phone_number, is_default) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL prepare failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "isssssssssi", $userId, $first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number, $is_default);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}


// Checks for empty shipping info (except for the apartment number)
function emptyInputShipping($first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number) {
    if (
        empty($first_name) || 
        empty($last_name) || 
        empty($address) || 
        empty($city) || 
        empty($state) || 
        empty($postal_code) || 
        empty($country) || 
        empty($phone_number)
    ) {
        return true;
    }
    return false;
}

// Saves order to database
function saveOrderToDatabase($conn, $userId, $order) {
    $totalAmount = $order['total_amount'];  // Get the total amount from the order

    if (is_null($totalAmount) || $totalAmount <= 0) {
        die("Invalid total amount.");
    }

    // Save main order
    $sql = "INSERT INTO Orders (usersID, total_amount, order_date) VALUES (?, ?, NOW())";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "id", $userId, $totalAmount);
    mysqli_stmt_execute($stmt);

    // Get ID of the new order
    $orderId = mysqli_insert_id($conn);

    mysqli_stmt_close($stmt);

    return $orderId;
}

// Saves order item info to database
function saveOrderItems($conn, $orderId, $cartItems) {
    foreach ($cartItems as $item) {
        $productName = $item['name'];
        $quantity = $item['quantity'];
        $unitPrice = $item['price'];

        $sql = "INSERT INTO OrderItems (order_id, product_name, quantity, unit_price) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {
            die('Failed to prepare OrderItems statement: ' . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "isid", $orderId, $productName, $quantity, $unitPrice);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}


// Fetch CURRENT orders (last 72 hours)
function fetchCurrentOrders($conn, $userId) {
    $sql = "SELECT o.id AS order_id, o.total_amount, o.order_date, i.product_name, i.quantity, i.unit_price
            FROM Orders o
            JOIN OrderItems i ON o.id = i.order_id
            WHERE o.usersID = ? AND o.order_date >= NOW() - INTERVAL 72 HOUR
            ORDER BY o.order_date DESC";
    
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die('SQL Error: ' . mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $orders = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orderId = $row['order_id'];
        if (!isset($orders[$orderId])) {
            $orders[$orderId] = [
                'order_id' => $orderId,
                'total_amount' => $row['total_amount'],
                'items' => []
            ];
        }
        $orders[$orderId]['items'][] = [
            'product_name' => $row['product_name'],
            'quantity' => $row['quantity'],
            'unit_price' => $row['unit_price'],
        ];
    }
    return array_values($orders);
}

// Fetch PAST orders (older than 72 hours)
function fetchPastOrders($conn, $userId) {
    $sql = "SELECT o.id AS order_id, o.total_amount, o.order_date, i.product_name, i.quantity, i.unit_price
            FROM Orders o
            JOIN OrderItems i ON o.id = i.order_id
            WHERE o.usersID = ? AND o.order_date < NOW() - INTERVAL 72 HOUR
            ORDER BY o.order_date DESC";
    
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die('SQL Error: ' . mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $orders = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orderId = $row['order_id'];
        if (!isset($orders[$orderId])) {
            $orders[$orderId] = [
                'order_id' => $orderId,
                'total_amount' => $row['total_amount'],
                'items' => []
            ];
        }
        $orders[$orderId]['items'][] = [
            'product_name' => $row['product_name'],
            'quantity' => $row['quantity'],
            'unit_price' => $row['unit_price']
        ];
    }
    return array_values($orders);
}

// Fetch past orders in returns
function fetchPastOrdersReturns($conn, $userId) {
    $sql = "SELECT o.id AS order_id, o.total_amount, o.order_date, i.product_name, i.quantity, i.unit_price
            FROM Orders o
            JOIN OrderItems i ON o.id = i.order_id
            WHERE o.usersID = ? AND o.order_date < NOW() - INTERVAL 72 HOUR
            ORDER BY o.order_date DESC";
    
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die('SQL Error: ' . mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $ordersReturns = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orderReturnsId = $row['order_id'];
        if (!isset($ordersReturns[$orderReturnsId])) {
            $ordersReturns[$orderReturnsId] = [
                'order_id' => $orderReturnsId,
                'total_amount' => $row['total_amount'],
                'items' => []
            ];
        }
    }
    return array_values($ordersReturns);
}

// Checks for existing shipping address so they don't get duplicated in view-shipping-info.php
function checkForExistingShippingAddress($conn, $userId, $first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number) {
    // Check if the shipping address already exists for the user
    $sqlCheck = "SELECT * FROM ShippingInfo WHERE usersID = ? AND first_name = ? AND last_name = ? AND address = ? AND apartment_number = ? AND city = ? AND state_or_province = ? AND postal_code = ? AND country = ? AND phone_number = ?";
    $stmtCheck = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmtCheck, $sqlCheck)) {
        die("SQL prepare failed: " . mysqli_error($conn));
    }

    // Bind parameters for checking
    mysqli_stmt_bind_param($stmtCheck, "isssssssss", $userId, $first_name, $last_name, $address, $apartment_number, $city, $state, $postal_code, $country, $phone_number);
    mysqli_stmt_execute($stmtCheck);
    $result = mysqli_stmt_get_result($stmtCheck);

    // If the address already exists, return false (prevent insertion)
    if (mysqli_num_rows($result) > 0) {
        return false;  // Address already exists, do not insert
    }
    
    // If no rows are found, the address is unique, so return true
    return true;
}

// Checks for an empty form in returns.php
function emptyReturnsForm($dropdown) {
    if (
        empty($dropdown)
    ) {
        return true;
    }
    return false;
}

// Checks for an existing return request
function checkForExistingReturn($conn, $order_id, $product_name, $product_price) {
    // Check if the return request already exists for the user
    $sqlCheck = "SELECT * FROM returns WHERE order_id = ? AND product_name = ? AND price = ?";
    $stmtCheck = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmtCheck, $sqlCheck)) {
        die("SQL prepare failed: " . mysqli_error($conn));
    }

    // Bind parameters for checking
    mysqli_stmt_bind_param($stmtCheck, "iss", $order_id, $product_name, $product_price);
    mysqli_stmt_execute($stmtCheck);
    $result = mysqli_stmt_get_result($stmtCheck);

    // If the return request already exists, return false (prevent insertion)
    if (mysqli_num_rows($result) > 0) {
        return false;  // Return request already exists, do not insert
    }
    
    // If no rows are found, the return request is unique, so return true
    return true;
}

// Creates a successful return request
function createReturnRequest($conn, $order_id, $product_name, $product_price, $reason, $status) {
    $stmt = $conn->prepare("INSERT INTO returns (order_id, product_name, price, reason, return_status) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $order_id, $product_name, $product_price, $reason, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}