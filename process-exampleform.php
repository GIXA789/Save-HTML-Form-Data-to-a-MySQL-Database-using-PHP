<?php
    $First_Name=$_POST["First_Name"];
    $Last_Name=$_POST["Last_Name"];
  
    $host="localhost";
    $dbname="database name";
    $username="username";
    $password="";

    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(mysqli_connect_errno()){
    die("Connection Error:".mysqli_connect_error());
}


        $sql="INSERT INTO Details(First_Name,Last_Name)
        VALUES(?,?)";

$stmt=mysqli_stmt_init($conn);
                                                           
if(! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
                                                                      
mysqli_stmt_bind_param($stmt,"ss",
$First_Name,
$Last_Name,
);

mysqli_stmt_execute($stmt);
    echo"Record saved";
?>

Then you need to create another php. File to connect webpage and example php file.

<?php
//connection for the database to html
$con=mysqli_connect("localhost","user name","password","database");

if(!$con){
    die("Connection error");
}

?>