<?php
include("connection.php");
$id= $_GET['id'];
$query=" DELETE FROM form where Id='$id'";
$data=mysqli_query($con,$query);
if($data){
    echo " <script>alert('Record has been Deleted')</script>";
    
    ?>
    <meta http-equiv="refresh"
            content="0; url = http://localhost/project/responsiveforms/display.php" />
    <?php
}
else{
    echo "Records has not deleted";
}
?>