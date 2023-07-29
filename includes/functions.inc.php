<?php
    function emptyNameSignup($name)
    {
        if(empty($name))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function emptyEmailSignup($email)
    {
        if(empty($email))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function emptyUsernameSignup($username)
    {
        if(empty($username))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function emptyPwdSignup($pwd)
    {
        if(empty($pwd))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function emptyRepwdSignup($repwd)
    {
        if(empty($repwd))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function invalidUid($username)
    {
        if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function invalidEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function pwdMatch($pwd, $repwd)
    {
        if($pwd !== $repwd)
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function uidExists($conn, $username, $email)
    {
        $sql= "SELECT * FROM users WHERE usersUid = ? OR usersEmail= ?;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("location:../signup.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt); 

        $resultData= mysqli_stmt_get_result($stmt);

        if($row=mysqli_fetch_assoc($resultData))
        {
            return $row;

        }
        else
        {
            $result=false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }
    function createUser($conn, $name, $email, $username, $pwd, $user_ip)
    {
        $sql= "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, user_ip) VALUES(?, ?,?,?,?) ";
        $stmt1=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt1, $sql))
        {
            header("location:../signup.php?error=stmt1failed");
            exit();
        }

        $hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt1, "sssss", $name, $email, $username, $hashedPwd, $user_ip);
        mysqli_stmt_execute($stmt1);
        mysqli_stmt_close($stmt1);
        header("location:../login.php?error=signupErrornone");
        exit();


    }


    //login
    function emptyInputLogin($username,$pwd)
    {
        if(empty($username) || empty($pwd))
        {   
            $result=true;

        }
        else{
            $result=false;
        }
        return $result;
    }
    function loginUser($conn, $username, $pwd)
    {
        $uidExists=uidExists($conn, $username, $username);
        if($uidExists==false)
        {
            header("location: ../login.php?error=usernameLoginError");
            exit();
        }
        $pwdHashed =$uidExists["usersPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if($checkPwd ==false)
        {
            header("location: ../login.php?error=passwordLoginError");
            exit();
        }
        else if($checkPwd ==true)
        {   
            session_start();
            $_SESSION["userid"]=$uidExists["usersId"];
            $_SESSION["useruid"]= $uidExists["usersUid"];
            header("location: ../profile.php");
            exit();

        }
        

    }



    