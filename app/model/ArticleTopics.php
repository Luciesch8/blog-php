<?php 

class Article{

    public $top = [];

    function __construct($data) {

        $this->topic = $data[0]['id'];

        foreach ($data as $value){
            $arr = array($value["id"] => $value["name"]);
        }

    }
}


?>