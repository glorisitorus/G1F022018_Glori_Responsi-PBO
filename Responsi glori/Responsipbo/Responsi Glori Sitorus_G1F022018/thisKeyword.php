<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$glori = new Person("Glori", "Ketahun");

// tambahkan value nama di object
$glori->nama = "Glori";

// panggil function sayHelloNull dengan parameter
$glori->sayHelloNull("apa kek!!");

// buat object dari kelas person
$friska = new Person("friska", "Medan");

// tambahkan value nama di object
$friska->nama = "friska";

// panggil function sayHelloNull dengan parameter null
$friska->sayHelloNull(null);
