<?php
include("connection.php");

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
                <div class="title">REGISTRATION FORM</div>
                <div class="form">
                    <div class="input_field">
                        <label for="">First Name</label>
                        <input type="text" name="fname" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" class="input" id="" >
                    </div>
                    <div class="input_field">
                        <label for="">Password</label>
                        <input type="password" name="password" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="">Confirm Password</label>
                        <input type="password" name="conpassword" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="" >Gender</label>
                        <div class="selectbox">
                        <select name="gender" id="" required >
                        <option value="not selected">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="input_field">
                        <label for="">Email Address </label>
                        <input type="email" name="email" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" class="input" id="" required>
                    </div>
                    <div class="input_field">
                        <label for=""> Address</label>
                        <textarea name="address" class="textarea" required ></textarea>
                    </div>
                    <div class="input_field terms">
                        <label for= "" class="check" >
                            <input type="checkbox" required >
                            <span class="checkmark" ></span>
                        </label>
                        <p>Agree To terms and Conditions</p>
                    </div>
                    <div class="input_field">
                        
                        <input type="submit" name="register" value="Register"class="btn" id="">
                    </div>
                </div>
                
            </div>
        </form>
       
</body>
</html>
<?php
if(isset($_POST['register']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pwd=$_POST['password'];
        $cpwd=$_POST['conpassword'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $adress=$_POST['address'];

        if($fname!="" && $lname!="" && $pwd!="" && $cpwd!="" && $gender!="" && $email!="" && $phone!="" && $adress!="")
        {

        $query = "INSERT INTO form (fname,lname,password,cpassword,gender,email,phone,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$adress')";
        $data=mysqli_query($con, $query);

        if($data){
            echo "data inserted";
        }
        else{
            echo "failed";
        }
        }
        else{
            echo "<script>alert('Please Fill the Form')</script>";
        }
        
    }

?>