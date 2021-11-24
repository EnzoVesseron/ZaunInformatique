let repQ1 = undefined
let repQ2 = undefined
let repQ3 = undefined
let repQ4 = undefined

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

function addButtonNext(elementToAppend , questionToGo) {
    let button = document.createElement("button")
    button.className = "shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-gradient-to-r from-yellow-500 to-red-500 text-white hover:from-red-500 hover:to-yellow-500"
    button.textContent = "Continuer"
    button.onclick = questionToGo
    elementToAppend.appendChild(button)
}

function addButtonReturn(elementToAppend, questionToGo) {
    let button = document.createElement("button")
    button.className = "shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-white"
    button.textContent = "Retour"
    button.onclick = questionToGo
    elementToAppend.appendChild(button)

}

function returnToStart() {
    document.location.href="../surmesure.php"
}

function question1() {
    videElement(conteneurBody)
    progressBar(1)
    addTitre("Quel est votre budget ?")
    addSousTitre("Sélectionnez le budget que vous êtes prêt a mettre dans la création de votre PC")


    let priceInput = document.createElement("input")
    priceInput.id = "priceInput"
    priceInput.type = "number"
    priceInput.step = "100"
    priceInput.defaultValue = "1000"
    priceInput.className = "mx-auto w-20 my-5 text-center rounded font-bold shadow"
    conteneurBody.appendChild(priceInput)

    let priceRangeInput = document.createElement("input")
    priceRangeInput.type = "range"
    priceRangeInput.className = "w-96 mx-auto slider shadow"
    priceRangeInput.min = "500"
    priceRangeInput.max = "5000"
    priceRangeInput.step = "100"
    priceRangeInput.defaultValue = "1000"
    priceRangeInput.addEventListener("input" , function(){
        priceInput.value = priceRangeInput.value;
    });
    priceInput.addEventListener("input" , function(){
        priceRangeInput.value = priceInput.value;
    });
    conteneurBody.appendChild(priceRangeInput)

    let conteneurButton = document.createElement("div")
    conteneurButton.className = "flex justify-center mt-10"
    conteneurBody.appendChild(conteneurButton)
    addButtonNext(conteneurButton, question2)
    addButtonReturn(conteneurButton, returnToStart)


}

function question2() {
    repQ1 = document.querySelector("#priceInput").value
    videElement(conteneurBody)
    progressBar(2)
    addTitre("Quels usages en avez vous ?")
    addSousTitre("Sélectionnez l’usage que vous souhaitez privilégier pour votre nouveau pc")

    const conteneurAllCards = document.createElement("div")
    conteneurAllCards.className = "flex flex-wrap justify-center mt-10"
    conteneurBody.appendChild(conteneurAllCards)

    /*
        Card 1
     */
    const conteneurCard1 = document.createElement("div")
    conteneurCard1.className = "bg-white rounded-2xl shadow"
    conteneurAllCards.appendChild(conteneurCard1)

    const imageCard1 = document.createElement("img")
    imageCard1.className = ""
    imageCard1.src = "./styles/img/questionnaire/montage.png"
    conteneurCard1.appendChild(imageCard1)

    const textCard1 = document.createElement("p")
    textCard1.className = "text-center my-10"
    textCard1.textContent = "Montage photo / vidéo"
    conteneurCard1.appendChild(textCard1)


    /*
    Card 2
     */
    const conteneurCard2 = document.createElement("div")
    conteneurCard2.className = "bg-white rounded-2xl mx-20 shadow"
    conteneurAllCards.appendChild(conteneurCard2)

    const imageCard2 = document.createElement("img")
    imageCard2.src = "./styles/img/questionnaire/jeuxvideo.png"
    conteneurCard2.appendChild(imageCard2)

    const textCard2 = document.createElement("p")
    textCard2.className = "text-center my-10"
    textCard2.textContent = "Jeux vidéo"
    conteneurCard2.appendChild(textCard2)


    /*
    Card 3
    */
    const conteneurCard3 = document.createElement("div")
    conteneurCard3.className = "bg-white rounded-2xl shadow"
    conteneurAllCards.appendChild(conteneurCard3)

    const imageCard3 = document.createElement("img")
    imageCard3.src = "./styles/img/questionnaire/programmation.png"
    conteneurCard3.appendChild(imageCard3)

    const textCard3 = document.createElement("p")
    textCard3.className = "text-center my-10"
    textCard3.textContent = "Programmation"
    conteneurCard3.appendChild(textCard3)


    let conteneurButton = document.createElement("div")
    conteneurButton.className = "flex justify-center mt-10"
    conteneurBody.appendChild(conteneurButton)
    addButtonNext(conteneurButton, question3)
    addButtonReturn(conteneurButton, question1)

}

function question3() {
    
}