<?php

include "src/models/login-model.php";

class Login {


    public function handle() {

        $contacts = LoginModel::all();

        $context = [
            "contacts" => $contacts

        ];

        include "src/views/login.php";
    }
}









?>