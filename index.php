<?php
session_start();

// autoloading
require 'model/autoload.php';
$autoload = new Autoload;
$autoload->Autoloading();

try 
{
    require 'controller/controller.php';
    require 'controller/adminController.php';
    
    
    if (isset($_GET['action'])) 
    {
        if ($_GET['action'] == 'home')
        {
            homePage();
        }
        elseif ($_GET['action'] == 'test')
        {
            testPage();
        }
        elseif ($_GET['action'] == 'login')
        {
            loginPage();
        }
        elseif ($_GET['action'] == 'signIn')
        {
            signInPage();
        }
        elseif ($_GET['action'] == 'profil')
        {
            profilPage();
        }
        elseif ($_GET['action'] == 'result')
        {
            resultPage();
        }
        elseif ($_GET['action'] == 'questionForm')
        {
            questionFormPage();
        }
        // admin
        elseif ($_GET['action'] == 'admin')
        {
            
            if (isset($_GET['admin']))
            {
                if ($_GET['admin'] == 'home')
                {
                    adminHomeContent();
                }
                if ($_GET['admin'] == 'users')
                {
                    usersContent();
                }
                elseif ($_GET['admin'] == 'asks')
                {
                    asksContent();
                }
                elseif ($_GET['admin'] == 'scores')
                {
                    scoresContent();
                }
                elseif ($_GET['admin'] == 'propositions')
                {
                    propositionContent();
                }
                else
                {
                    adminHomeContent();
                }
            }
            else
            {
                adminHomeContent();
            }
            // fin admin
        }
        else 
        {
            homePage();
        }
    }
    else
    {
        homePage();
    }

} // Permet de faire remonter les erreurs
catch(Exception $e)
{
 echo 'Erreur :' . $e->getMessage();
}   


