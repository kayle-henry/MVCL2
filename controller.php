<?php
    include_once "controllers/ControllerAction.php";
    include_once "controllers/ProductController.php";
    include_once "models/ProductDAO.php";

    class FrontController { 
        private $controllers;
        

        public function __construct(){
            $this->showErrors(0);
            $this->controllers = $this->loadControllers();
        }

        public function run(){
            //***** Get Request Method and Page Variable *****/
            $method = $_SERVER['REQUEST_METHOD'];
            $page = $_REQUEST['page'];
        
            //*****Process Controller Based on Method and Page *** */
            $controller = $this->controllers[$method.$page];
            if($method=='GET'){
                $controller->processGET();
            }
            if($method=='POST'){
                $controller->processPOST();
            }
        }

        private function loadControllers(){
            $controllers["GET"."list"] = new ProductList();
            $controllers["GET"."add"] = new ProductAdd();
            $controllers["POST"."add"] = new ProductAdd();
            //$controllers["GET"."delete"] = new ContactDelete();
            //$controllers["POST"."delete"] = new ContactDelete();
            $controllers["GET"."update"] = new ProductUpdate();
            $controllers["POST"."update"] = new ProductUpdate();
            return $controllers;
        }

        private function showErrors($debug){
            if($debug==1){
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
            }
        }
    }

    $controller = new FrontController();
    $controller->run();
?>