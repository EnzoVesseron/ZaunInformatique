<?php

require_once "../../../autoload.php";

class SecureUserAuthentification
{
    const SESSION_CHALLENGE_KEY = 'challenge';
    const RANDOM_STRING_SIZE = 16;
    const SESSION_USER_KEY = 'user';


    public function isEmailAlreadyExist(string $email): bool
    {
        $bool = false;
        Session::start();

        $request = MyPDO::getInstance()->prepare(<<<SQL
        SELECT EMAIL
        from CLIENT
SQL);
        $request->execute();
        $resultrequest = $request->fetchAll();

        foreach ($resultrequest as$result) {
            if ($result['EMAIL'] === $email)
                $bool = true;
        }
        return (bool)$bool;
    }

    public function inscription()
    {
        if(isset($_POST['mail'])&& isset($_POST['nom'])&& isset($_POST['prenom']) && isset($_POST['code'])) {
            $email = htmlspecialchars($_POST['mail']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $code = htmlspecialchars($_POST['code']);
            $request = MyPDO::getInstance()->prepare(<<<SQL
                INSERT INTO `CLIENT`(`NOM`, `PRENOM`, `EMAIL`, `MDP`) VALUES (:nom,:prenom,:email,:mdp)
            SQL);
            $request->bindValue(":nom",$nom);
            $request->bindValue(":prenom",$prenom);
            $request->bindValue(":email",$email);
            $request->bindValue(":mdp",$code);
            $request->execute();

            $request = MyPDO::getInstance()->prepare(<<<SQL
            SELECT *
            FROM CLIENT
            WHERE :email = `email`
            SQL);

            $request->bindValue(":email",$email);
            $request->execute();
            $aUser = new User($request->fetch());
            $this->setUser($aUser);

            header("Location: ../../../accueil.php");
        }else{
            header("Location: ../../../inscription.php");
        }

    }

    public function loginAuth() {

    }

    public function setUser(?User $user): void
    {
        Session::start();
        $_SESSION[self::SESSION_USER_KEY] = $user;
        $this->user = $user;
    }


}