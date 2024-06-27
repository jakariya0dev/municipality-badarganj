<?php 
    include_once './../config.php';

    session_start();


    if(!isset($_SESSION['user']['email'])){

        header('Location: login.php');
        
    }

    if(isset($_POST['logout'])){

        session_unset();
        session_destroy();
        header('Location: login.php');

    }

     if(isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){

            session_start();
            $userData = mysqli_fetch_assoc($result);
            $_SESSION['user'] = [
                'name' => $userData['name'],
                'email' => $userData['email'],
                'phone' => $userData['phone'],
                'title' => $userData['title']
            ];
            // $_SESSION['user']['name'] = mysqli_fetch_assoc($result)['name'];
            // $_SESSION['user']['email'] = mysqli_fetch_assoc($result)['email'];
            // $_SESSION['user']['phone'] = mysqli_fetch_assoc($result)['phone'];
            // $_SESSION['user']['title'] = mysqli_fetch_assoc($result)['title'];
            header('Location: index.php');

        }
        else{

            header('Location: login.php?error=true');

        }

    }