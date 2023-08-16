<html>
    <head>
        <title>"Display</title>
        <style>
            body{
                background: #d071f9;
            }
            table{
                background: white;
            }
            .update{
                background: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 24px;
                width: 87px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete{
                background: red;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 24px;
                width: 87px;
                font-weight: bold;
                cursor: pointer;
            }
        </style>
    </head>

<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM FORM";
$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);

//echo $total;

if($total !=0){
    ?>
    <h2 style="text-align: center;"><mark>Displaying All Records</mark></h2>
    <center>
        <table class="table1"  border="3" cellspacing="7" width="100%">
        <tr >
            <th width="5%"> Id</th>
            <th width="10%">First Name</th>
            <th  width="10%">Last Name</th>
            <th  width="7%"> Gender</th>
            <th  width="20%" > Email</th>
            <th  width="10%">Phone </th>
            <th width="25%" >Address</th>
            <th width="13%" >Operation</th>
        </tr>
        
           
    <?php
    //echo "Table has Records";
    while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['Id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td> ".$result['gender']."</td>
                <td> ".$result['email']."</td>
                <td> ".$result['phone']."</td>
                <td>".$result['address']."</td>
                
                <td> <a href='update_details.php?id=$result[Id]'><input type='submit' value='Update' class='update'></a>
                
                 <a href='delete.php?id=$result[Id]'><input type='submit' value='Delete' class='delete'></a></td>

             </tr>";

    }
}
else{
    echo "No records found";
}
//echo  $result['fname']." ".$result['lname']."".$result['gender']." ".$result['email']."".$result['phone']." ".$result['address']."<br>";

?>
 </table>
 </center>
