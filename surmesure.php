<?php
declare(strict_types=1);

require_once("autoload.php");

$myPage = new WebPage("Sur mesure");

$myPage->appendCssUrl("./styles/css/tailwind.css");
$myPage->appendCssUrl("./styles/css/global.css");
$myPage->appendCssUrl("./styles/css/questionnaire.css");
$myPage->appendToHead(<<<HTML
<meta name="viewport" content="width=device-width, initial-scale=1.0">
HTML);

$myPage->appendContent(<<<HTML
<html class=h-full" lang="fr">
    <header id="menu" class=""></header>
    
    <section id="body" class="flex flex-col h-full justify-center absolute top-0 w-full">
        <h1 class="text-center text-3xl font-bold ">Bienvenue dans l’outil de création de config sur mesure</h1>
        <p class="text-center pt-5">Nous allons vous poser plusieurs questions qui vont nous permettre de déterminer quelle est la meilleure configuration possible pour vos besoins.</p>
        <div class="flex justify-center">
            <button onclick="question1()" class="shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-gradient-to-r from-yellow-500 to-red-500 text-white hover:from-red-500 hover:to-yellow-500">Commencer à créer ma config</button>
            <button class="shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-white" >Pas besoin d'aide je suis un pro !</button>
        </div>
        

    </section>





    
    <script src="./scripts/menu.js"></script>
    <script src="./scripts/questionnaire.js"></script>
    <script>createMenu("surmesure");</script>
</html>

HTML
);

echo $myPage->toHTML();

