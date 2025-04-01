// Function to get query string parameters 
function getQueryParams() {
    const params = new URLSearchParams(window.location.search);
    return {
        location: params.get('location'),
        car_name: params.get('car_name'),
        car_price: params.get('car_price'),
    };
}

// Capture the query string parameters
const { location, car_name, car_price } = getQueryParams();

// Pre-fill the form fields on the contact page if query parameters exist
if (location) {
    document.querySelector("select[name='location']").value = location;
}

if (car_name) {
    document.querySelector("select[name='car-type']").value = car_name;
}

if (car_price) {
    document.querySelector("#car-price").value = `Ksh ${car_price}`;  // Display formatted price
    document.querySelector("#hidden-car-price").value = car_price;  // Hidden input for submission
}

// Handle form submission and pass car details to hidden inputs
document.querySelector("form").addEventListener("submit", function () {
    document.getElementById("hidden-car").value = document.getElementById("car-type").value;
    document.getElementById("hidden-car-price").value = document.getElementById("car-price").value.replace("Ksh ", ""); // Remove "Ksh" for clean submission
});

// Navbar Toggle and Scroll Effects
const navbar = document.querySelector("nav");
window.addEventListener("scroll", () =>
    navbar.classList.toggle("sticky", window.scrollY > 0)
);
const menu = document.querySelector(".menu");
const toggleMenu = () => menu.classList.toggle("active");

document.querySelector(".menu-btn").addEventListener("click", toggleMenu);
document.querySelector(".close-btn").addEventListener("click", toggleMenu);

document
    .querySelectorAll(".menu a")
    .forEach((link) => link.addEventListener("click", toggleMenu));

// Scroll Reveal for Animations
const sr = ScrollReveal({
    origin: "bottom",
    distance: "40px",
    duration: 1000,
    delay: 400,
    easing: "ease-in-out",
});

sr.reveal(".hero-headlines", { origin: "left" });
sr.reveal(".hero-page img", { origin: "right" });
sr.reveal(".about");
sr.reveal(".about h1", { delay: 500 });
sr.reveal(".about p", { delay: 700 });
sr.reveal(".about-info", { delay: 1000 });
sr.reveal(".collection h1");
sr.reveal(".collection-container", { delay: 900 });
sr.reveal(".review h1");
sr.reveal(".review-container", { delay: 800 });
sr.reveal(".callout");
sr.reveal(".contact");

// Smooth Scrolling for Anchor Links
document.querySelectorAll("a[href^='#']").forEach(anchor => {
    anchor.addEventListener("click", function(event) {
        event.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 50,
                behavior: "smooth"
            });
        }
    });
});