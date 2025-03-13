// Header navigation
const mobileMenuButton = document.getElementById("mobile-menu-button");

mobileMenuButton.onclick = function toggleMenu() {
  const navToggle = document.getElementsByClassName("toggle");
  for (let i = 0; i < navToggle.length; i++) {
    navToggle.item(i).classList.toggle("hidden");
  }
};

const header = document.querySelector("header");
window.addEventListener("scroll", function () {
      if (window.scrollY > 100) {
            header.classList.toggle("sticky", window.scrollY > 0);
            header.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
          } else {
            header.style.backgroundColor = 'transparent';
      }
});

// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const targetSection = document.querySelector(this.getAttribute('href'));

      if (!targetSection) return;

      const nav = document.querySelector('nav');
      const navHeight = nav ? nav.offsetHeight : 0;
      const extraPadding = window.innerWidth >= 768 ? 50 : 0;

      window.scrollTo({
          top: targetSection.offsetTop - navHeight - extraPadding,
          behavior: 'smooth'
      });

      if (window.location.hash) {
          history.replaceState(null, null, window.location.pathname);
      }
  });
});

// Smooth scrolling and active link update
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav div a");

function updateActiveNav() {
  let current = sections[0].getAttribute("id");

  sections.forEach((section, index) => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.clientHeight;

      if (window.scrollY >= sectionTop && window.scrollY > sectionTop + sectionHeight) {
          if (index + 1 < sections.length) {
            current = sections[index + 1].getAttribute("id");
          }
      }
  });

  navLinks.forEach((link) => {
      link.classList.remove("text-primary");
      link.classList.add("text-white");

      if (link.getAttribute("href").substring(1) === current) {
          link.classList.remove("text-white");
          link.classList.add("text-primary");
      }
  });
}

document.addEventListener("DOMContentLoaded", updateActiveNav);

window.addEventListener("scroll", updateActiveNav);