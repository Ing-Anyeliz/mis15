<?php


    $name_v=$_POST['name'];
    $email_v=$_POST['email'];
    $username_v=$_POST['username'];
    $pass_v=$_POST['pass'];
    $repeat_pass=$_POST['repeat-pass'];

    $db=new mysqli('localhost','root','796534','login');
    if ($sb->connect_error) {
      # code...
      printf('ERROR AL CONECTAR CON LA BD %s', $mysql->connect_error);
    }
    if (filter_var($email,FILTER_VALIDATION_EMAIL)){
        if ($pass_v == repeat_pass){
              password_hash($pass_v,);
              $query='INSERT INTO register(name,mail,pass,repeatpass) VALUES ('$email','')';
              $db->query();


        }

    }
 ?>
https://www.youtube.com/watch?v=51ctpVpAnBk
