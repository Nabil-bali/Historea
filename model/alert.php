<?php
class Alert {
    public function successfulValidation(int $id)
    {
        $message = '<div class="alert alert-success" role="alert">
        La question n°<strong>'.$id.'</strong> a bien été ajoutée</div>';
        return $message;
    }

    public function successfulUpdate(int $id)
    {
        $message = '<div class="alert alert-success" role="alert">
        La question n°<strong>'.$id.'</strong> a bien été modifiée</div>';
        return $message;
    }
    
    public function successfulDelete(int $id)
    {
        $message = '<div class="alert alert-info" role="alert">
        La question n°<strong>'.$id.'</strong> a bien été supprimée de la table \'propositions\'</div>';
        return $message;
    }

    public function updateForm($question, $action)
    {
        $form = '
        <!-- Formulaire pour modifier une question -->
                  <form action="http://localhost/historea/?action=admin&admin='. $action.'" method="post" class="bg-light p-2 mt-4 mb-4">
                    <legend>Modifier la question : <i class="pull-right text-muted now-ui-icons ui-1_simple-remove"></i></legend>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="question">La question :</label>
                          <input type="hidden" name="id" value="'. $question['id'].'">
                          <textarea class="form-control" name="question" id="question" rows="2">'. $question['question'] .'</textarea>
                        </div>
                        <div class="row mb-2">
                          <div class="col">
                            <input type="text" name="a" class="form-control" value="'. $question['a'] .'">
                          </div>
                          <div class="col">
                            <input type="text" name="b" class="form-control" value="'. $question['b'] .'">
                          </div>
                        </div>
                        <div class="row mb-2">
                          <div class="col">
                            <input type="text" name="c" class="form-control" value="'. $question['c'] .'">
                          </div>
                          <div class="col">
                            <input type="text" name="d" class="form-control" value="'. $question['d'] .'">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="row mb-2">
                          <div class="col">
                            <label for="solution">La bonne réponse :</label>
                            <input type="text" name="solution" class="form-control" value="'. $question['solution'] .'">
                          </div>
                       </div>
                       <div class="row mb-2">
                          <div class="col">
                            <label for="epoque">Epoque :</label>
                            <input type="text" name="epoque" class="form-control" value="'. $question['epoque'] .'">
                          </div>
                       </div>
                        <input type="submit" value="Valider" name="updateAsk" class="btn btn-primary btn-round">
                      </div>
                    </div>
                  </form>
                  ';

        return $form;
    }
}