const inputs = document.querySelectorAll(".inputGrp")

function bigInput(inputGroup) {
    const inputInside = inputGroup.querySelector(".inputGrp input");

    if (inputInside) {
        inputGroup.style.height = "2.5rem"
        inputInside.focus()
    }
}

function handleInput(inputGroup) {
    const inputInside = inputGroup.querySelector("input")
    if(!inputInside.value)
        inputGroup.style.height = "1.3rem"
}

inputs.forEach(inputGroup => {
    const inputInside = inputGroup.querySelector("input")
    inputGroup.addEventListener("click", () => bigInput(inputGroup))
    inputInside.addEventListener("blur", () => handleInput(inputGroup))
    if (inputInside.value)
        inputGroup.style.height = "2.5rem"
});