<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>plus2net demo scripts using JQuery</title>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<body>
<script>
$(document).ready(function() {
////////////
$('#t1').hide();
$('#category').change(function(){
//var st=$('#category option:selected').text();
var cat_id=$('#category').val();
$('#sub-category').empty(); //remove all existing options
///////
$.get('dd1ck.php',{'cat_id':cat_id},function(return_data){
$('#msg').text(" Number of Records found :"+return_data.no_of_records);
if(return_data.no_of_records>=1){
$.each(return_data.data, function(key,value){
		$("#sub-category").append("<option value=" + value.subcat_id +">"+value.subcategory+"</option>");
	});
}else{
/// add text box and hide 2nd subcategory 
$('#sub-category').hide();
$('#t1').show();
}
}, "json");
///////
});
/////////////////////
});
</script>
<div id=msg> &nbsp;</div><br><br>
<form method=post action=dd-submit.php>
<select name=category id=category>
<option value='' selected>Select</option>
<?Php
require "config.php";// connection to database 
$sql="select * from category "; // Query to collect data 

foreach ($dbo->query($sql) as $row) {
echo "<option value=$row[cat_id]>$row[category]</option>";
}
?>
</select>
<select name=sub-category id=sub-category>
</select> 

<button type="submit" name="submit" value="submit" id="submit">upload</button>

</form>
</body>
</html>
