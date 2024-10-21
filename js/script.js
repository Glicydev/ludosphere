const footerText = document.getElementById("footerText")
const today = new Date()
const year = today.getFullYear()
const button = document.getElementById("goToTop")
const burgerButton = document.querySelector(".bar")
const burgerMenu = document.querySelector("aside")
const burgerMenuSize = burgerMenu.offsetWidth
console.log(burgerMenuSize)
let burgerMenuOpened = false;

footerText.innerHTML = `&copy; 2024-${year} Ludoit. All rights reserved.`

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