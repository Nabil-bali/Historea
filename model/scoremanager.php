<?php
class ScoreManager extends Model {

    private $_table = 'scores';
    
    // CRUD
    public function readAllScores($page = NULL) {
    
        $data = $this->readAll($this->_table, $page);
        return $data;
    }

    public function readScore($id) {
        
        $data = $this->read($this->_table, $id);
        return $data;
    }

    public function deleteScore($id)
    {
        $data = $this->delete($this->_table, $id);
        return $data;
    }

    public function createScore(Scores $score)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('INSERT INTO scores(score, userId, categorieId, date_crea) VALUES (:score, :userId, :categorieId, NOW() ) ');
        $req->execute(array(
            'score' => $score->score(),
            'userId' => $score->userId(),
            'categorieId' => $score->categorieId()
        ));
    }
}