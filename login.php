<?php 
 // Check if the user is already logged in, if yes then redirect him to welcome page
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
     header("location: home.php");
     exit;
 }
 // Include config file
 require_once "connection.php";
 // Define variables and initialize with empty values
 $username = $password = "";
 $username_err = $password_err = $login_err ="";

 if($_SERVER["REQUEST_METHOD"] == "POST")    {
    if($_POST["submit"] == "Log in") {
            // Check if username is empty
        if(empty(trim($_POST["username"]))) {
            $username_err = "Please enter studentid";
        } else{
            $username = trim($_POST["username"]);
        }
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT username, studentid, password FROM users WHERE username = ?";
            if($stmt = $conn->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_username);
                // Set parameters
                $param_username = trim($_POST["username"]);
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // Store result
                    $stmt->store_result();
                    // Check if username exists, if yes then verify password
                    if($stmt->num_rows() == 1){
                        // Bind result variables
                        $stmt->bind_result($uname, $studid, $hash);
                        if($stmt->fetch()){
                            if(password_verify($password, $hash)){
                                // Password is correct, so start a new session
                                session_start();
                                // Store data in session variables

                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $studid;
                                $_SESSION["name"] = $uname;
                                // Redirect user to welcome page
                                header("location: home.php");
                            } else{
                                // Password is not valid, display a generic error message
                                $login_err = "Invalid username or password.";
                            }
                        }
                    } else{
                        // Username doesn't exist, display a generic error message
                        $login_err = "Student ID not yet register.";
                    }
                } else{
                echo "Oops! Something went wrong. Please try again later.";
                }
                // Close statement
                $stmt->close();
            }
        }
        // Close connection
        $conn->close();
    }
 }

?>


<div id="myModal2" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close2">&times;</span>
            <form action="" method="post" class="form">
                <input type="text" name="username" placeholder="Username">
                <span><?php echo $username_err; ?></span>
                <input type="password" name="password" placeholder="Password">
                <span><?php echo $password_err; ?></span>
                <input type="submit" name="submit" value="Log in">
                <span><?php echo $login_err; ?></span>
            </form>
        </div>
    </div>