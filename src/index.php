<?php
    session_start();
    $users = array(
        "Sumit@email.com"=>1234,
        "Shiv@email.com"=>4568,
        "demo1@email.com"=>7890,
        "demo2@email.com"=>1111,
        "kushal@email.com"=>2222
    );

    if(isset($_GET['email'])){
        
        $email = $_GET['email'];
        $password = $_GET['password'];
        // echo "<script>alert(".$users['Sumit@email.com'].")</script>";
        if($users[$email] == $password){
            header('location:AdminPage.php');
            $_SESSION['login'] = 1;
        }  
        else echo '<script>alert("invalid credentials");</script>';
    }
?>

<style>
    form{
        padding:3vw;
        display: flex;
        justify-content:center;
        align-items:center;
        width:50%;
        margin-left:auto;
        margin-right:auto;
    }
    table{
        color:white;
        font-weight:900;
        font-size:2vw;
        border-radius:5px;
        padding:5vw;
        background-color:grey;
        width:100%;
    }
    button{
        border:none;
        outline:none;
        background-color:steelblue;
        padding:1vw;
        border-radius:5px;
        color:white;
        font-weight:800;
    }

</style>
<form action='#' method='get'>
    <table>
        <tr>
            <td>Email:-</td>
            <td><input type="email" name='email' required ></td>
        </tr>
        <tr>
            <td>Password:-</td>
            <td><input type="password" required name='password'></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Login</button></td>
        </tr>
    </table>
</form>