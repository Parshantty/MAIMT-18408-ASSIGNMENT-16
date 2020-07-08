<?php
$Roll_No = $Email = $Password =  $msg = "";


include ('conn.php');
if (isset($_POST["login"])) {
    $Roll_No = $_POST["Roll_No"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    
     

    $sql = "select * from details where Email='$Email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          //  echo "Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            $pass_check = $row["password"];
        }

        if ($pass_check == $Password ) {
            header('location:record.php');
        } else 
        $msg = "No user found.Please sign up!";
    } else {
        $msg= "Please Enter Record";
    }
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
        <header>Student Record Log In!</header>
        <h3 class="error"><?php echo $msg; ?></h3>
        <div class="container">
            <div class="row">
                <div class="col-20">
                    <lable>Roll No: </lable>
                </div>
                <div class="col-40"><input type="text" name="Roll_No" placeholder="Enter Roll No" value="<?php echo $Roll_No; ?>"></div>
            </div>
            <div class="row">
                <div class="col-20">
                    <lable>Email: </lable>
                </div>
                <div class="col-40"><input type="email" name="Email" value="<?php echo $Email; ?>" placeholder="abc@gmail.com"></div>
            </div>

            <div class="row">
                <div class="col-20">
                    <lable>Password:</lable>
                </div>
                <div class="col-40"><input type="password" name="Password" placeholder="Enter Password" value="<?php echo $Password; ?>"></div>
            </div>
            <button value="Submit" class="button1" name="login">Log In</button> 
            <button value="Submit" class="button2" formaction="student_registration">Sign In</button>
        </div>
    </form>
</body>

</html>