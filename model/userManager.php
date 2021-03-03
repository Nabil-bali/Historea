<?php
class UserManager extends Model {

    public $_table = 'users';

    public function addUser(User $user)
    {
        $cnt = $this->connect();
        $add = $cnt->prepare('INSERT INTO users( pseudo, email, password) VALUES (:pseudo, :email, :password)');
        $add->execute(array(
            'pseudo' => $user->pseudo(),
            'email' => $user->email(),
            'password' => $user->confirmation()
        ));
    }

    public function checkUser($mail)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('SELECT * FROM users WHERE email = ?');
        $req->execute(array($mail));
        return $req;
    }

    public function readUser($id)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('SELECT * FROM users WHERE id = ?');
        $req->execute(array($id));
        return $req;
    }

    public function readAllUsers($page = NULL) {
        $data = $this->readAll($this->_table, $page);
        return $data;
    }

    public function changePassword($post, $trueInfo)
    {

        $odlPassword = htmlspecialchars($post['oldPassword']);
        $newpassword = htmlspecialchars($post['newPassword']);
        $confirmPassword = htmlspecialchars($post['confirmPassword']);

        $cnt = $this->connect();
        $req = $cnt->prepare('SELECT password FROM users WHERE id = ?');
        $req->execute(array($trueInfo['id']));
        $truePassword = $req->fetch();
    
        if (password_verify($odlPassword, $truePassword['password']))
        {
            if (strlen($newpassword) >= 8)
            {
                if ($newpassword == $confirmPassword)
                {
                    $this->updatePassword($newpassword, $trueInfo['id']);
                    $message["color"] = 'success';
                    $message["message"] = 'Votre mot de passe a été modifié';
                    return $message;
                }
                else
                {
                    $message["color"] = 'danger';
                    $message["message"] = 'Les mots de passe ne sont pas identiques';
                    return $message;
                }
            }
            else
            {
                $message["color"] = 'danger';
                $message["message"] = 'Veillez choisir un mot de passe d\'au moins 8 caractères';
                return $message;
            }
        }
        else
        {
            $message["color"] = 'danger';
            $message["message"] = 'Ancien mot de passe incorrect';
            return $message;
        }
    }

    public function updatePassword($newpassword, $trueInfo)
    {
        $cnt = $this->connect();
        $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
        $req = $cnt->prepare('UPDATE users SET password = :password WHERE id = :id');
        $req->execute(array(
            'password' => $newpassword,
            'id' => $trueInfo
        ));
        return $req;
    }
    // A vérifier
    public function updateUser($id, User $user)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('UPDATE users SET pseudo = :pseudo, email = :email, statut =:statut WHERE id = :userId');
        $req->execute(array(
            'pseudo' => $user->pseudo,
            'email' => $user->email,
            'statut' => $user->statut
        ));
        return $req;
    }

    public function deleteUser($id)
    {
        $data = $this->delete($this->table(), $id);
        return $data;
    }

    public function countTableUsers()
    {
        $table = $this->_table;
        $data = $this->countTable($table);
        return $data;
    }

    // obtenir le nombre maximum de pages dans une table
    public function nbrMaxPagesUsers()
    {
        $table = $this->_table;
        $data = $this->nbrMaxPages($table);
        return $data;
    }
}