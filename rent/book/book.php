<?php
$conn = mysqli_connect('localhost', 'root', '', 'machinery') or die("database not connect");
if (isset($_POST['submit'])){
if( (empty ( $_POST['fromdate'])) || (empty( $_POST['todate'])) || 
  (empty( $_POST['number'])) || (empty( $_POST['altnumber'])) )
{
?>
<script> window.alert("Enter All please ..");</script>

<?php
}
else{
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$number=$_POST['number'];
$altnumber=$_POST['altnumber'];




$query=mysqli_query($conn, "insert into book(fromdate,todate,number,altnumber)  values('$fromdate','$todate','$number','$altnumber')")
or die("qurey error");
?>
<script>

if (window.confirm('Apply successfully ምዝገባው በስርአት ተጠናቆል')) 
{
window.location.href='http://localhost/car/RENT-A-CAR-master/vehicle.html';
};

</script>

<?php

}

}

?>
