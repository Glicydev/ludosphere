const footerText = document.getElementById("footerText")
const today = new Date()
const year = today.getFullYear()
const button = document.getElementById("goToTop");

button.style.display = "none";

footerText.innerHTML = `&copy; 2024-${year} Ludoit. All rights reserved.`

function showScrollTopOrNot() {
  if (window.scrollY > 1000)
    button.style.display = "block"
  else
    button.style.display = "none"
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