// scroll to section functionality

const navLink = document.querySelectorAll(".nav-link");


navLink.forEach((link) =>
  link.addEventListener("click", () => {
    ul.classList.remove("show");
  })
);


// scroll to top functionality


function scrollUp() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
  
