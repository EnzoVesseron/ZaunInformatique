<?php
declare(strict_types=1);

require_once "autoload.php";

$maPage = new WebPage();

$myPage = new WebPage("ZaunInformatique Inscription");

$myPage->appendCssUrl("./styles/css/tailwind.css");
$myPage->appendCssUrl("./styles/css/global.css");
$myPage->appendContent(<<<HTML
    <header id="menu"></header>
    
        <script>
     function onSend (e){
        let mail = document.querySelector("input[name='mail']").value
        let nom = document.querySelector("input[name='nom']").value
        let prenom = document.querySelector("input[name='prenom']").value
        let password = document.querySelector("input[name='password']").value
        let passwordRepeat = document.querySelector("input[name='passwordRepeat']").value
        if (password !== passwordRepeat) {
            e.preventDefault()
            document.querySelector("#error").innerHTML = "<span class='text-red-600 font-bold text-center'>Les mots de passe ne correspondent pas</span>"
        }else {
            document.getElementById("code").value = CryptoJS.SHA512(password.value).toString();  
            document.querySelector("input[name='password']").value = ""
            document.querySelector("input[name='passwordRepeat']").value = ""
            /*
            JEN SUIS LA ENVOIE LE MOT DE  PASSE ET N'ENVOIE PAS LE CODE
             */
        }
            
    }
</script>
    
    <section class="flex flex-col justify-center h-full -mt-24 my-auto">
        <h1 class="text-center text-2xl font-bold">Inscription</h1>
        <img src="./styles/img/connexion_inscriptions/chat%201.png" class="w-80 mx-auto -mt-14">
        <form class="" id="inscription" method="post" action="./src/User/Authentification/inscription_auth.php" onsubmit="onSend(event)">
            <div class="flex flex-col w-80 mx-auto">
                <div id="error">
HTML);


if (isset($_GET['error'])){
if ($_GET['error'] === "email") {
    $myPage->appendContent(<<<HTML
<span class="text-red-600 font-bold text-center">L'email est déjà utilisé</span>
HTML);
}}


$myPage->appendContent(<<<HTML
                </div>
                <label class="ml-1 font-bold">Email:</label>
                <input type="email" name="mail" class="shadow rounded" required>
                <div class="flex mt-6 w-80 mx-auto ">
                    <div class="flex flex-col w-30">
                        <label class="ml-1 font-bold">Nom:</label>
                        <input type="text" name="nom" class="shadow rounded" required >
                    </div>
                    <div class="flex flex-col ">
                        <label class="ml-1 font-bold">Prenom:</label>
                        <input type="text" name="prenom" class="shadow rounded" required>
                    </div>
                </div>
                <label class="ml-1 font-bold mt-6">Mot de passe:</label>
                <input type="password" class="shadow rounded required" name="password">
                <label class="ml-1 font-bold mt-6">Répéter le mot de passe:</label>
                <input type="password" name="passwordRepeat"  class="shadow rounded" required>
                <input type="password" name="code" hidden>
            </div>
            <div class="d-flex justify-center">
                <button class="mx-auto block shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-gradient-to-r from-yellow-500 to-red-500 text-white hover:from-red-500 hover:to-yellow-500" id="test">S'inscrire</button>
                <button onclick="document.location.replace('connexion.php');" class="mx-auto block shadow rounded-2xl p-1 px-3 font-medium block mx-2 mt-5 bg-white" >J'ai déjà un compte</button>
            </div>
        </form>

    </section>

    <script src="./scripts/menu.js"></script>
    <script>createMenu("");</script>
    <script type='text/javascript' src='scripts/sha512.js'></script>

HTML);

echo $myPage->toHTML();