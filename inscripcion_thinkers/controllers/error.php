<?php
    class Errors extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }

        public function notFound(){
            //vista error
            $this->views->getView($this,"errors");
            
        }
    }
    $notFound = new Errors();
    $notFound->notFound();
?>