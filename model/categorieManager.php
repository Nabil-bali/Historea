<?php
class CategorieManager extends Model {

    private $_table = 'categories';

    // CRUD
    public function readAllCategories()
    {
        $data = $this->readAll($this->_table);
        return $data;
    }

    public function readCategorie($id)
    {
        $data = $this->read($this->_table, $id);
        return $data;
    }

    public function deleteCategorie($id)
    {
        $data = $this->delete($this->_table, $id);
        return $data;
    }

    public function createCategorie(Categorie $categorie)
    {
        $cnt = $this->connect();
        $req = $cnt->prepare('INSERT INTO categories(categorie) VALUES (:categorie) ');
        $req->execute(array(
            'categorie' => $categorie->categorie()
        ));
    }

}