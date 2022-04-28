<?php
    //load autoload nos comunicamos con los controladores
    $controllerFile = "controllers/".$controller.".php";
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();/*isntancia*/
        if(method_exists($controller,$method)){
            $controller->{$method}($params);
        }else{
            require_once("controllers/error.php");
        }

    }else{
        require_once("controllers/error.php");
    }



?>