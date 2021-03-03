<?php
$title = 'Formulaire de soumission des questions';
ob_start();
?>

<body style="padding-top:70px;background-color: #DEF7EE;">

<?php
$navbar = require 'navbar/navbar.php';
?>

<div class="container" >
    <div class="row justify-content-center">
         <div class="col-md-6 m-4">
            <div class="card p-3">
                <div class="card-body">
                <form action="" method="post">
                    <legend class="text-center">Soumettre une question</legend>

                    <div class="row">
                        <div class="col">
                            <div class="form_group">
                                <label for="question">La question :</label>
                                <textarea name="question" id="question" class="form-control" rows="3" placeholder="Par exemple : Quand eut lieu le courronnement de Charlemagne ?"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="a">Réponse A</label>
                                <input type="text" name="a" id="a" class="form-control" placeholder="897..." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="b">Réponse B</label>
                                <input type="text" name="b" id="b" class="form-control" placeholder="800..." required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="c">Réponse C</label>
                                <input type="text" name="c" id="c" class="form-control" placeholder="732..." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="d">Réponse D</label>    
                                <input type="text" name="d" id="d" class="form-control" placeholder="1238..." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="solution">La réponse correcte :</label>
                                <select class="form-control" id="solution" name="solution" required>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="form-group">
                                <label for="epoque">Epoque :</label>
                                <select class="form-control" id="epqoue" name="epoque" required>
                                    <option>Antiquité</option>
                                    <option>Moyen-Age</option>
                                    <option>Moderne</option>
                                    <option>Contemporaine</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">     
                            <div class="form-group">   
                                <input type="submit" name="envoyer" value="Envoyer" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php

$content = ob_get_clean();

require 'header/header.php';
?>