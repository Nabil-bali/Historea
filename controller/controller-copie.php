<?php


if (isset($_GET['deconnexion']))
{
    $userQuit = new Disconnected;
    $userQuit->disconnect();
}


function homePage() 
{
    require 'wiew/home.php';
}

function testPage()
{
    $quizz = new QuestionManager;

    if (isset($_GET['cat']))
    {
        $catM = new CategorieManager;
        $_SESSION['cat'] = (string) $_GET['cat']; 
        $cat = $catM->readCategorie($_SESSION['cat']);
        $c = $cat->fetch();
    }
    else
    {
        $_SESSION['cat'] = "0"; 
    }
    // Le quizz a été envoyé
    if (isset($_POST['historeaTest']))
    {
        // obtenir le score
        $x = $quizz->score($_POST);
        $y = $quizz->scoreMessage($x);
        $_SESSION['newscore'] = "";

        // enregistrer le score
        $categorieId = "0";
        if (isset($_GET['cat']))
        {
            $categorieId = $c['id'];
        }
        $ns = ['score' => $x, 'userId' => $_SESSION['id'], 'categorieId' => $categorieId];
        $newScore = new Scores($ns);
        $sm = new ScoreManager;
        $sm->createScore($newScore);
    } 
    // arrivée sur la page du quizz
    else
    {
        $testId = new Session;
        $tId = $testId->testId();
        if (!isset($_SESSION['id']) && !isset($_SESSION['is_connect']))
        {
            $_SESSION["id"]="joueur".$tId;
        }
        
        if (isset($_GET['cat']))
        {
            $test = $quizz->questionsQuizz($_SESSION['cat']);
        }
        else
        {
            $test = $quizz->questionsQuizz();
        }
    }
    
    require 'wiew/test.php';
}

function resultPage()
{
    // tableau des scores
    $s = new ScoreManager();
    $pagination = new Pagination;

    // définir la catégorie général par défautl
    if (!isset($_SESSION['cat']))
    {
        $_SESSION['cat'] = 0;
    }

    if (isset($_SESSION['id']) && isset($_SESSION['newscore']))
    {
        $miId = $s->myScore($_SESSION['id'], $_SESSION['cat']);
        $myScore = $s->readScore($miId);
    }

    if (isset($_GET['page']))
    {
        $allScores = $s->readAllByCategorie($_SESSION['cat'], $_GET['page']);
        $p = $pagination->paginateScores('scores',$_SESSION['cat'], $_GET['page']);
    }
    else 
    {
        $allScores = $s->readAllByCategorie($_SESSION['cat']);
        $p = $pagination->paginateScores('scores',$_SESSION['cat']);
    }
    
    $catM = new CategorieManager;
    $cat = $catM->readCategorie($_SESSION['cat']);
    $c = $cat->fetch();

    require 'wiew/result.php';
}


function loginPage()
{
    if (isset($_GET['connexion']) && isset($_POST['connexion']))
    {
        $user = new Connected;
        $user->isUser($_POST['mail'], $_POST['password']);
    }
    require 'wiew/login.php';
}


function signInPage()
{
    if (isset($_POST['signInForm']))
    {
        $newUser = new User($_POST);
    }
    require 'wiew/signin.php';
}


function profilPage()
{
    if (isset($_POST['signInForm']))
    {
        $manager = new User($_POST);
        $add = new UserManager;
        $add->addUser($manager);
        $userCnt = new Connected;
        $userCnt->isUser($_POST['email'],$_POST['password']);
    }
    require 'wiew/profil.php';
}


function adminPage()
{
    require 'wiew/admin.php';
}

function questionFormPage() 
{
    if (isset($_POST['envoyer'])) {
        $newQuestion = new Question($_POST);
        $manager = new PropositionManager;
        $manager->createQuestion($newQuestion);
    }
    require 'wiew/questionform.php';
}