<?php 
namespace app\controllers;
use Flight;

class UserController {

    public function __construct() {

    }
    
    public function login_sigin() {
        Flight::render('login_sigin');
    }
    
}