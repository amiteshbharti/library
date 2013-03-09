<?php 
    include_once("model/Model.php");  
      
    class Controller {  
         public $model;   
      
         public function __construct()  
         {  
              $this->model = new Model();  
         }   
      
      
         public function getWebsite_home()  
         {
            include 'view/codes/website_home.php';
         }
      
      
    }
      
      
        
    ?>