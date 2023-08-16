<?php
include("connection.php");
$id= $_GET['id'];
$query="SELECT * FROM FORM WHERE Id='$id'";
$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
        <form action="#" method="post">
            <div class="container">
                <div class="title">UPDATE student DETAIL</div>
                <div class="form">
                    <div class="input_field">
                        <label for="">First Name</label>
                        <input type="text" name="fname" value="<?php echo $result['fname'];?>"class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="">Last Name</label>
                        <input type="text" name="lname"value="<?php echo $result['lname'];?>"class="input" id="" >
                    </div>
                    <div class="input_field">
                        <label for="">Password</label>
                        <input type="password" name="password" value="<?php echo $result['password'];?>"  class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="">Confirm Password</label>
                        <input type="password" name="conpassword" value="<?php echo $result['cpassword'];?>"class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="" >Gender</label>
                        <div class="selectbox">
                        <select name="gender" id="" required >
                        <option value="not selected">Select</option>

                        <option value="male"
                        <?php 
                        if($result['gender']=='male'){
                            echo "selected";
                        }
                        ?>
                        >   
                        Male</option>

                        <option value="female" <?php 
                        if($result['gender']=='male'){
                            echo "selected";
                        }
                        ?>>Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="input_field">
                        <label for="">Email Address </label>
                        <input type="email" name="email" value="<?php echo $result['email'];?>" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" value="<?php echo $result['phone'];?>" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for=""> Address</label>
                        <textarea name="address" class="textarea"  required ><?php echo $result['address'];?></textarea>
                    </div>
                    <div class="input_field terms">
                        <label for= "" class="check" >
                            <input type="checkbox" required >
                            <span class="checkmark" ></span>
                        </label>
                        <p>Agree To terms and Conditions</p>
                    </div>
                    <div class="input_field">
                        
                        <input type="submit" name="update" value="UPDATE DETAIL"class="btn" id="">
                    </div>
                </div>
                
            </div>
        </form>
       
</body>
</html>
<?php
if(isset($_POST['update']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pwd=$_POST['password'];
        $cpwd=$_POST['conpassword'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $adress=$_POST['address'];


        $query ="UPDATE FORM SET fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender',phone='$phone',address='$adress' where id='$id'";
        $data=mysqli_query($con, $query);

        if($data){
            echo "<script>alert('Record updated')</script>>";
            ?>
             <meta http-equiv="refresh"
            content="0; url = http://localhost/project/responsiveforms/display.php" />
            <?php 
           
        
        }
        else{
            echo "failed to update";
        }
     }
 
        
    

?>