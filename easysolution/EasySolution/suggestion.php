<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $comment=$_POST["comment"];
  /*  
   $filename=$_FILES["filename"]["name"];
    $temp=$_FILES["filename"]["tmp_name"];
    $error=$_FILES["filename"]["error"];

if($error>0)
{
    die("File uploading error! Code $error.");
}
else
{
    if(move_uploaded_file($temp,"my_uploads/".$filename))
    echo "File Uploaded.";
}*/
    
    $servername="localhost";
    $username="root";
    $password="tejas1106";
    $mydatabase="mydb";


$conn=mysqli_connect($servername,$username,$password,$mydatabase);

/*if($conn->connect_error)
{
    die("Connection failed!".$conn->connect_error);
}
else {
    echo "Connected Successfully!";
}
*/

$sql = "insert into suggestions (name,gender,email,website,comment)
values ($name,$gender,$email,$website,$comment)";

if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
}
?>