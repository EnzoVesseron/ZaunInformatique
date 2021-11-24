/*
Insertion automatique du menu
 */
const conteneurMenu = document.querySelector('#menu')

function createMenu(currentPage) {
    conteneurMenu.classList.add('flex', 'flex-row', 'my-2' , 'justify-center' , 'md:justify-between' , 'flex-wrap' , 'items-start', 'z-10','relative','absolute');
    let div1 = document.createElement('div')
    div1.classList.add('ml-5', 'bg-white', 'shadow', 'p-1', 'px-3', 'font-bold', 'rounded-2xl', 'mb-2', 'mb:mb-0')
    div1.textContent = "ZaunInformatique"
    let div2 = document.createElement("div")
    div2.classList.add('md:mr-5', 'flex', 'flex-row', 'flex-wrap')
    let divList = document.createElement('div')
    divList.classList.add('p-1', 'px-3', 'bg-white', 'shadow', 'rounded-2xl')
    /*
    Elements menu droite
     */
    let a1 =document.createElement("a")
    let a2 =document.createElement("a")
    let a3 =document.createElement("a")
    let a4 =document.createElement("a")

    a1.classList.add('mx-1')
    a1.textContent = "Accueil"
    a1.href = "accueil.php"

    a2.classList.add('mx-1')
    a2.textContent = "Sur mesure"
    a2.href = "surmesure.php"

    a3.classList.add('mx-1')
    a3.textContent = "Réparations"
    a3.href = "reparations.php"

    a4.classList.add('mx-1')
    a4.textContent = "A propos"
    a4.href = "apropos.php"

    let asvg = document.createElement("a")
    asvg.className = "p-1 px-3 bg-white shadow rounded-2xl ml-5 absolute right-5 top-0 md:relative md:right-auto md:top-auto"

    let svg = document.createElement("img")
    svg.src = "../styles/img/global/account.svg"

    /*
    Fonction qui choisit quel élément est sélectionné
     */
    if (currentPage === "accueil")
        a1.classList.add( 'text-red-500', 'border-b-2', 'border-red-500', 'pb-1')
    if (currentPage === "surmesure")
        a2.classList.add( 'text-red-500', 'border-b-2', 'border-red-500', 'pb-1')
    if (currentPage === "reparations")
        a3.classList.add( 'text-red-500', 'border-b-2', 'border-red-500', 'pb-1')
    if (currentPage === "apropos")
        a4.classList.add( 'text-red-500', 'border-b-2', 'border-red-500', 'pb-1')


    conteneurMenu.appendChild(div1)
    conteneurMenu.appendChild(div2)
    div2.appendChild(divList)
    divList.appendChild(a1)
    divList.appendChild(a2)
    divList.appendChild(a3)
    divList.appendChild(a4)
    div2.appendChild(asvg)
    asvg.appendChild(svg)

}