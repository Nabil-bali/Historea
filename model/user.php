<?php
class User extends Model {
    private $pseudo;
    private $email;
    private $password;
    private $confirmation;
    public $error;
    private $_table = 'users';

    // contructor
    public function __construct(array $donnees = null)
    {
        if (isset($donnees))
        {
            $this->hydrate($donnees);
        }
        
    }

    public function location($error) 
    {
    header("Location:".$_SERVER['REQUEST_URI']."&error={$error}");
    }

    public function emailExist($email)
    {
        $cnt = $this->connect();
        $reqmail = $cnt->prepare('SELECT * FROM users WHERE email = ?');
		$reqmail->execute(array($email));
		$emailExist = $reqmail->rowCount();
        return $emailExist;
    }

    public function pseudoExist($pseudo)
    {
        $cnt = $this->connect();
        $reqpseudo = $cnt->prepare('SELECT * FROM users WHERE pseudo = ?');
		$reqpseudo->execute(array($pseudo));
		$pseudoExist = $reqpseudo->rowCount();
        return $pseudoExist;
    }

    // getters
    public function pseudo()
    {
        return $this->pseudo;
    }
    public function email()
    {
        return $this->email;
    }
    public function password()
    {
        return $this->password;
    }
    public function confirmation()
    {
        return $this->confirmation;
    }

    // setters
    public function setPseudo($pseudo)
    {
        $ps = htmlspecialchars($pseudo);
        $psLen = strlen($ps);
        if ($psLen > 3 && $psLen < 26)
        {
            $pseudoExist = $this->pseudoExist($pseudo);
            if ($pseudoExist == 0)
            {
                $this->pseudo = $ps;
            }
            else
            {
                $error = 'Ce pseudo a déjà été pris...';
            $this->location($error);
            }
        }
        else
        {
            $error = 'Le pseudo doit être compris entre 4 et 25 caractères';
            $this->location($error);
        }
        
    }
    public function setEmail($email)
    {
        $email = htmlspecialchars($email);
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailExist = $this->emailExist($email);
            if ($emailExist == 0)
            {
                 $this->email = $email;
            }
            else
            {
                $error = 'Cette adresse email est déja prise...';
            $this->location($error);
            }
           
        }
        else
        {
            $error = 'Veuillez entrer une adresse email valide';
            $this->location($error);
        }
        
    }
    public function setPassword($password)
    {
        $pwd = htmlspecialchars($password);
        $this->password = $pwd;
    }
    public function setConfirmation($confirmation)
    {
        $cf = htmlspecialchars($confirmation);
        // lenght > 7
        $cfLen = strlen($cf);
        if ($cfLen >= 8)
        {
            $password = $this->password;
            if ($cf == $password)
            {
                $cfHashed = password_hash($cf, PASSWORD_DEFAULT);
                $this->confirmation = $cfHashed;
            }
            else
            {
                $error = 'Vos mots de passe ne sont pas identiques';
                $this->location($error);
            }
        }
        else
        {
            $error = $cf. 'Votre mot de passe doit contenir au moins 8 caractères';
        $this->location($error);
        }
    }

    // getters
    public function table()
    {
        return $this->_table;
    }

    // setters
    public function setTable($table)
    {
        $this->_table = $table;
    }
}