<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#first you have to start a session

session_start();

#assign a value to the $_SESSION superglobal array

if (isset($_SESSION['userid'])):
    header('Location: http://localhost:8888/jth/gallery__upload.php');
else:
    echo "wrong Password";
 endif;

// $_SESSION['userid']=1;
//
// #unset using unset
//
// unset($_SESSION['userid']);
//
// #check if set
// if (isset($_SESSION['userid'])):
//     echo $_SESSION['userid'];
//
// else:
//     echo "Not set";
//  endif;
//
// #if you want to remove all session values, use session_destroy
//
// session_destroy();
