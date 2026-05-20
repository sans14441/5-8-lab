<?php
const ADMIN_LOGIN = 'admin';
const ADMIN_PASSWORD = 'admin'; 
function login($login, $password) {
    if ($login === ADMIN_LOGIN && $password === ADMIN_PASSWORD) {
        session_regenerate_id(true); // Захист від фіксації сесії (Session Fixation)
        $_SESSION['authorized'] = true;
        return true;
    }
    return false;
}

function isAuthorized() {
    return !empty($_SESSION['authorized']);
}

function logout() {
    session_unset();
    session_destroy();
}