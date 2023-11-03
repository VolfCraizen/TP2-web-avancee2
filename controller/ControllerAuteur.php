<?php

RequirePage::model('CRUD');
RequirePage::model('Auteur');
RequirePage::model('Livre');

class ControllerAuteur extends Controller {
    public function index(){

        $auteur = new Auteur;
        $select = $auteur->select();
        return Twig::render('auteur-index.php', ['auteurs'=>$select]);

    }

    public function create(){
        return Twig::render('auteur-create.php');
    }

    public function store(){
        $auteur = new Auteur;
        $insert = $auteur->insert($_POST);

        return Twig::render('auteur-create.php', ['auteurs'=>$insert]);
    }

    public function show($id){
        
        $auteur = new Auteur;
        $selectId = $auteur->selectId($id);
        $livre = new Livre;
        $selectLivres = $livre->select('titre');
        return Twig::render('auteur-show.php', ['auteurs'=>$selectId, 'livres'=>$selectLivres]);
    }

    public function edit($id){
        $auteur = new Auteur;
        $selectId = $auteur->selectId($id);
        return Twig::render('auteur-edit.php', ['auteurs'=>$selectId]);
        
    }

    public function update(){
        $auteur = new Auteur;
        $update = $auteur->update($_POST);
        RequirePage::url('auteur');
    }

    public function destroy(){
        $auteur = new Auteur;
        $destroy = $auteur->delete($_POST["id"]);
        RequirePage::url('auteur');
    }
}