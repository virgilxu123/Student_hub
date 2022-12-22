<?php 
    
    include 'sidenav.php'; 
    require_once 'connection.php'; 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["submit"] == "Submit") {
            $sql = 'INSERT INTO appointment (date, studentid, office, reason) VALUES (?, ?, ?, ?)';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssss', $date, $studentid, $office, $reason);
            $date = $_POST['schedule'];
            $studentid = $_SESSION['id'];
            $office = $_POST['office'];
            $reason = $_POST['reason'];
            $stmt->execute();
            header('Location: setApp.php');
            exit;
        }
        if ($_POST['submit'] == "Cancel") {
            $sql = "DELETE FROM appointment WHERE appointmentid = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $appointment_id);
            $appointment_id = $_POST['appointmentid'];
            $stmt->execute();
            header('Location: setApp.php');
            exit;
        }

    }
    $sql = 'SELECT appointmentid, office, reason, date FROM appointment WHERE studentid = ? ORDER BY date ASC';
    $stmt = $conn->prepare($sql);
    $stmt->prepare($sql);
    $stmt->bind_param('s', $studentid);
    $studentid = $_SESSION['id'];
    $stmt->execute();
    $stmt->store_result();
    $rows = $stmt->num_rows;
    
    if ($rows > 1) {
        $message = "You have ".$rows." appointments!";
    } else {
        if ($rows == 1) {
            $message = "You have ".$rows." appointment!";
        } else {
            $message = "You have no appointment!";
        }
    }
    $stmt->bind_result($appointmentid, $office, $reason, $date);
    
?>
        <div class="content-container">
            <div>
                <h1 style="padding:0.5vw 2vw;background-color:rgb(0, 123, 255);color:white;">Set Appointment</h1>
            </div>
            
            <form action="" method="post">
                <div class="input-cont">
                    <div class="options">
                        <label for="office">Select Office</label>
                        <select name="office" id="">
                            <option value="Registrar">Registrar</option>
                            <option value="IT">IT</option>
                            <option value="Library">Library</option>
                            <option value="Cashier">Cashier</option>
                        </select>
                    </div>
                    <div class="options">
                        <label for="reason">Reason</label>
                        <input type="text" name="reason" id="">
                    </div>
                    <div class="options">
                        <label for="date">Select Date</label>
                        <input type="date" name="schedule">
                    </div>
                </div>
                
                <input type="submit" name="submit" value="Submit" class="set">
            </form>
            <hr>
            <div>
                <h3 class="h3-app"><?php echo $message; ?></h3>
                <div>
                        <?php

                            while ($stmt->fetch()) {
                                echo '  <div class="table-app">
                                            <table >
                                                <tr>
                                                    <td class="right1">
                                                        Office
                                                    </td>
                                                    <td class="left1">
                                                        : '.$office.
                                                    '</td>
                                                </tr>
                                                <tr>
                                                    <td class="right1">
                                                        Reason
                                                    </td>
                                                    <td class="left1">
                                                        : '.$reason.
                                                    '</td>
                                                </tr>
                                                <tr>
                                                    <td class="right1 date">
                                                        Date
                                                    </td>
                                                    <td class="left1 date">
                                                        : '.$date.
                                                    '</td>
                                                </tr>
                                            </table>
                                            <form method="post" action="">
                                                <input type="hidden" name="appointmentid" value="'.$appointmentid.'">
                                                <input type="submit" name="submit" value="Cancel" class="cancel">
                                            </form>
                                        </div>';
                            }
                            $stmt->close();
                            $conn->close();
                        ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>