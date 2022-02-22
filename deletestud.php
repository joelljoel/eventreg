
<?php
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $mysqli= new mysqli('localhost', 'root', '','test') or die(mysqli_error($mysqli));

   $delete= $mysqli->query("DELETE FROM registration1 WHERE no='$recordId'") or die($mysqli->error);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="student_data.php";</script>';
    }
}
?>
