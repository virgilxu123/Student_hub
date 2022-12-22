<!-- The Modal -->
<style>
    /* signup modal */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
        transition: 0.2s;
    }
    /* Modal Content/Box */
    .modal-content {
        display: flex;
        flex-direction: column;
        background-color: rgb(23, 21, 21);
        margin: 5% auto; /* 15% from the top and centered */
        padding: 10px 15px;
        border: 2px solid #888;
        border-radius: 20px;
        width: 25%; /* Could be more or less, depending on screen size */
    }
    
    /* The Close Button */
    .close, .close2 {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        width: 10px;
        float: right;
    }
    
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .close2:hover,
    .close2:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .modal-content form {
        display: grid;
        grid-template-columns: auto;
        row-gap: 20px;
    }
    .modal-content input[type="text"], .modal-content input[type="password"]   {
        background-color: rgb(202, 243, 206);
        padding: 10px;
        font-size: 16px;
        border-radius: 10px;
        border-style: none;
        border-left: 7px solid rgb(17, 215, 96);
    }
    .modal-content input[type="submit"] {
        border-color: #C82121;
        width: 30%;
        cursor: pointer;
        padding: 5px;
        border-radius: 10px;
        font-size: 20px;
        background-color: #C82121;
        font-family: Merriweather, serif;
        color: #BECBFF;
    }
/* signup modal */
</style>
<?php
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }
    // Include config file
    require_once "connection.php";
    // Define variables and initialize with empty values
    
    if($_SERVER["REQUEST_METHOD"] == "POST")    {
        if ($_POST["submit"] == "Register") {
            $studentid = $_POST["studentid"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm_pword = $_POST["confirm_pword"];
            $stmt = $conn->prepare("INSERT INTO users (username, studentid, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $studentid, $password);
            $stmt->execute();
        }
    }
    
?>
<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="" method="post" class="form">
                <input type="text" name="studentid" placeholder="Student ID">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_pword" placeholder="Confirm password">
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </div>
    <!-- The Modal -->