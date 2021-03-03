<?php
class PropositionManager extends Model {

    // Attibuts
    private $_table = 'propositions';

    // CRUD
    public function createQuestion(Question $question) {
        $cnt = $this->connect();
        $req = $cnt->prepare('INSERT INTO propositions(question, a, b, c, d, solution, epoque) VALUES (:question, :a, :b, :c, :d, :solution, :epoque) ');
        $req->execute(array(
            'question' => $question->question(),
            'a' =>  $question->a(), 
            'b' =>  $question->b(), 
            'c' =>  $question->c(), 
            'd' =>  $question->d(), 
            'solution' =>  $question->solution(), 
            'epoque' =>  $question->epoque()
        ));
    }

    public function updateAsk($data)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('
        UPDATE propositions
        SET question = :question, a = :a, b = :b, c = :c, d = :d, solution = :solution, epoque = :epoque
        WHERE id = :id');
        $req->execute(array(
            'question' => $data['question'],
            'a' =>  $data['a'], 
            'b' =>  $data['b'], 
            'c' =>  $data['c'], 
            'd' =>  $data['d'],
            'solution' =>  $data['solution'],
            'epoque' =>  $data['epoque'],
            'id' =>  $data['id']
        ));
    }

    public function readAllAsks($page = NULL) {
        $data = $this->readAll($this->_table, $page);
        return $data;
    }

    public function deleteAsk($id)
    {
        $data = $this->delete($this->_table, $id);
        return $data;
    }

    public function readAsk($id) {
        if (is_int($id) && $id > 0)
        {
            $data = $this->read($this->_table, $id);
            return $data;
        }
        else
        {
            throw new Exception('L\'id n\'est pas un nombre ou n\'est pas supérieur à 0');
        }
    }   

    public function countTableProposition()
    {
        $table = $this->_table;
        $data = $this->countTable($table);
        return $data;
    }

    // obtenir le nombre maximum de pages dans une table
    public function nbrMaxPagesProposition()
    {
        $table = $this->_table;
        $data = $this->nbrMaxPages($table);
        return $data;
    }
}
