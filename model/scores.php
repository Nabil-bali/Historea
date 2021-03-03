<?php
class Scores extends Model {
    
    private $_score;
    private $_userId;
    private $_categorieId;


    public function __construct($score)
    {
        if (isset($score))
        {
            $this->hydrate($score);
        }
    }
    

    // getters
    public function score() {    return $this->_score; }
    public function userId() {    return $this->_userId; }
    public function categorieId() {    return $this->_categorieId; }

    // setters
    public function setScore($score)
    {
        $this->_score = $score;
    }

    public function setUserId($user = null)
    {
        if (isset($user))
        {
            $this->_userId = $user;
        }
        else 
        {
            $this->_userId = 'Unknown';
        }
    }

    public function setCategorieId($ctg)
    {
            $this->_categorieId = $ctg;
    }
}