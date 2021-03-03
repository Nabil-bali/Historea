<?php
class Question extends Model {
    private $question;
    private $a;
    private $b;
    private $c;
    private $d;
    private $solution;
    private $epoque;

    // contructor
    public function __construct(array $donnees)
    {
        if (isset($donnees))
        {
            $this->hydrate($donnees);
        }
        
    }

    // hydrate
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    // setters

    public function setQuestion($question) 
    {   
        $this->question = $question;  
    }

    public function setA($a) 
    {   
        $this->a = $a;  
    }

    public function setB($b) 
    {   
        $this->b = $b;  
    }

    public function setC($c) 
    {   
        $this->c = $c;  
    }

    public function setD($d) 
    {   
        $this->d = $d;  
    }

    public function setSolution($solution) 
    {   
        $this->solution = $solution;  
    }

    public function setEpoque($epoque) 
    {   
        $this->epoque = $epoque;  
    }

    // getters
    public function question() {    return $this->question; }
    public function a() {    return $this->a; }
    public function b() {    return $this->b; }
    public function c() {    return $this->c; }
    public function d() {    return $this->d; }
    public function solution() {    return $this->solution; }
    public function epoque() {    return $this->epoque; }

}