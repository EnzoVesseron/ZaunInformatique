<?php declare(strict_types=1);

require_once('autoload.php');

$myPage = new WebPage("ZaunInformatique");

$myPage->appendCssUrl("./styles/css/tailwind.css");
$myPage->appendCssUrl("./styles/css/global.css");
$myPage->appendContent(<<<HTML
    <header id="menu"></header>
    
    <section class="flex flex-col justify-center -mt-20 h-full my-auto">
        <h1 class="text-center text-2xl font-bold">Connexion</h1>
        <img src="./styles/img/connexion_inscriptions/chat%201.png" class="w-80 mx-auto -mt-14">
        <form id="connexion" method="post" action="./src/User/Authentification/connexion_auth.php">
            <div class="flex flex-col w-80 mx-auto">
                <label class="ml-1 font-bold">Email:</label>
                <input type="email" class="shadow rounded">
                <label class="ml-1 font-bold mt-6">Mot de passe:</label>
                <input type="password" class="shadow rounded">
            </div>
        </form>
             <div class="d-flex justify-center">
                <button type="submit" class="mx-auto block shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-gradient-to-r from-yellow-500 to-red-500 text-white hover:from-red-500 hover:to-yellow-500">S'inscrire</button>
                <button onclick="document.location.replace('inscription.php');" class="mx-auto block shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-white" >Je n'ai pas encore de compte</button>
            </div>
    </section>

    <script src="./scripts/menu.js"></script>
    <script>createMenu("");</script>
HTML);

echo $myPage->toHTML();