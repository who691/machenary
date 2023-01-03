<?php
$conn = mysqli_connect('localhost', 'root', '', 'machinery') or die("database not connect");
if (isset($_POST['submit'])){
if( (empty ( $_POST['name'])) || (empty( $_POST['email'])) || 
  (empty( $_POST['number'])) || (empty( $_POST['altnumber'])) )
{
?>
<script> window.alert("Enter All please ..");</script>

<?php
}
else{
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$altnumber=$_POST['altnumber'];




$query=mysqli_query($conn, "insert into buy(name,email,number,altnumber)  values('$name','$email','$number','$altnumber')")
or die("qurey error");
?>
<script>

if (window.confirm('Apply successfully ምዝገባው በስርአት ተጠናቆል')) 
{
window.location.href='http://localhost/car/Index.html';
};

</script>

<?php

}

}

?>