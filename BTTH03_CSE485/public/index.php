<?php
 include("../app/config/config.php");
 if(isset($_GET['controller']) && isset($_GET['action'])){ // kiểm tra xem có controller và action ở trên url không?
    $controller = $_GET['controller']; // Có rồi thì gán giá trị của controller và action cho $controller và $action
    $action = $_GET['action'];
    $controller = $controller."Controller";
    $path=APP_ROOT."/app/controller/".$controller. ".php";
    if(file_exists($path)){
        include($path);
        $controller = ucfirst($controller);
        $controllerDoctor = new $controller;
        if(method_exists($controllerDoctor, $action)){
            $controllerDoctor->$action();
        }
        else{
            $controllerDoctor->index();
        }
    }else{
        include(APP_ROOT .'/app/controller/doctorController.php');
        $homeController = new DoctorController();
        $homeController->index();
    }

 }else{
    include(APP_ROOT .'/app/controller/doctorController.php');
    $homeController = new DoctorController();
    $homeController->index();
 }

?>