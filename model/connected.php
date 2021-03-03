<?php
class Connected extends UserManager {

    public function errorLocation($error)
    {
        header('Location:'.$_SERVER['REQUEST_URI']."&error={$error}");
    }
    
    public function isUser($mail, $pswd, $action = null)
    {
        // vérifier dans le controlleur que le formualire a été rempli
        $mail = htmlspecialchars($mail);
        $pswd = htmlspecialchars($pswd);
        /*$pswd = password_hash($pswd, PASSWORD_DEFAULT);*/
        if (filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            $reqUser = $this->checkUser($mail);
            $userExists = $reqUser->rowCount();
            if ($userExists == 1)
            {
                $userInfo = $reqUser->fetch();
                if (password_verify($pswd, $userInfo['password']))
                {
                    $_SESSION['is_connect'] = true;
                    $_SESSION['id'] = $userInfo['id'];
                    $_SESSION['pseudo'] = $userInfo['pseudo'];
                    $_SESSION['email'] = $userInfo['email'];
                    // changer redirection
                    if (isset($action))
                    {
                        header('Location:'.$_SERVER['PHP_SELF']."?action={$action}");
                    }
                    else
                    {
                        header('Location:'.$_SERVER['PHP_SELF']."?action=profil");
                    }
                }
                else
                {
                $error = 'Mot de passe incorrect';
                $this->errorLocation($error);
                }
            }
            else
            {
                $error = 'Nous ne connaissons pas cette adresse email';
                $this->errorLocation($error);
            }
        }
        else
        {
            $error = 'Veuillez entrer une adresse email valide';
            $this->errorLocation($error);
        }
    }

    
}