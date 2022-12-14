    <?php

        $sql2 = "SELECT firstName, lastName, yrlevel, address, studentid FROM student WHERE studentid = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param('s',$studentid2);
        $studentid2 = $_SESSION["id"];
        $stmt2->execute();
        $stmt2->store_result();

        $stmt2->bind_result($fname, $lname, $yrlvl, $address, $studentid2);
        $stmt2->fetch();
    ?>
    
    
    
    
    <div class="print-area">
        <div class="headr-container">
            <div class="logo">
                <img src="images\BSCSLogo (1).png" alt="">
            </div>
            <div class="uni-name">
                <h4>Republic of the Philippines</h4>
                <h3>NORTHEASTERN MINDANAO STATE UNIVERSITY</h3>
                <h4>Tandag City, Surigao del Sur</h4>
            </div>
            <div class="COR">
                <h3>CERTIFICATE OF REGISTRATION</h3>
            </div>
        </div>
        <div class="student-info">
            <p class="label">Enrollment No.:</p>
            <p class="value">0710115819</p>
            <p class="label">Enrollment Date:</p>
            <p class="value">07/22/2021</p>
            <p class="label">Year Level:</p>
            <p class="value">Third Year</p>
            <p class="label">Student No.:</p>
            <p class="value"><?php echo $studentid2 ?></p>
            <p class="label">Curriculum:</p>
            <p class="value">2019-2020</p>
            <p class="label">Student Type:</p>
            <p class="value">Old Student</p>
            <p class="label">Student Name:</p>
            <p class="value"><?php echo $lname.', '.$fname ?></p>
            <p class="label">School Year:</p>
            <p class="value">2021-2022/1st Semester</p>
            <p class="label">Adjustment No.:</p>
            <p class="value">100000001</p>
            <p class="label">Address:</p>
            <p class="value2"><?php echo $address ?></p>    
            <p class="label">Course:</p>
            <p class="value2">BACHELOR OF SCIENCE IN COMPUTER SCIENCE</p>
            <p class="label">Department:</p>
            <p class="value2">COLLEGE OF ENGINEERING, COMPUTER STUDIES AND TECHNOLOGY</p>
            <p class="label2">Scholorship/Grant:</p>
            <p class="value3">ZERO COLLECTION PROGRAM</p>
        </div>
    </div>

