<?php
class Model extends Connexion {

    private $_id;
    private $_table;
    const NBR_DE_LIGNES = 10;

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

    /*
    FONCTIONS LIEES A LA PAGINATION
    */

    // compte le nombre de ligne dans une table
    public function countTable($table)
    {
        $cnt = $this->connect();
        $stm = $cnt->query('SELECT COUNT(*) FROM '. $table )->fetchColumn();
        return $stm;
    }

    // obtenir le nombre maximum de pages dans une table
    public function nbrMaxPages($table)
    {
        $a = $this->countTable($table);
        $nbrMaxPages = ceil($a / self::NBR_DE_LIGNES);

        return $nbrMaxPages;
    }
    
    // retourner le numéro de la page à afficher
    public function getPage($table, $page = NULL)
    {
        $currentPage = 1;
        $page = intval($page);
        if (isset($page) && is_int($page) && $page > 0)
        {
            $max = $this->nbrMaxPages($table);
            if ($page <= $max)
            {
                $currentPage = $page;
            }
            else
            {
                $currentPage = $max;
            }
            
        }
        return $currentPage;
    }
    
    // obtenir le numéro de la première ligne à afficher
    public function getDepart($page, $nbrLignes)
    {
        $depart = ($page - 1) * $nbrLignes;
        return $depart;
    }




    /*
    récupérer le score le plus récent pour un utilisateur donné
    */
    public function myScore($id, $categorieId)
    {
        $cnt = $this->connect();
        $stm = $cnt->prepare('SELECT id FROM scores WHERE userId = :userId AND categorieId = :categorieId ORDER BY date_crea, score DESC LIMIT 0,1');
        $stm->execute(array('userId' => $id,
    "categorieId" => $categorieId));

        $data = $stm->fetch();

        return $data['id'];
    }

    /*
    Table for scores
    */

    public function readAllByCategorie($cat, $page = null)
    {
        $cnt = $this->connect();

        $currentPage = 1;
        $page = intval($page);
        if (isset($page)  && is_int($page) && $page > 0)
        {
            $currentPage = $page;
        }

        $depart = ($currentPage - 1) * self::NBR_DE_LIGNES;

        $stm = $cnt->query('SELECT * FROM scores WHERE categorieId IN ('. $cat .') ORDER BY score DESC, date_crea DESC LIMIT '. $depart.','. self::NBR_DE_LIGNES);
        return $stm;
    }

    public function getMyScores($id)
    {
        $cnt = $this->connect();
        $stm = $cnt->prepare('SELECT id, score, userId, (SELECT categorie FROM categories WHERE id = categorieId) as categorieId, date_crea FROM scores WHERE userId = :userId ORDER BY  date_crea DESC, score DESC LIMIT 0,10');
        $stm->execute(array('userId' => $id));
        return $stm;
    }
    /*
    CRUD
    */
    public function readAll($table, $page = NULL)
    {
        $cnt = $this->connect();
        $page = $this->getPage($table, $page);
        $depart = $this->getDepart($page, self::NBR_DE_LIGNES);
        $stm = $cnt->query('SELECT * FROM '. $table .' LIMIT '. $depart.', '. self::NBR_DE_LIGNES);
        return $stm;
    }

    public function read($table, $id, $epoque = null)
    {
        $cnt = $this->connect();
        if (isset($epoque))
        {
            $e = ' && epoque =' .$epoque;
        }
        else
        {
            $e = "";
        }
        $stm = $cnt->query('SELECT * FROM '. $table. ' WHERE id ='. $id . $e);
        return $stm;
    }

    public function create($table, $data) {
        $columns = array_keys($data);
        $columnSql = implode(',', $columns);
        //'name, birthyear, city';
        $bindingSql = ':'.implode(',:', $columns);
        //':Anna, :1989, :Trollhättan';
        $sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
        $stm = $this->pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(':'.$key, $value);
        }
        $status = $stm->execute();
        //mellan ? och : är if och mellan : och ; är else.
        return ($status) ? $this->pdo->lastInsertId() : false;
    }

    public function update($table, $id, $data)
    {
        if (isset($data['id']))
            unset($data['id']);
        $columns = array_keys($data);
        $columns = array_map(function($item){
            return $item.'=:'.$item;
        }, $columns);
        $bindingSql = implode(',', $columns);
        $sql = "UPDATE $table SET $bindingSql WHERE `id` = :id";
        $stm = $this->pdo->prepare($sql);
        $data['id'] = $id;
        foreach ($data as $key => $value){
            $stm->bindValue(':'.$key, $value);
        }
        $status = $stm->execute();
        return $status;
    }

    public function delete($table, $id)
    {
        $cnt = $this->connect();
        $stm = $cnt->query('DELETE FROM '. $table. ' WHERE id = '. $id);
        return $stm;
    }

    // setters
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setTable($table) 
    {
        $this->_table = $table;
    }

    // getter
    public function id()
    {
        return $this->_id;
    }

    public function table()
    {
        return $this->_table;
    }
}