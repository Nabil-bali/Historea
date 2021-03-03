<?php
class QuestionManager extends Model {

    // Attibuts
    private $_table = 'questions';
    const NBR_QUESTION = 10;

    // CRUD
    public function createQuestion(Question $question) {
        $cnt = $this->connect();
        $req = $cnt->prepare('INSERT INTO questions(question, a, b, c, d, solution, epoque) VALUES (:question, :a, :b, :c, :d, :solution, :epoque) ');
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
        UPDATE questions
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

    public function updateEpoque()
    {
        $cnt = $this->connect();
        $req = $cnt->query('
        UPDATE questions
        SET epoque = \'Contemporaine\'
        WHERE epoque = \'4\' ');
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
        if (is_int($id) && $id >=0)
        {
            $data = $this->read($this->_table, $id);
            return $data;
        }
    }

    


    public function validate(int $id)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('INSERT INTO questions(question, a, b, c, d, solution, epoque) (SELECT question, a, b, c, d, solution, epoque
        FROM propositions 
        WHERE id = :id) ');
        $req->execute(array('id' => $id));           
    }



    public function getRandList($epoque = null) 
    {
        $cnt = $this->connect();
        if (!isset($epoque))
        {
            $epoque = "1,2,3,4";
        }    
        $list = $cnt->query('SELECT id FROM questions WHERE epoque IN ('. $epoque .')');


        $orderList = [];
        // on récupère la liste des ID existants pour les questions, qui sera stockée dans $orderList
        while ($id = $list->fetch())
        {
            $orderList[] = $id['id'];
        }
        // $max = nombres de valeur contenu dans le tableau $orderList
        $max = count($orderList);

        if ($max >= 10)
        {
            $i = 0;
            $randList = array();

            while ($i < self::NBR_QUESTION)
            {
                $a = rand(0, $max - 1);
                $b = $orderList[$a];
                if (!in_array($b, $randList))
                {
                    $randList[] = $b;
                    $i++;
                }
            }
            return $randList;
        }
        else
        {
            throw new Exception("Le test n'est pas disponible actuellement", 1);
            
        }
       
    }

    public function questionsQuizz($epoque = null)
    {
        $z = $this->getRandList($epoque);
        
        $quizz =[];

        foreach ($z as $key => $id)
        {
            $id_int = (int)$id;
            
            $y = $this->readAsk($id_int);

            while ($question = $y->fetch())
            {
                $quizz[$key]['id'] = $question['id'] ;
                $quizz[$key]['question'] = $question['question'] ;
                $quizz[$key]['a'] = $question['a'] ;
                $quizz[$key]['b'] = $question['b'] ;
                $quizz[$key]['c'] = $question['c'] ;
                $quizz[$key]['d'] = $question['d'] ;
                $quizz[$key]['solution'] = $question['solution'] ;
            }
        }
        return $quizz;
    }


    public function getAnswerById($id) 
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('SELECT RIGHT(solution, 1) AS answer FROM questions WHERE id = ?');
        $req->execute(array($id));

        $answer = $req->fetch();
        
            $x = $answer['answer'] ;
        
        return $x;
    }
        // functions score
        public function score($answers)
        {
            $score = 0;
            $answer = $_POST;
            for ($i = 0; $i < self::NBR_QUESTION; $i++)
            {   
                if (isset($_POST[$i])){ $answer = $_POST[$i]; }
                else { $answer = ""; }
                $idAnswer = $_POST['id'.$i];
                $trueAnswer = strtolower($this->getAnswerById($idAnswer));
                if ($trueAnswer == $answer)
                {
                    $score += 10;
                }
            }
            return $score;
        }
    
        public function scoreMessage($score)
        {
            if ($score >= 90) 
            {
                $y['message'] = "Félicitations ! Tu est sans doute un excellent historien.";
                $y['color'] = "success";
            }
            elseif ($score >= 70 && $score < 90)
            {
                $y['message'] = "Bon travail, tu es très doué !";
                $y['color'] = "success";
            }
            elseif ($score >= 50 && $score < 70)
            {
                $y['message'] = "Bravo, tu t'en sors plutôt pas mal.";
                $y['color'] = "info";
            }
            elseif ($score < 50)
            {
                $y['message'] = "Dommage tu n'as pas obtenu la moyenne, qu'en dis-tu de retenter ta chance ?";
                $y['color'] = "danger";
            }
            return $y;
        }

    public function countTableAsk()
    {
        $table = $this->_table;
        $data = $this->countTable($table);
        return $data;
    }

    // obtenir le nombre maximum de pages dans une table
    public function nbrMaxPagesAsk()
    {
        /*$table = $this->_table;*/
        $data = $this->nbrMaxPages($this->_table);
        return $data;
    }
}