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

// Implements Lazy Loading for the skills section
document.addEventListener("DOMContentLoaded", () => {
  const skillsContainer = document.getElementById("skills");
  if (!skillsContainer) return;

  const skillElements = skillsContainer.querySelectorAll('[id$="-container"]');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove("h-0", "opacity-0", "scale-95");
        entry.target.classList.add("h-auto", "opacity-100", "scale-100");
        console.log(entry.target);
        loadImage(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  skillElements.forEach(container => {
    observer.observe(container);
  });

  function loadImage(container) {
    const skill = container.id.replace("-container", "");
    const image = document.getElementById(`${skill}-default`);

    container.style.pointerEvents = "none";
    image.classList.remove("hidden");

    const imageComputedStyle = window.getComputedStyle(image);
    const containerComputedStyle = window.getComputedStyle(container);

    let imageHeight = image.offsetHeight;
    if (!imageHeight) {
      imageHeight = parseInt(imageComputedStyle.height) || 196;
    }

    const paddingTop = parseInt(containerComputedStyle.paddingTop) || 0;
    const paddingBottom = parseInt(containerComputedStyle.paddingBottom) || 0;
    const totalHeight = imageHeight + paddingTop + paddingBottom + 2;

    image.classList.add("hidden");
    container.style.height = `${totalHeight}px`;

    const loader = document.createElement("div");
    loader.className = "absolute w-full flex justify-center items-center";
    loader.style.height = `${totalHeight}px`;

    loader.innerHTML = `
      <div class="flex space-x-2">
        <span class="sr-only">Loading...</span>
        <div class="h-3 w-3 bg-primary rounded-full animate-bounce [animation-delay:-0.3s]"></div>
        <div class="h-3 w-3 bg-primary rounded-full animate-bounce [animation-delay:-0.15s]"></div>
        <div class="h-3 w-3 bg-primary rounded-full animate-bounce"></div>
      </div>
    `;

    container.appendChild(loader);

    if (image) {
      const srcValue = image.getAttribute("src");
      if (!srcValue || srcValue.trim() === "") {
        container.style.pointerEvents = "none";
        return;
      }
    }

    setTimeout(() => {
      loader.remove();
      image.classList.remove("hidden");
      container.style.height = "auto";
      container.style.pointerEvents = "auto";
    }, 1000);
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