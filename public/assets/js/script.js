// show password/PIN

const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
    // toggle the icon
    this.classList.toggle("bi-eye");
});

// confirm delete (shipping address)
function confirmDelete() {
  return confirm("Are you sure you want to delete this address?");
}


//***********************************************************************************************************************************************************************************************//


// customer service chat logic

function updateResponseOptions() {
  const message = document.getElementById("message").value;
  const responseDropdown = document.getElementById("response");

  // Clear previous options
  responseDropdown.innerHTML = "";

  // Define bot responses for each topic
  let options = [];

  if (message === "order") {
    options = ["Where is my order?", "How do I track my order?", "Can I cancel my order?"];
  } else if (message === "shipping") {
    options = ["What are the shipping options?", "Do you ship internationally?", "How long does delivery take?"];
  } else if (message === "returns") {
    options = ["How do I return an item?", "What is your return policy?", "Can I exchange my item?"];
  } else if (message === "products") {
    options = ["Are your jerseys authentic?", "What sizes are available?", "Will you restock sold out items?", "I can't access certain soccer teams' pages. Why is that?", "Why aren't there any NCAA products available?"];
  }

  if (options.length > 0) {
    responseDropdown.style.display = "inline";
    options.forEach(function(opt) {
        const optionElement = document.createElement("option");
        optionElement.value = opt;
        optionElement.text = opt;
        responseDropdown.appendChild(optionElement);
    });
  } else {
    responseDropdown.style.display = "none";
  }
}