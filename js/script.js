const button = document.getElementById("goToTop")
const today = new Date()
const year = today.getFullYear()
const footerText = document.getElementById("footerText")

if (footerText)
  footerText.innerHTML = `&copy; 2024-${year} Ludosphere. All rights reserved.`

const burgerButton = document.querySelector(".bar")
const burgerMenu = document.querySelector("aside")
const burgerMenuSize = burgerMenu.offsetWidth
let burgerMenuOpened = false;

function firstArrowScroll() {
  const dessous = document.querySelector(".dessous");

  if (dessous) {
    const rect = dessous.getBoundingClientRect();
    const to = rect.top + window.scrollY + 5;
    window.scrollTo({
      top: to,
      behavior: "smooth"
    })
  } else {
    console.log("Dessous n'existe pas")
  }
}

gsap.registerPlugin(ScrollTrigger)

// Animation du bouton pour revenir en haut de la page
if (window.scrollY > 1000) {
  button.style.opacity = "1"
  button.disabled = false;
} else {
  button.style.opacity = "0"
  button.disabled = true;
}

// Définir si le bouton pour revenir en haut de la page est visible ou non
function showScrollTopOrNot() {
  if (window.scrollY > 1000) {
    button.style.opacity = "1"
    button.disabled = false;
  }
  else {
    button.style.opacity = "0"
    button.disabled = true;
  }
}

// Gérer l'affichage du menu burger
function handleBurgerMenu() {
  if (burgerMenuOpened) {
    gsap.to("aside", {
      left: "-100vw",
      duration: 0.5,
      ease: "sine.out"
    })
  }
  else
    gsap.to("aside", {
      left: "0",
      duration: 0.75,
      ease: "circ.out"
    })
  burgerMenuOpened = !burgerMenuOpened
  console.log("menu changed")
}

// Fermer le menu burger
function closeBurgerMenu() {
  if (burgerMenuOpened) {
    gsap.to("aside", {
      left: "0",
      duration: 1.75,
      ease: "expo.out"
    })
    burgerButton.click()
    burgerMenuOpened = false
  }
}

document.querySelector("main").addEventListener("click", closeBurgerMenu)
window.addEventListener("scroll", showScrollTopOrNot)

// Initialize the agent on page load.
const fpPromise = import('https://fpjscdn.net/v3/tIUMXs50DC4YHKxqwWqq')
  .then(FingerprintJS => FingerprintJS.load({
    region: "eu"
  }))

// Get the visitorId when you need it.
fpPromise
  .then(fp => fp.get())
  .then(result => {
    const visitorId = result.visitorId
  })

// Animation section
const items = document.querySelectorAll(".item")
const projectFromLeft = document.querySelectorAll(".projectFromLeft")
const projectFromRight = document.querySelectorAll(".projectFromRight")

// Animation du texte principal
document.addEventListener("DOMContentLoaded", (event) => {
  gsap.to("#whoAmI span", {
    y: 0,
    opacity: 1,
    ease: "elastic.out(1, 0.5)",
    duration: 2,
    stagger: 0.1
  })
})

// Update des éléments avec la calsse item et tes projets (animation)
function updateItems() {
  items.forEach(item => {
    let rect = item.getBoundingClientRect();
    const positionY = rect.top + window.scrollY;

    if (window.scrollY > positionY - 850) {
      item.style.marginRight = "0";
      item.style.opacity = "1";
    }
  });
  projectFromLeft.forEach(project => {
    const rect = project.getBoundingClientRect();
    const positionY = rect.top + window.scrollY;

    if (window.scrollY > positionY - 550) {
      project.style.marginRight = "0";
      project.style.transform = "translateY(0) translateX(0) rotate(0)";
      project.style.opacity = "1";
    }
  });
  projectFromRight.forEach(project => {
    const rect = project.getBoundingClientRect();
    const positionY = rect.top + window.scrollY;

    if (window.scrollY > positionY - 550) {
      project.style.marginRight = "0";
      project.style.transform = "translateY(0) translateX(0) rotate(0)";
      project.style.opacity = "1";
    }
  });
}

// Animation du menu ouvrant gsap
const topGsap = document.querySelector(".topGsap")
const bottomGsap = document.querySelector(".bottomGsap")
const childrens = document.querySelectorAll(".insideGsapMenu div")
const ends = document.querySelectorAll("#end .p")

// Porte du haut
const tl = gsap.timeline({
  invalidateOnRefresh: true
})
tl.fromTo(topGsap, {
  yPercent: 0,
}, {
  yPercent: -110,
  scrollTrigger: {
    trigger: topGsap,
    toggleActions: "none none reverse none",
    start: "bottom 50%",
    end: "bottom top",
    markers: false,
    scrub: 3,
    pin: true
  },
  onEnterBack: () => {
    topGsap.style.position = "";
  }
});

// Porte du bas
tl.fromTo(bottomGsap, {
  y: 0
}, {
  yPercent: 200,
  scrollTrigger: {
    trigger: bottomGsap,
    toggleActions: "none none reverse none",
    start: "top 50%",
    end: "bottom top",
    markers: false,
    scrub: 3,
    pin: true,
    onLeave: () => {
      bottomGsap.style.display = "none"
    }
  }
});

const tlChildrens = gsap.timeline({
  scrollTrigger: {
    trigger: childrens,
    toggleActions: "play none reverse none",
    start: "top bottom",
    end: "bottom 10vh",
    markers: false,
    scrub: 2,
    pin: true,
    onLeave: () => {
      childrens.style.display = "none"
    }
  },
});

tlChildrens.fromTo(childrens, {
  y: -100
}, {
  y: -1250,
  duration: 100,
  ease: "slow(0.7,0.7,true)",
  stagger: 5
})

const tlEnds = gsap.timeline({
  scrollTrigger: {
    trigger: ends,
    toggleActions: "play none reverse none",
    start: "top bottom",
    end: "bottom -10vh",
    markers: false,
    scrub: 3,
    pin: true
  },
});

tlEnds.fromTo(ends, {
  y: 0
}, {
  y: -800,
  duration: 100,
  ease: "power1.inOut",
  stagger: 1
})
  .to(ends, {
    y: -1350,
    duration: 20,
    ease: "power1.out",
    stagger: 1
  });

// Animation des items
updateItems()

window.addEventListener('scroll', () => {
  updateItems()
});