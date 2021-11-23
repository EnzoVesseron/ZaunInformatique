<?php declare(strict_types=1);

require_once('autoload.php');

$myPage = new WebPage("ZaunInformatique");

$myPage->appendCssUrl("./styles/css/tailwind.css");
$myPage->appendToHead(<<<HTML
<meta name="viewport" content="width=device-width, initial-scale=1.0">
HTML);

$myPage->appendContent(<<<HTML
<html class="bg-gray-200 max-w-screen-2xl mx-auto" lang="fr">
    <header id="menu"></header>
    
    <body>
        <section id="centre">
            <img src="styles/img/accueil/accueil%20central.svg" alt="logo central" class="ml-auto mr-auto mt-10">
            <div class="flex justify-center -mt-12">
                <button class="m-2 bg-white w-64 shadow rounded-2xl p-1 px-3 font-medium">Commencer a personnaliser mon PC maintenant</button>
                <button class="m-2 bg-white w-64 shadow rounded-2xl p-1 px-3 font-medium">Un problème ?<br>Besoin d’une réparation ?</button>
            </div>
        </section>
        
        <section id="description" class="py-20">
            <!--Première partie description-->
            <div class="flex px-16 md:flex-nowrap flex-wrap justify-center">
                <img src="styles/img/accueil/ImageDesc1.svg" alt="ImageDesc" class="md:w-2/5">
                <div class="md:w-2/3 flex-row align-middle self-center">
                    <h1 class="text-center text-2xl font-bold">Nous vous accompagnons dans la création de votre configuration</h1>
                    <p class="text-center pt-5">Nous allons vous poser plusieurs questions qui vont nous permettre de déterminer quelle est la meilleure configuration possible pour vos besoins.</p>
                    <button class="shadow rounded-2xl p-1 px-3 font-medium block m-auto mt-5 bg-gradient-to-r from-yellow-500 to-red-500 text-white hover:from-red-500 hover:to-yellow-500">Commencer à créer ma config</button>
                </div>
            </div>
            <!--Deuxième partie description-->
            <div class="flex px-16 md:flex-nowrap flex-wrap pt-10 justify-center">
                <div class="md:w-2/3 flex-row align-middle self-center order-last md:order-first">
                    <h1 class="text-center text-2xl font-bold">Titre</h1>
                    <p class="text-center pt-5">Description</p>
                    <button class="shadow rounded-2xl p-1 px-3 font-medium block m-auto mt-5 bg-gradient-to-r from-yellow-500 to-red-500 text-white hover:from-red-500 hover:to-yellow-500">Boutton</button>
                </div>
                <img src="styles/img/accueil/ImageDesc2.svg" alt="ImageDesc" class="md:w-2/5">
            </div>
        </section>
    </body>
    
    <footer class="">
    </footer>
    
    <script src="./scripts/menu.js"></script>
    <script>createMenu("accueil");</script>
</html>

HTML);

echo $myPage->toHTML();