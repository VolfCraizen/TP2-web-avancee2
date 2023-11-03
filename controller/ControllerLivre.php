<?php

RequirePage::model('CRUD');
RequirePage::model('Livre');
RequirePage::model('Auteur');
RequirePage::model('Editeur');

class ControllerLivre extends controller {
    public function index(){

        $livre = new Livre;
        $auteur = new Auteur;
        $editeur = new Editeur;
        $select = $livre->select();

        /**
         * Transforme les tables du tableau multidimensionnel en pseudo tableaux unidimensionnels pour ajouter des champs 
         */
        $i = 0;
        foreach($select as $selected){
            $select[$i]['prixRabais'] = $prixRabais = $livre->calculeRabais($selected['prix'], $selected['rabais']);
            //Ajoute les tables auteur et editeur à livre à des champs additionels
            $select[$i]['livreAuteur'] = $auteur->selectId($selected['Auteur_id']);
            $select[$i]['livreEditeur'] = $editeur->selectId($selected['Editeur_id']);
            $i++;
        }

        return Twig::render('livre-index.php', ['livres'=>$select]);

    }

    public function create(){

        $auteur = new Auteur;
        $selectAuteurs = $auteur->select('nom');
        $editeur = new Editeur;
        $selectEditeurs = $editeur->select('nom');

        return Twig::render('livre-create.php', ['auteurs'=>$selectAuteurs, 'editeurs'=>$selectEditeurs]);
    }

    public function store(){

        $livre = new Livre;
        $insert = $livre->insert($_POST);

        return Twig::render('livre-create.php', ['livres'=>$insert]);
    }


    public function show($id){
        
        $livre = new Livre;
        $auteur = new Auteur;
        $editeur = new Editeur;
        $selectId = $livre->selectId($id);
        $selectAuteurs = $auteur->selectId($selectId['Auteur_id']);
        $selectEditeurs = $editeur->selectId($selectId['Editeur_id']);
        $selectId['prixRabais'] = $prixRabais = $livre->calculeRabais($selectId['prix'], $selectId['rabais']);
        
        return Twig::render('livre-show.php', ['livres'=>$selectId, 'auteurs'=>$selectAuteurs, 'editeurs'=>$selectEditeurs]);

    }

    public function edit($id){
        $livre = new Livre;
        $selectId = $livre->selectId($id);
        $auteur = new Auteur;
        $selectAuteurs = $auteur->select('nom');
        $editeur = new Editeur;
        $selectEditeurs = $editeur->select('nom');
        return Twig::render('livre-edit.php', ['livres'=>$selectId, 'auteurs'=>$selectAuteurs, 'editeurs'=>$selectEditeurs]);
        
    }

    public function update(){
        $livre = new Livre;
        $update = $livre->update($_POST);
        RequirePage::url('livre');
    }

    public function destroy(){
        $livre = new Livre;
        $destroy = $livre->delete($_POST["id"]);
        RequirePage::url('livre');
    }
}

?>