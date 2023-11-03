<?php

class Twig{
    static public function render($template, $data = array()){
        //endroit où on trouver tous nos views
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));

        $twig->addGlobal('path', PATH_DIR);
        echo $twig->render($template, $data);
    }
}
?>