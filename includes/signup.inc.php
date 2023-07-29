<?php
include_once 'signup.php';
include ('/xampp/htdocs/IWP_PROJECT/functions/common_functions.php');

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $username=$_POST["uid"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    $repwd=$_POST["repwd"];
    $user_ip=getIPAddress();



    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    //forgot input
    if(emptyNameSignup($name)!==false)
    {
        header("location:../signup.php?error=emptyNameinput");
        exit();

    }
    if(emptyUsernameSignup($username)!==false)
    {
        header("location:../signup.php?error=emptyUsernameinput");
        exit();

    }
    if(emptyEmailSignup($email)!==false)
    {
        header("location:../signup.php?error=emptyEmailinput");
        exit();

    }
    if(emptyPwdSignup($pwd)!==false)
    {
        header("location:../signup.php?error=emptyPwdinput");
        exit();

    }
    if(emptyRepwdSignup($repwd)!==false)
    {
        header("location:../signup.php?error=emptyRepwdinput");
        exit();

    }
    if(invalidEmail($email)!==false)
    {
        header("location:../signup.php?error=invalidemail");
        exit();

    }
    if(invalidUid($username)!==false)
    {
        header("location:../signup.php?error=invaliduid");
        exit();

    }

    //passwords dont match
    if(pwdMatch($pwd, $repwd)!==false)
    {
        header("location:../signup.php?error=passwordsdontmatch");
        exit();
    }
    
    //uid already exists
    if(uidExists($conn, $username, $email)!==false)
    {
        header("location:../signup.php?error=uidexists");
        exit();

    }

    createUser($conn, $name, $email, $username, $pwd, $user_ip);

    
}
else{
    header("location:../signup.php");
}
