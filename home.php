<?php 
    
    include 'sidenav.php'; 
    require_once 'connection.php'; 

    $sql = "SELECT firstName, lastName, yrlevel, phone, address, email, studentid FROM student WHERE studentid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s',$studentid);
    $studentid = $_SESSION["id"];
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows == 0){
        echo 'No entry yet.';
    }
    else {
        //prepare the table
        $stmt->bind_result($fname, $lname, $yrlvl, $phone, $address, $email, $studentid);
        $stmt->fetch();

        echo '  <div class="content-container">
                    <div class="home-content">
                        <div>
                            <h1 style="padding:0.5vw 2vw;background-color:rgb(0, 123, 255);color:white;">Home</h1>
                        </div>
                        <table>
                            <tr>
                                <td class="leftpart">Student ID</td>
                                <td class="rightpart">: &nbsp' . $studentid . '</td>
                            </tr>
                            <tr>
                                <td class="leftpart">Name</td>
                                <td class="rightpart">: &nbsp' . $fname . ' ' . $lname . '</td>
                            </tr>
                            <tr>
                                <td class="leftpart">Email</td>
                                <td class="rightpart">: &nbsp' . $email . '</td>
                            </tr>
                            <tr>
                                <td class="leftpart">Phone</td>
                                <td class="rightpart">: &nbsp' . $phone . '</td>
                            </tr>
                            <tr>
                                <td class="leftpart">Address</td>
                                <td class="rightpart">: &nbsp' . $address . '</td>
                            </tr>
                        </table>
                    </div>';

    }


    $sql = "SELECT studentid FROM enrollees WHERE studentid = ? AND acadyr = ? AND term = ?"; 
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('sss',$studentid, $acadyr, $term);
    $studentid = $_SESSION["id"];
    
    $_SESSION['acadyr'] = (int)date('Y');   //date function that returns the current year in string format
    $month = date('n');                     //date function that returns an integer as representation of the month
    if($month<8 && $month>1){
        $_SESSION['term']= "2nd";
        $_SESSION['acadyr'] = $_SESSION['acadyr']-1;
    } else {
        $_SESSION['term'] = "1st";
    }
    $acadyr = $_SESSION['acadyr'];
    $term = $_SESSION['term'];

    $stmt->execute();
    $stmt->store_result();
    $rows = $stmt->num_rows;

    $stmt->close();
    $conn->close();

?>
        <hr style="margin-top:2vh;background-color:rgb(0, 123, 255, 0.5);">
        <div class='card'>
            <h3><?php echo 'You are currently enrolled ' .$rows. ' subjects for the '.$term. ' semester '.$acadyr.'-'.$acadyr+1; ?></h3>
            <p>You may check your class schedule here &nbsp&nbsp<a href="subject.php" >Enrolled Subjects</a> </p>
        </div>
    </div>
</body>
</html>
