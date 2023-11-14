<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Glori pesta pince sitorus");
var_dump($company);

$company->programmer = new BackendProgrammer("Friska Tamba");
var_dump($company);

$company->programmer = new FrontendProgrammer("Agus Sitorus");
var_dump($company);

sayHelloProgrammer(new Programmer("Glori pesta pince sitorus"));
sayHelloProgrammer(new BackendProgrammer("Friska Tamba"));
sayHelloProgrammer(new FrontendProgrammer("Agus Sitorus"));