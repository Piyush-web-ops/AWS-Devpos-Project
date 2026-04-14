<!DOCTYPE html>

<html>
<head>
    <title>DevOps User Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #667eea, #764ba2); height:100vh; display:flex; align-items:center; justify-content:center;">

<div class="card shadow-lg" style="width: 400px; border-radius: 15px;">

```
<div class="card-header text-center" style="background:#764ba2; color:white; border-radius: 15px 15px 0 0;">
    <h3>🚀 User Registration</h3>
</div>

<div class="card-body">

    <form method="post" action="">
        
        <div class="form-group">
            <label><b>Name</b></label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block" style="background:#764ba2; border:none;">
            Submit
        </button>

    </form>

</div>
```

</div>

<?php
//  RDS Connection Details
$servername = "database-2.coz8c2me42xv.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123"; //
$db = "DevopsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    echo "<div style='color:white; position:absolute; top:10px;'>❌ Connection failed</div>";
}

// Insert data securely
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];

    //  Secure query (prevents SQL injection)
    $stmt = $conn->prepare("INSERT INTO data (firstname, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $firstname, $email);

    if ($stmt->execute()) {
        echo "<script>alert(' Data submitted successfully!');</script>";
    } else {
        echo "<script>alert('❌ Error occurred');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

</body>
</html>
