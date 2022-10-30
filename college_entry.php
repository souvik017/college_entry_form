<?php
$severname="localhost";
$username="root";
$password="";
$database_name="user_entry";

$conn=mysqli_connect($severname,$username,$password,$database_name);

if($conn==TRUE){
    echo"<h1>Thanks for submission</h1>";
}else{
    echo"<h1>submission not done</h1>";
}
if(isset($_POST['save']))
{
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Age = $_POST['Age'];
    $Email = $_POST['Email'];
    $Phone_number = $_POST['Phone_number'];

    $sql_query ="INSERT INTO `college_trip` (`First_name`, `Last_name`, `Age`, `Email`, `Phone_number`) VALUES ('$First_name', '$Last_name', '$Age', '$Email', '$Phone_number')";

 if(mysqli_query($conn, $sql_query))
 {
    echo"<h2>New details entered sucessfully</h2>";
 }else{
    echo"<h2>eroorrr</h2>";
 }
 mysqli_close($conn);


}
