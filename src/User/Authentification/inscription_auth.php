<?php
declare(strict_types=1);

require_once "../../../autoload.php";

$auth = new SecureUserAuthentification();
if ($auth->isEmailAlreadyExist($_POST['mail'])) {
    header("Location: ../../../inscription.php?error=email");
}else {
    var_dump($_POST);
    //$auth->inscription();
}
