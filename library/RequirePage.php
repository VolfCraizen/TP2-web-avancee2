<?php

class RequirePage {

    static public function model($model){
        return require_once('model/'.$model.'.php');
    }

    static public function header($title){
        return '
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="'.PATH_DIR.'css/style.css">
            </head>
            <nav>
                <a href="{{path}}">Home</a>
                <a href="{{path}}livre">Livres</a>
                <a href="{{path}}auteur">Auteurs</a>
                <a href="{{path}}editeur">Éditeurs</a>
            </nav>
            ';
    }

    static public function url($url){
        header('location:'.PATH_DIR.$url);
    }
}