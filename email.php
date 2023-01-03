<?php
$conn = mysqli_connect('localhost', 'root', '', 'machinery') or die("database not connect");
if (isset($_POST['submit'])){
if(  (empty( $_POST['email'])) )
{
?>
<script> window.alert("Enter All please ..");</script>

<?php
}
else{

$email=$_POST['email'];





$query=mysqli_query($conn, "insert into email(email)  values('$email')")
or die("qurey error");
?>
<script>

if (window.confirm('Apply successfully ምዝገባው በስርአት ተጠናቆል')) 
{
window.location.href='http://localhost/car/index.html';
};

</script>

<?php

}

}

?>