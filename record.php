<?php
include('conn.php');
if (isset($_POST["Register"])) header("location:student_registration.php");
if (isset($_POST["Update"])) header("location:update.php");
if (isset($_POST["Delete"])) header("location:delete.php");
if (isset($_POST["Logout"])) header("location:index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parshant Tyagi- Assignment 16</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section>
        <h1> Student Records! </h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <button value="Submit" class="button5" name="Register">Register</button>
            <button value="Submit" class="button6" name="Update">Update</button>
            <button value="Submit" class="button7" name="Delete">Delete</button>
            <button value="Submit" class="button8" name="Logout">Logout</button>
        </form>

        <?php
        $sql = "select * from details";
        $result = $conn->query($sql);

        echo "<div class = container>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="mini_container">
                        <span class = "col">Name: ' . $row['firstname'] . '  ' . $row['lastname'] . '</span>
                        <span class = "col">Roll No: ' . $row["roll_no"] . '</span>
                        <span class = "col">Phone no: ' . $row['phone_no'] . '</span>
                        <span class = "col">Date of birth: ' . $row['dob'] . '</span>
                        <span class = "col">Course: ' . $row['course'] . '</span>
                        <span class = "col">Email: ' . $row["email"] . '</span>
                       
                        </div>';
            }
        }

        echo "</div>"
        ?>
    </section>
</body>

</html>