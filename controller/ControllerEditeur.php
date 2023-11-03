<?php

RequirePage::model('CRUD');
RequirePage::model('Editeur');
RequirePage::model('Livre');

class ControllerEditeur extends Controller {
    public function index(){

        $editeur = new Editeur;
        $select = $editeur->select();
        return Twig::render('editeur-index.php', ['editeurs'=>$select]);

    }

    public function create(){
        return Twig::render('editeur-create.php');
    }

    public function store(){
        $editeur = new Editeur;
        $insert = $editeur->insert($_POST);

        return Twig::render('editeur-create.php', ['editeurs'=>$insert]);
    }


    public function show($id){
        
        $editeur = new Editeur;
        $selectId = $editeur->selectId($id);
        $livre = new Livre;
        $selectLivres = $livre->select('titre');
        return Twig::render('editeur-show.php', ['editeurs'=>$selectId, 'livres'=>$selectLivres]);
    }

    public function edit($id){
        $editeur = new Editeur;
        $selectId = $editeur->selectId($id);
        return Twig::render('editeur-edit.php', ['editeurs'=>$selectId]);
        
    }

    public function update(){
        $editeur = new Editeur;
        $update = $editeur->update($_POST);
        RequirePage::url('editeur');
    }

    public function destroy(){
        $editeur = new Editeur;
        $destroy = $editeur->delete($_POST["id"]);
        RequirePage::url('editeur');
    }
}