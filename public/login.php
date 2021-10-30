<?php
    require_once ('../kernel.php');
    $query = require_once('../bootstrap.php');
    

    $errors = [];
    if (isPost() && cfsr()){
           $email = isRequired('email',$errors);
           $password = isRequired('password',$errors);
           if (!count($errors)){
               $user = $query->login('users',$email,$password);
               $_SESSION['user'] = serialize($user);
               header('Location: /ofegat.php');
           }
    }

    loadView('login',compact('errors'));
