<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Style.css" type="text/css">
  <link rel="stylesheet" href="all.css">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <title>መኪና መግዛ</title>

  <script language="javascript" type="text/javascript">
function selectiona(){
	var selected=document.getElementById("location").value;
  if(selected==0){
  	document.getElementById("input1").removeAttribute("hidden");
  }else{
  	//elsewhere actions
  }
}
function selectionb(){
	var selected=document.getElementById("year").value;
  if(selected==0){
  	document.getElementById("input2").removeAttribute("hidden");
  }else{
  	//elsewhere actions
  }
}
function selectionc(){
	var selected=document.getElementById("fule").value;
  if(selected==0){
  	document.getElementById("input3").removeAttribute("hidden");
  }else{
  	//elsewhere actions
  }
}
function selectiond(){
	var selected=document.getElementById("cylinder").value;
  if(selected==0){
  	document.getElementById("input4").removeAttribute("hidden");
  }else{
  	//elsewhere actions
  }
}
function selectione(){
	var selected=document.getElementById("transmission").value;
  if(selected==0){
  	document.getElementById("input5").removeAttribute("hidden");
  }else{
  	//elsewhere actions
  }
}
function selectionf(){
	var selected=document.getElementById("color").value;
  if(selected==0){
  	document.getElementById("input6").removeAttribute("hidden");
  }else{
  	//elsewhere actions
  }
}
function selectiong(){
	var selected=document.getElementById("sub-category").value;
  if(selected==20||selected==40||selected==60||selected==70||selected==75){
  	document.getElementById("input7").removeAttribute("hidden");
  }else{
  	//elsewhere actions
    
  }
}


  </script>


</head>

<body>


<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Ewenta Vehicle <span style="color: gold;">&</span> Machinery</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                  <li class="nav-link">
                    <a href="../Index.html">Buy(መግዢአ)</a>
                </li>
                <li class="nav-link">
                    <a href="../car sell/index.html">Sell(መሸጭ)</a>
                </li>
                <li class="nav-link">
                    <a href="../ማከራየው መኪና አለኝ/index.html">Leasing(ማከራያ)</a>
                </li>
                <li class="nav-link">
                    <a href="../RENT-A-CAR-master/vehicle.html">Rent(መከራያ)</a>
                </li>
                <li class="nav-link">
                    <a href="../contact us.html">Contact Us(ሊያገኙን ከፈለጉ)</a>
                </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>


	  <!--Landing Page HTML-->
	  <main class="container-fluid m-0 p-0">
 
    
 <!--LANDING PAGE: include a quotation request form-->
 <!--Display for sm & above-->
 <div id="home" class="frame b-gray white d-sm-block d-none p-0 mt-4">

   <div class="row picture_main justify-content-center" style="background-image:url(./image/pexels-andre-moura-2402705\ \(2\).jpg);">
	 <div class="col-lg-8 col-md-7 "></div>
	 <!--    Form for quotation entry-->
	 <div class="col-lg-3 col-md-4 
							pt-lg-5 pt-md-4 
							mt-4 ">



<form method=post action=df.php enctype="multipart/form-data"
           class="form-group b-p-gray 
                                    py-lg-5 py-md-3 
                                    px-lg-3 px-md-2 " style="margin-left: 10px; margin-top: -35px; ">
                                    
<h5 class="form-title text-center mb-3" style="margin-bottom: -15px; text-shadow: 10px 5px 5px #6db9ef; color:red;">ለመግዛት አስፈላጊ መረጃዎቹን <span class="gold">ይሙሉ</span></h5>




<select class="input form-control"  name=absection id=absection style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;">

<option value='' disabled selected hidden>ለመግዛት ከነዚ አንዱን ይምረጡ(Select one of this)</option>

<?Php

require "config.php";// connection to database 
$sql="SELECT  * from absection "; // Query to collect data 

foreach ($dbo->query($sql) as $row) {
echo "<option value=$row[cata_id]>$row[asection]</option>";
}

?>

</select>




<table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
                    <tr>
                        <td>
<input class="input2" id="input7" name="typ" hidden="hidden" placeholder="Insert Type & Brand">

<select class="input form-control" onchange="selectiong()" name=sub-category id=sub-category style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;">
<option value='' disabled selected hidden> TYPE </option>

</select>

</td>
  </tr>
</table>

<select class="input form-control" name=sup-category id=sup-category style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;">
	<option value='' disabled selected hidden>
    BRAND
  </option>

</select>



<select class="input form-control" name=semi-category id=semi-category style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;">
	<option value='' disabled selected hidden>
    
  </option>

</select>



<div class="input form-control" style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef; font-size:1rem;">
                      <label for="condition"  style="margin-left: 15px; color:'#04f23f'; text-shadow: 10px 5px 5px #fff;">
                      መግዛት ሚፈልጉት አዲስ ነው ወይስ ያገለገለ
                      </label>
                      <div>
                        <label for="New" class="radio-inline" style="margin-left: 15px; padding-right:25px; color:black;"
                          ><input
                            type="radio"
                            name="condition"
                            value="new"
                            id="New"
                          />New(አዲስ)</label
                        >
                        <label for="Old" class="radio-inline" style="color:black;"
                          ><input
                            type="radio"
                            name="condition"
                            value="old"
                            id="Old"
                          />Old(ያገለገለ)</label
                        >
                   
                      </div>
                    </div>


            <input class="input form-control" type="number" name="number"
             placeholder=" Mobile(ሰልክ ቍጥር)"
              style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;"/>
           
            <br>

           
            <div class="text-center mt-3" style="margin-top: 15px;"> <button type="submit" name="submit" value="submit" id="submit">Submit(አስገባ)</button></div>

</form>

</div>
      </div>
      <!--    Company Tagline-->
      
  </main>


  <!--End of Landing Page HTML-->
  <!--Sell Car Page HTML-->
  <section id="sellcar" style="background-image:url(./image/pexels-andre-moura-2402705\ \(2\).jpg);"
  class="container-fluid frame">
    <!--Header for Selling car-->
    <h2 class="text-center white b-gray w-100"><span class="gold ">መግዛት  </span>  ሚፈልጉትን መኪና በ 3 መንገድ ይግዙ  </h2>
    <!--Step by step instruction to inform car owner our 3-step process -->
    <div class="row white justify-content-center py-0">
      <div class="rectangle b-l-gray">
        <div class="button-sell badge badge-warning white">በ ዌብ-ሳይት (WEBSITE)</div>
        <p class="w-80"><u><a href="">መረጃዎን ለማሰገባት እዚጋ ይንኩ</a></u></p>
        <p class="mx-2 text-left d-md-block d-none">መረጃዎን ያስገቡ.<br> በፍጥነት ሻጭ እናገናኞታለን.</p>
      </div>
      <div class="rectangle b-l-gray">
        <div class="button-sell badge badge-warning white">በ ቴሌ-ግራም (TELEGRAM)</div>
        <p class="w-80"><u><a href="">የቴሌ-ግራም CHANNEL ለመቀላቀል እዚጋ ይንኩ</a></u></p>
        <p class="mx-2 text-left d-md-block d-none">መረጃዎን በቴሌ-ግራም ከላኩልን<br> በፍጥነት ሻጭ  እናገናኞታለን</p>
      </div>
      <div class="rectangle b-l-gray ">
        <div class="button-sell badge badge-warning white">በ አካል (IN PERSON)</div>
        <p class="w-80"><u>0966337163 (0930104785) በዚ ሰልክ ይደውሉልን</u></p>
        <p class="mx-2 text-left d-md-block d-none"> <br>ያግኙን በፍጥነት ሻጭ  እናገናኞታለን </p>
      </div>
    </div>
  </section>
  <!--Footer Section-->



 
<!-- Jquery Library file -->
<script src="Jquery3.4.1.min.js"></script>



<!-- Custom Javascript file -->
<script src="main.js"></script>





<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>





$(document).ready(function() {
////////////
$('#absection').change(function() {
//var st=$('#category option:selected').text();
var cata_id=$('#absection').val();
$('#sub-category').empty(); //remove all existing options
///////
$.get('ddck1.php',{'cata_id':cata_id},function(return_data){

$.each(return_data.data, function(key,value){
		$("#sub-category").append("<option value=" + value.catb_id +">"+value.subcategory+"</option>");
	});

}, "json");
///////

});
/////////////////////
});



$(document).ready(function() {
////////////
$('#sub-category').change(function(){
//var st=$('#category option:selected').text();
var cat_id=$('#sub-category').val();
$('#sup-category').empty(); //remove all existing options
///////
$.get('ddck.php',{'cat_id':cat_id},function(return_data){
$.each(return_data.data, function(key,value){
		$("#sup-category").append("<option value=" + value.subcat_id +">"+value.supcategory+"</option>");
	});
}, "json");
///////
});
/////////////////////
});



$(document).ready(function() {
////////////
$('#sup-category').change(function() {
//var st=$('#category option:selected').text();
var subcat_id=$('#sup-category').val();
$('#semi-category').empty(); //remove all existing options
///////
$.get('ddck2.php',{'subcat_id':subcat_id},function(return_data){

$.each(return_data.data, function(key,value){
		$("#semi-category").append("<option value=" + value.supcat_id +">"+value.semicategory+"</option>");
	});

}, "json");
///////

});
/////////////////////
});

</script>

</body>
</html>
