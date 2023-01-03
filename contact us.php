<?php
$conn = mysqli_connect('localhost', 'root', '', 'machinery') or die("database not connect");
if (isset($_POST['submit'])){
if( (empty ( $_POST['name'])) || (empty( $_POST['email'])) || 
 (empty( $_POST['password'])) || (empty( $_POST['number'])) || (empty( $_POST['altnumber'])) )
{
?>
<script> window.alert("Enter All please ..");</script>

<?php
}
else{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$altnumber=$_POST['altnumber'];




$query=mysqli_query($conn, "insert into contact(name,email,password,number,altnumber)  values('$name','$email','$password','$number','$altnumber')")
or die("qurey error");
?>
<script>

if (window.confirm('Apply successfully ምዝገባው በስርአት ተጠናቆል')) 
{
window.location.href='http://localhost/car/contact%20us.html';
};

</script>

<?php

}

}

?>