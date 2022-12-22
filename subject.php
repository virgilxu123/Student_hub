<?php 

    include 'sidenav.php'; 
    require_once 'connection.php'; 

    $sql = "SELECT subject.subjectid, subject.subDescription, enrollees.day, enrollees.time
            FROM subject
            INNER JOIN enrollees
            ON subject.subjectid = enrollees.subjectid
            WHERE   enrollees.studentid = ? AND enrollees.acadyr = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss',$studentid, $acadyr);
    $studentid = $_SESSION['id'];
    $acadyr = 2022 ;
    echo '<div class="content-container">
            <div>
                <h1 style="padding:0.5vw 2vw;background-color:rgb(0, 123, 255);color:white;">Subect</h1>
            </div>';
    if(!$stmt->execute()){
        echo 'please try again later.';
    }else {
        $stmt->store_result();
        if($stmt->num_rows == 0){
            echo 'No entry yet.';
        }
        else {
            //prepare the table
            $stmt->bind_result($subjectid, $subDescription, $day, $time);
        echo '      <table class="sub-table">
                        <tr class="thead">
                            <th>Subject ID</th>
                            <th>Description</th>
                            <th>Schedule</th>
                        </tr>';

            while($row = $stmt->fetch())
            {
                echo '  
                        <tr class="sched">
                            <td>'. $subjectid .'</td>
                            <td>' . $subDescription . '</td>
                            <td>'.$day.' '.$time.'</td>
                        </tr>';
            }
            echo '  </table>
                </div>';
        }
    }
    $stmt->close();
    $conn->close();
?>
        </div>
    </div>
</body>
</html>