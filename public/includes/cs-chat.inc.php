<?php

    // Gets items from form

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userCategory = htmlspecialchars($_POST["message"]);
        $userQuestion = htmlspecialchars($_POST["response"]);
        $botAnswer = "";

        // function to check faq responses

        // Simulated responses
        $faq = [
                "Where is my order?" => 1,
                "How do I track my order?" => 2, 
            
                "Can I cancel my order?" => 3,
                "What are the shipping options?" => 4,
                
                "Do you ship internationally?" => 5,
                "How long does standard delivery take?" => 6,

                "How do I return an item?" => 7,
                "What is your return policy?" => 8,
                
                "Can I exchange my item?" => 9,
                "Are your jerseys authentic?" => 10,
                
                "What sizes are available?" => 11,
                "Will you restock sold out items?" => 12,

                // "I can't access certain soccer teams' pages. Why is that?" => 13, // not working (I don't know why, it has the same logic as the others)
                // "Why aren't there any NCAA products available?" => 14 // not working (I don't know why, it has the same logic as the others)
               ];

        
        if (isset($faq[$userQuestion])) {
            $responseCode = $faq[$userQuestion];
            header("location: ../pages/customer-service-chat.php?response=$responseCode");
            exit();
        }
        else{
           $botAnswer = $faq[$userQuestion] ?? "Sorry, I don’t have an answer for that yet."; 
        }
    }
?>