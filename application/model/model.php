<?php

/*
 * Model handles all bussiness logic and its data interaction
 */

class Model
{
  public function get_screens(){

    //Retrieve the data, in this scenario the json File
    $raw = file_get_contents('data/screens.json');

    // Process data: Decode in array & filter only codigo y nombre
    $data = json_decode($raw, true);

    foreach ($data as $dato) {
        $data2[] = array_filter($dato, function($k){
          if ($k == 'codigo' || $k == 'nombre'){
            return $k;
          }

        }, ARRAY_FILTER_USE_KEY);
    }

    // Return the data to the controller
    return $data2;

  }
}
