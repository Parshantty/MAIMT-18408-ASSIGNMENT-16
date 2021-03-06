<?php
$Roll_No = $firstname = $lastname = $phone_no = $dob = $course = $email = $password = $confirm_password = $msg = "";


include("conn.php");
if (isset($_POST["Submit"])) {
    $Roll_No = $_POST["Roll_No"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone_no = $_POST["phone_no"];
    $dob = $_POST["dob"];
    $course = $_POST["course"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($Roll_No == "") {
        $msg = "Please Enter Roll No";
    } elseif ($firstname == "") {
        $msg = "Please Enter Firstname";
    } elseif ($lastname == "") {
        $msg = "Please Enter Lastname";
    } elseif ($phone_no == "") {
        $msg = "Please Enter Phone no";
    } elseif ($dob == "") {
        $msg = "Please Enter Date Of Birth";
    } elseif ($course == "") {
        $msg = "Please Enter Course";
    } elseif ($email == "") {
        $msg = "Please Enter Email";
    } elseif ($password == "") {
        $msg = "Please Enter Password";
    } elseif ($confirm_password == "") {
        $msg = "Please Enter Confirm Password";
    } else {
        $msg = "Logged In";
        $sql = "insert details values('','$Roll_No','$firstname','$lastname',$phone_no,'$dob','$course','$email','$password','$confirm_password')";

        if ($conn->query($sql) === true) {
            echo "Row created sucessfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
// for reset button
 if(isset($_POST['reset'])){
        $msg = $fname = $lname = $ph_no = $dob = $course = $email = $pass = $con_pass = "";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIMT-18408-ASSIGNMENT16</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <form name="Student Registration Form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <header>Student Registration Form</header>
        <h3 class="error"><?php echo $msg; ?></h3>
        <div class="container">
            <div class="row">
                <div class="col-20">
                    <lable>Roll_No: </lable>
                </div>
                <div class="col-40"><input type="text" name="Roll_No" placeholder="Roll_No" value="<?php echo $Roll_No; ?>"></div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>First Name: </lable>
                </div>
                <div class="col-40"><input type="text" name="firstname" placeholder="Enter Firstname" value="<?php echo $firstname; ?>"></div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>Last Name: </lable>
                </div>
                <div class="col-40"><input type="text" placeholder="Enter Lastname" name="lastname" value="<?php echo $lastname; ?>"></div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>Phone no.: </lable>
                </div>
                <div class="col-40"><input type="text" name="phone_no" placeholder="Enter number" value="<?php echo $phone_no; ?>"></div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>Date of Birth: </lable>
                </div>
                <div class="col-40"><input type="date" name="dob" value="<?php echo $dob; ?>"></div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>Course: </lable>
                </div>
                <div class="col-40">
                    <select id="course" name="course" required>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="BBA">BBA</option>
                        <option value="MBA">MBA</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>Email: </lable>
                </div>
                <div class="col-40"><input type="email" name="email" value="<?php echo $email; ?>" placeholder="abc@gmail.com"></div>
            </div>

            <div class="row">
                <div class="col-20">
                    <lable>Password:</lable>
                </div>
                <div class="col-40"><input type="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>"></div>
            </div>

            <div class="row">
                <div class="col-20">
                    <lable>Confirm Password:</lable>
                </div>
                <div class="col-40"><input type="password" name="confirm_password" placeholder="Enter Confirm Password" value="<?php echo $confirm_password; ?>"></div>
            </div>
            <div class="button">
                 <button value="submit" class="button3" name="Submit">Submit</button>
                <input type="reset" class="button4" name="res" value="Reset" />
            </div>
        </div>
    </form>
</body>

</html>