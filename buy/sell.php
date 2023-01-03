<?php
$conn = mysqli_connect('localhost', 'root', '', 'machinery') or die("database not connect");
if (isset($_POST['submit'])){
    if( (empty ( $_POST['name'])) || (empty( $_POST['type'])) || 
    (empty( $_POST['brand'])) || (empty( $_POST['year'])) || (empty( $_POST['location']))
    || (empty( $_POST['level']))   || (empty( $_POST['hours']))  || (empty( $_POST['tires']))
    || (empty( $_POST['weight'])) || (empty( $_POST['sales']))  || (empty( $_POST['price']))
    || (empty( $_POST['serial']))  || (empty( $_POST['bucket']))  || (empty( $_POST['color']))  || (empty( $_POST['area']))
    || (empty( $_POST['number']))  )
   {
?>
<script> window.alert("Enter All please ..");</script>
 
<?php
}
else{
$name=$_POST['name'];
$type=$_POST['type'];
$brand=$_POST['brand'];
$year=$_POST['year'];
$location=$_POST['location'];
$level=$_POST['level'];
$hours=$_POST['hours'];
$tires=$_POST['tires'];
$weight=$_POST['weight'];
$sales=$_POST['sales'];
$price=$_POST['price'];
$serial=$_POST['serial'];
$bucket=$_POST['bucket'];
$color=$_POST['color'];
$area=$_POST['area'];
$number=$_POST['number'];



$image=addslashes($_FILES['image']['tmp_name']);
$imagename=addslashes($_FILES['image']['name']);
$image=file_get_contents($image);
$image=base64_encode($image);




$query=mysqli_query($conn, "insert into sell(name,type,brand,year,location,level,hours,tires,weight,sales,price,serial,bucket,color,area,number,image,imagename)
  values('$name','$type','$brand','$year','$location','$level','$hours','$tires','$weight','$sales','$price','$serial','$bucket','$color','$area','$number','$image','$imagename')")
or die("qurey error");
?>
<script>

if (window.confirm('Apply successfully ምዝገባው በስርአት ተጠናቆል')) 
{
window.location.href='http://localhost/car/car%20sell/index.html';
};


</script>

<?php

}

}

?>