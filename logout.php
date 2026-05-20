<?php
session_start();
require 'auth.php';
logout();
header('Location: index.php'); 
exit;