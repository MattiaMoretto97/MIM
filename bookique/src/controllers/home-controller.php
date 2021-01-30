<?php

include "src/models/home-model.php";

class Home {


    public function handle() {

        $contacts = HomeModel::all();

        $context = [
            "contacts" => $contacts

        ];

        include "src/views/home.php";
    }
}









?>