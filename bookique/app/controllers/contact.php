<?php

include "src/models/contact.php";

class Contact {


    public function handle() {

        $contacts = ContactModel::all();

        $context = [
            "contacts" => $contacts

        ];

        include "src/views/contact.php";
    }
}









?>