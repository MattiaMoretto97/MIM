<?php

include "src/models/registration-model.php";

class Registration {


    public function handle() {

        $contacts = RegistrationModel::all();

        $context = [
            "contacts" => $contacts

        ];

        include "src/views/registration.php";
    }
}









?>