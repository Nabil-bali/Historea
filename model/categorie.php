<?php
class Categorie extends Model {
    private $categorie;

    public function __construct($categorie)
    {
        if (isset($categorie))
        {
            $this->hydrate($categorie);
        }
    }

    // setter
    public function categorie()
    {
        return $this->categorie;
    }

    // getter
    public function setCategorie($categorie)
    {
        if (is_string($categorie))
        {
            $ctg = htmlspecialchars($categorie);
            $this->categorie = $ctg;
        }
    }
}
