<?php 
    
    include 'sidenav.php'; 
    require_once 'connection.php'; 


    $sql = "SELECT grades.subjectid, grades.grade, subject.subDescription
                    FROM grades
                    INNER JOIN subject ON grades.subjectid = subject.subjectid
                    WHERE grades.studentid = ? AND grades.acadyr = ? AND grades.term = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss',$studentid, $acadyr, $term);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["submit"] == "View Grades") {    
            $studentid = $_SESSION['id'];
            $acadyr = $_POST['year'];
            $term = $_POST['term'];  
        }
    }
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($subjectid, $grade, $subDescription);

?>
        <div class="content-container">
            <div style="background-color:rgb(0, 123, 255);">
                <h1 style="padding:0.5vw 2vw;color:white;">Grades</h1>
                
            </div>
            <h5>Notice:All grades posted in this portal are only valid and official if it tallies with the records of the Registrar's office.</h5>
            <form action="" method="post">
                <div class="input-cont2">
                    <div class="options2">
                        <label for="year">Academic Year</label>
                        <select name="year" id="">
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="options2">
                        <label for="term">Term</label>
                        <select name="term" id="">
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                        </select>
                    </div>
                </div>
                <input type="submit" name="submit" value="View Grades" class="set">
            </form>
            <div>
                <?php 
                    echo '  <table class="tbl-grades">
                                <tr class="thead-grades">
                                    <th class="th-col">Subject ID</th>
                                    <th class="th-col">Description</th>
                                    <th class="th-col">Grade</th>
                                </tr>';
                    while($stmt->fetch()){
                        echo '  <tr class="sched">
                                    <td>'. $subjectid .'</td>
                                    <td>' . $subDescription . '</td>
                                    <td>'.$grade.'</td>
                                </tr>';
                    }
                    echo '  </table>';
                    $stmt->close();
                    $conn->close(); 
                ?>
            </div>
        </div>
    </div>
</body>
</html>