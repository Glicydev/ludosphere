const footerText = document.getElementById("footerText")
const today = new Date()
const year = today.getFullYear()
const button = document.getElementById("goToTop")
const burgerButton = document.querySelector(".bar")
const burgerMenu = document.querySelector("aside")
const chars = document.querySelectorAll("#whoAmI span")
const items = document.querySelectorAll(".item")
const burgerMenuSize = burgerMenu.offsetWidth
let burgerMenuOpened = false;

footerText.innerHTML = `&copy; 2024-${year} Ludoit. All rights reserved.`

chars.forEach((char, index) => {
  setTimeout(() => {
    char.style.animationName = "charsAnim";
    char.style.animationDuration = "0.5s";
    char.style.animationFillMode = "forwards";
  }, index * 75);
});

window.addEventListener('scroll', () => {
  items.forEach(item => {
    let rect = item.getBoundingClientRect();
    const positionY = rect.top + window.scrollY;
    
    if (window.scrollY > positionY - 850) {
      item.style.marginRight = "0";
      item.style.opacity = "1";
    } else {
      item.style.marginRight = "10vw";
      item.style.opacity = "0";
    }
  });
});

if (window.scrollY > 1000) {
  button.style.opacity = "1"
  button.disabled = false;
}
else {
  button.style.opacity = "0"
  button.disabled = true;
}

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

function handleBurgerMenu() {
  if (burgerMenuOpened)
    burgerMenu.style.left = `-100vw`
  else
    burgerMenu.style.left = `0`
  burgerMenuOpened = !burgerMenuOpened
}

function closeBurgerMenu() {
  if (burgerMenuOpened) {
    burgerMenu.style.left = `-100vw`
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