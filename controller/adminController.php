<?php
/*
HOME
*/
function adminHomeContent() {
    require_once 'wiew/admin/adminHome.php';
}

/*
USERS
*/
function usersContent() {

    $u = new UserManager;
    $pagination = new Pagination();

    if (isset($_GET['iddelete']))
    {
        $id = $_GET['iddelete'];
        $u->deleteUser($id);
    }

    if (isset($_GET['page']))
    {
        $allUsers = $u->readAllUsers($_GET['page']);
        $p = $pagination->paginate('users', $_GET['page']);

    }
      else 
    {
        $allUsers = $u->readAllUsers();
        $p = $pagination->paginate('users');
    }  

    require_once 'wiew/admin/usersContent.php';
}

/* 
QUESTIONS
*/
function asksContent() {
    $asks = new QuestionManager;
    $alert = new Alert;
    $pagination = new Pagination();

    // ajouter une catégorie de questions (encore utile ?)
    if (isset($_POST['newCategorie']))
    {
        $ctg = new Categorie($_POST);
        $mng = new CategorieManager;
        $mng->createCategorie($ctg);
    }

    // supprimer une question
    if (isset($_GET['iddelete']))
    {
        $id = $_GET['iddelete'];
        $asks->deleteAsk($id);
        $successfulDelete = $alert->successfulDelete($id);
    }

    // modifier une question
    if (isset($_GET['idupdate']))
    {
        $id = (int) $_GET['idupdate'];
        $data = $asks->readAsk($id);
        $questionAModifier = $data ->fetch();
        $form = $alert->updateForm($questionAModifier, 'asks');
    }
    
    if (isset($_POST['updateAsk']))
    {
        // créer une fonction update($_POST)
        $asks->updateAsk($_POST);
        $successfulUpdate = $alert->successfulUpdate($_POST['id']);
    }

    if (isset($_GET['page']))
    {
        $allAsks = $asks->readAllAsks($_GET['page']);
        $p = $pagination->paginate('questions',$_GET['page']);
    }
      else {
        $allAsks = $asks->readAllAsks();
        $p = $pagination->paginate('questions');
    } 
    
    require_once 'wiew/admin/asksContent.php';
}

/*
SCORES
*/
function scoresContent() {
    
    $s = new ScoreManager;
    $pagination = new Pagination;

    if (isset($_GET['iddelete']))
    {
        $id = $_GET['iddelete'];
        $s->deleteScore($id);
    }
    
    if (isset($_GET['page']))
    {
        $allScores = $s->readAllScores($_GET['page']);
        $p = $pagination->paginate('scores',$_GET['page']);
    }
    else 
    {
        $allScores = $s->readAllScores();
        $p = $pagination->paginate('scores');
    }
    require_once 'wiew/admin/scoresContent.php';
}

/*
PROPOSITIONS
*/
function propositionContent()
{
    $asks = new PropositionManager;
    $alert = new Alert;
    $pagination = new Pagination;

    if (isset($_GET['iddelete']))
    {
        $id = $_GET['iddelete'];
        $asks->deleteAsk($id);
        $successfulDelete = $alert->successfulDelete($id);
    }

    // Valide une question proposée
    $validate = new QuestionManager;
    if (isset($_GET['idconfirm']))
    {
        $id = $_GET['idconfirm'];
        $validate->validate($id);
        $asks->deleteAsk($id);
        $successfulValidation = $alert->successfulValidation($_GET['idconfirm']);
    }

    // modifier une question
    if (isset($_GET['idupdate']))
    {
        $id = (int) $_GET['idupdate'];
        $data = $asks->readAsk($id);
        $questionAModifier = $data ->fetch();
        $form = $alert->updateForm($questionAModifier, 'propositions');
    }

    if (isset($_POST['updateAsk']))
    {
        // créer une fonction update($_POST)
        $asks->updateAsk($_POST);
        $successfulUpdate = $alert->successfulUpdate($_POST['id']);
    }

    if (isset($_GET['page']))
    {
        $allAsks = $asks->readAllAsks($_GET['page']);
        $p = $pagination->paginate('propositions',$_GET['page']);
    }
    else
    {
        $allAsks = $asks->readAllAsks();
        $p = $pagination->paginate('propositions');
    }
    
    require_once 'wiew/admin/propositionsContent.php';
}