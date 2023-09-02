 <?php

$name = $_POST["name"];
$message = $_POST["message"];
$dob = $_POST["DOB"];
$phone = $_POST["phone-no"];
$lga = $_POST["LGA"];
$skill = $_POST["skill"];


$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
               username: $username,
               password: $password,
               database: $dbname);
            
if (mysqli_connect_errno()) {
    die("connection error:" . mysqli_connect_error());

}
$sql = "INSERT INTO message (name, body, dob, phone, lga, skill)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssss",
                        $name,
                        $message,
                        $dob,
                        $phone,
                        $lga,
                        $skill);

mysqli_stmt_execute($stmt);

 
echo "Form sent.";                      