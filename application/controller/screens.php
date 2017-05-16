<?php

/*
 * Screens controller, to manage API-model interactions
 */

class Screens extends Controller{

  // index() will list all products
   function index(){

     //Get screens from the Model
     $screens =  $this->model->get_screens();

     //Encode screens
     $response = json_encode($screens);

     //Echo the response to the client
     echo $response;
   }
}

?>
