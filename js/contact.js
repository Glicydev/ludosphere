const inputs = document.querySelectorAll(".inputGrp")

const confirmationMessage = document.querySelector(".confirmation").innerText

/** Agrandir les inputs */
function bigInput(inputGroup) {
    const inputInside = inputGroup.querySelector(".inputGrp input");

    if (inputInside) {
        inputGroup.style.height = "2.5rem"
        inputInside.focus()
    }
}

/** Réduit la taille de l'input si sa valeur est nulle */
function handleInput(inputGroup) {
    const inputInside = inputGroup.querySelector("input")
    if (!inputInside.value)
        inputGroup.style.height = "1.3rem"
}

// Gère l'affichage des inputs au click er au unfocus
inputs.forEach(inputGroup => {
    const inputInside = inputGroup.querySelector("input")
    inputGroup.addEventListener("click", () => bigInput(inputGroup))
    inputInside.addEventListener("blur", () => handleInput(inputGroup))
    if (inputInside.value)
        inputGroup.style.height = "2.5rem"
});

if (confirmationMessage === "Thank you for your message !") {
    gsap.to("form", {
        bottom: "100vh",
        ease: "power3.out",
        duration: 1
    })
    gsap.to(".confirmation", {
        top: "50%",
        left: "50%",
        xPercent: -50,
        yPercent: -50,
        duration: 2,
        ease: "elastic.out"
    })
} else if (confirmationMessage !== "") {
    gsap.fromTo("form",
        {
            left: "100",
        },
        {
            left: "0",
            ease: "elastic.out",
            duration: 1
        }
    )
}