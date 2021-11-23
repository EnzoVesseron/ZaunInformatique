

const conteneurBody = document.querySelector('#body')

function videElement(elt) {
    while (elt.firstChild) {
        elt.removeChild(elt.firstChild);
    }
}

function progressBar(numQuestion) {
    let conteneurProgressBar = document.createElement("div")
    conteneurProgressBar.className = "flex justify-center mb-10"
    conteneurProgressBar.id = "progressBar"
    conteneurBody.appendChild(conteneurProgressBar)

    let backgroundPG = document.createElement("div")
    backgroundPG.className = "bg-white rounded-full shadow-lg w-3/5 text-center"
    conteneurProgressBar.appendChild(backgroundPG)

    let contenuPG = document.createElement("div")
    contenuPG.className = "bg-gradient-to-r from-yellow-500 to-red-500 rounded-full text-white text-center font-bold w-" + numQuestion + "/4"
    const pourcentProgress = 25 * numQuestion
    contenuPG.textContent = pourcentProgress + "%"
    backgroundPG.appendChild(contenuPG)
}

function addSousTitre(textContent) {
    let soustitre = document.createElement("p")
    soustitre.className = "text-center pt-5"
    soustitre.textContent = textContent
    conteneurBody.appendChild(soustitre)
}
function addTitre(textContent) {
    let titre = document.createElement("h1")
    titre.className = "text-center text-3xl font-bold"
    titre.textContent = textContent
    conteneurBody.appendChild(titre)
}

function question1() {
    videElement(conteneurBody)
    progressBar(1)
    addTitre("Quel est votre budget ?")
    addSousTitre("Sélectionnez le budget que vous êtes prêt a mettre dans la création de votre PC")

    let priceInput = document.createElement("input")
    priceInput.id = "priceInput"
    priceInput.type = "number"
    conteneurBody.appendChild(priceInput)

    let princeRangeInput = document.createElement("input")
    princeRangeInput.type = "range"
    princeRangeInput.className = "bg-yellow-400"
    princeRangeInput.addEventListener("change" , function(){
        priceInput.value = princeRangeInput.value;
    });
    priceInput.addEventListener("change" , function(){
        princeRangeInput.value = priceInput.value;
    });
    conteneurBody.appendChild(princeRangeInput)

}