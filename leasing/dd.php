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
  

  <title>መኪና ማከራያ</title>

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
                                    
<h5 class="form-title text-center mb-3" style="margin-bottom: -15px; text-shadow: 10px 5px 5px #6db9ef; color:red;">ለማከራየት አስፈላጊ መረጃዎቹን <span class="gold">ይሙሉ</span></h5>




<select class="input form-control"  name=absection id=absection style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;">

<option value='' disabled selected hidden>ከነዚ አንዱን ይምረጡ(Select one of this)</option>

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
                      Condition/የሚገኝበት ሁኔታ
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





                    
                    <table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
  <tr>
      <td>

                    <input class="input1" name="loc" id="input1" hidden="hidden" placeholder="input data">

 <select class="input form-control" onchange="selectiona()" name=location id=location
  style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;" >

	<option value='' disabled selected hidden>
  Location(የት ቦታ እንደሚገኝ)
  </option>

  <option value="Addis Ababa" <?php if($options=="Addis Ababa") echo 'selected="selected"'; ?> >Addis Ababa</option>
      <option value="Adama" <?php if($options=="Adama") echo 'selected="selected"'; ?>>Adama</option>
      <option value="Mekelle">Mekelle</option>
  <option value="Gondar">Gondar</option>
      <option value="Awassa">Awassa</option>
      <option value="Bahir Dar">Bahir Dar</option>
  <option value="Dire Dawa">Dire Dawa</option>
      <option value="Jimma">Jimma</option>
      <option value="Dessie">Dessie</option>
  <option value="Shashamane">Shashamane</option>
      <option value="	Adigrat">	Adigrat</option>
  <option value="Wolaita Sodo">Wolaita Sodo</option>
      <option value="Dessie">Dessie</option>
      <option value="Jijiga">Jijiga</option>
  <option value="Debre Birhan">Debre Birhan</option>
      <option value="Bishoftu">Bishoftu</option>
      <option value="Arba Minch">Arba Minch</option>
  <option value="Hosaena">Hosaena</option>
      <option value="Harar">Harar</option>
      <option value="Dilla">Dilla</option>
  <option value="Nekemte">Nekemte</option>
      <option value="Asella">	Asella</option>
  <option value="Debre Mark'os">Debre Mark'os</option>
      <option value="Kombolcha">Kombolcha</option>
      <option value="Debre Tabor">Debre Tabor</option>
  <option value="Weldiya">Weldiya</option>
      <option value="Sebeta">Sebeta</option>
      <option value="Burayu">Burayu</option>
  <option value="Shire (Inda Selassie)">Shire (Inda Selassie)</option>
      <option value="Ambo">Ambo</option>
      <option value="Arsi Negele">Arsi Negele</option>
  <option value="Axum">Axum</option>
      <option value="Gambela">Gambela</option>
  <option value="Bale Robe">Bale Robe</option>
      <option value="Butajira">Butajira</option>
      <option value="Ziway">Ziway</option>
  <option value="Adwa">Adwa</option>
      <option value="Areka">Areka</option>
      <option value="Yirgalem">Yirgalem</option>
  <option value="Woliso">Woliso</option>
      <option value="Welkite">Welkite</option>
      <option value="Gode">Gode</option>
  <option value="Meki">Meki</option>
      <option value="Negele Borana">Negele Borana</option>
      <option value="Alaba Kulito">Alaba Kulito</option>
  <option value="Alamata">Alamata</option>
      <option value="Chiro">Chiro</option>
      <option value="Tepi">Tepi</option>
  <option value="Durame">Durame</option>
      <option value="Goba">Goba</option>
      <option value="Assosa">Assosa</option>
  <option value="Boditi">Boditi</option>
      <option value="Gimbi">Gimbi</option>
      <option value="Wukro">Wukro</option>
  <option value="Alemaya">Alemaya</option>
      <option value="Mizan Teferi">Mizan Teferi</option>
  <option value="Sawla">Sawla</option>
      <option value="Modjo">Modjo</option>
      <option value="Dembi Dolo">Dembi Dolo</option>
  <option value="Aleta Wendo">Aleta Wendo</option>
      <option value="Metu">Metu</option>
      <option value="Mota">Mota</option>
  <option value="Fiche">Fiche</option>
      <option value="Finote Selam">Finote Selam</option>
      <option value="Bule Hora Town">Bule Hora Town</option>
  <option value="Bonga">Bonga</option>
      <option value="Kobo">Kobo</option>
      <option value="Jinka">Jinka</option>
      <option value="Dangila">Dangila</option>
  <option value="Degehabur">Degehabur</option>
      <option value="Wolaita Dimtu">Wolaita Dimtu</option>
      <option value="Agaro">Agaro</option>
      <option value="0">Enter Your City</option>
</select>

</td>
  </tr>
</table>



<table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
                    <tr>
                        <td>
                  
     <input class="input2" id="input2" name="ye" hidden="hidden" placeholder="input data">

 <select class="input form-control" onchange="selectionb()" name=year id=year  style=" border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;" >
	<option value='' disabled selected hidden >
  Production Year(የተሰራበት ዘመን)
  </option>

  <option value="2013">2013 E.C</option>
      <option value="2012">2012 E.C</option>
      <option value="2011">2011 E.C</option>
  <option value="2010">2010 E.C</option>
      <option value="2009"> 2009 E.C</option>
      <option value="2008"> 2008 E.C</option>
  <option value="2007"> 2007 E.C</option>
      <option value="2006"> 2006 E.C</option>
      <option value="2005"> 2005 E.C</option>
  <option value="2004"> 2004 E.C</option>
      <option value="2003">	2003 E.C</option>
      <option value="2002">2002 E.C</option>
      <option value="2001">2001 E.C</option>
  <option value="2000">2000 E.C</option>
      <option value="1999"> 1999 E.C</option>
      <option value="1998"> 1998 E.C</option>
  <option value="1997"> 1997 E.C</option>
      <option value="1996"> 1996 E.C</option>
      <option value="1995"> 1995 E.C</option>
  <option value="1994"> 1994 E.C</option>
      <option value="1993">	1993 E.C</option>
      <option value="1992">1992 E.C</option>
      <option value="1991">1991 E.C</option>
  <option value="1990">1990 E.C</option>
      <option value="1989"> 1989 E.C</option>
      <option value="1988"> 1988 E.C</option>
      <option value="1987"> 1987 E.C</option>
      <option value="1986"> 1986 E.C</option>
      <option value="1985"> 1985 E.C</option>
      <option value="1984"> 1984 E.C</option>
      <option value="1983">	1983 E.C</option>
      <option value="1982"> 1982 E.C</option>
      <option value="1981"> 1981 E.C</option>
      <option value="1980"> 1980 E.C</option>
      <option value="1979"> 1979 E.C</option>
      <option value="1978"> 1978 E.C</option>
      <option value="1977"> 1977 E.C</option>
      <option value="1976"> 1976 E.C</option>
      <option value="1975"> 1975 E.C</option>
      <option value="1974"> 1974 E.C</option>
      <option value="1973">	1973 E.C</option>
      <option value="1972"> 1972 E.C</option>
      <option value="1971"> 1971 E.C</option>
      <option value="1970"> 1970 E.C</option>
      <option value="1969"> 1969 E.C</option>
      <option value="1968"> 1968 E.C</option>
      <option value="1967"> 1967 E.C</option>
      <option value="1966"> 1966 E.C</option>
      <option value="1965"> 1965 E.C</option>
      <option value="1964"> 1964 E.C</option>
      <option value="1963">	1963 E.C</option>
      <option value="1962"> 1962 E.C</option>
      <option value="1961"> 1961 E.C</option>
      <option value="1960"> 1960 E.C</option>
      <option value="1959"> 1959 E.C</option>
      <option value="1958"> 1958 E.C</option>
      <option value="1957"> 1957 E.C</option>
      <option value="1956"> 1956 E.C</option>
      <option value="1955"> 1955 E.C</option>
      <option value="1954"> 1954 E.C</option>
      <option value="1953">	1953 E.C</option>
      <option value="1952"> 1952 E.C</option>
      <option value="1951"> 1951 E.C</option>
      <option value="1950"> 1950 E.C</option>

      <option value="0">Enter Your Own</option>
</select>


</td>
  </tr>
</table>

            <input class="input form-control" type="text" name="hours" placeholder="Hours (km)/የተነዳበት ሰዓት(ኪ.ሜ)" style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;"/>
            <input class="input form-control" type="text" name="weight" placeholder="Overall Weight(አጠቃላይ ክብደቱ)" style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;"/>
            
            

            
<table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
                    <tr>
                        <td>
                  
     <input class="input2" id="input3" name="fu" hidden="hidden" placeholder="input data">
            <select class="input form-control" onchange="selectionc()" name=fule id=fule style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;" >
	<option value='' disabled selected hidden>
  Fuel/የነዳጅ አይነት
  </option>

  <option value="Gasoline">Gasoline/ቤንዚን </option>
      <option value="Diesel">Diesel/ናፍጣ</option>
      <option value="0">Enter Your Own</option>
</select>
</td>
  </tr>
</table>



            
<table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
                    <tr>
                        <td>
                  
     <input class="input2" id="input4" hidden="hidden" name="cyl" placeholder="input data">
            <select class="input form-control" onchange="selectiond()" name=cylinder id=cylinder style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;" >
	<option value='' disabled selected hidden>
  Cylinder/የስሊንደር ብዛት
  </option>

  <option value="4">4 </option>
      <option value="6">6</option>
      <option value="8">8</option>
      <option value="0">Enter Your Own</option>
</select>
</td>
  </tr>
</table>

            
<table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
                    <tr>
                        <td>
                  
     <input class="input2" id="input5" hidden="hidden" name="tra" placeholder="input data">

            <select class="input form-control" onchange="selectione()" name=transmission id=transmission style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;" >
	<option value='' disabled selected hidden>
  Transmission/የአስተላላፊ አይነት
  </option>

  <option value="Manual">Manual </option>
      <option value="Automatic">Automatic</option>
      <option value="Hydraulic">Hydraulic</option>
      <option value="Semi Automatic">Semi Automatic</option>
      <option value="0">Enter Your Own</option>
</select>
</td>
  </tr>
</table>

            
<table class="input form-control" style="border-radius: 10px; box-shadow: 10px 5px 5px #6db9ef;" >
                    
                    <tr>
                        <td>
                  
     <input class="input2" id="input6" name="col" hidden="hidden" placeholder="input data">
            <select class="input form-control" onchange="selectionf()" name=color id=color style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;" >
	<option value='' disabled selected hidden>
  Color/ ቀለም
  </option>

      <option value="Yellow">Yellow </option>
      <option value="Red">Red</option>
      <option value="Black">Black</option>
      <option value="White">White</option>
      <option value="Gray">Gray</option>
      <option value="Green">Green</option>
      <option value="Violet">Violet</option>
      <option value="Orange">Orange</option>
      <option value="Purple">Purple</option>
      <option value="Pink">Pink</option>
      <option value="0">Enter Your Own</option>
</select>
</td>
  </tr>
</table>


          <input class="input form-control" type="text" name="cc" 
            placeholder="Engine capacity(cc)የሞተር ችሎታ (ሲሲ)"
             style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;"/>

            <input class="input form-control" type="text" name="price" 
            placeholder="Price per Day not including Vat(የቀን ዋጋው ቫትን ሳይጨምር)"
             style="border-radius: 45px; box-shadow: 10px 5px 5px #6db9ef;"/>

            
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
    <h2 class="text-center white b-gray w-100"><span class="gold ">ማከራየት</span>  ሚፈልጉትን መኪና በ 3 መንገድ ያከራዩ</h2>
    <!--Step by step instruction to inform car owner our 3-step process -->
    <div class="row white justify-content-center py-0">
      <div class="rectangle b-l-gray">
        <div class="button-sell badge badge-warning white">በ ዌብ-ሳይት (WEBSITE)</div>
        <p class="w-80"><u><a href="">መረጃዎን ለማሰገባት እዚጋ ይንኩ</a></u></p>
        <p class="mx-2 text-left d-md-block d-none">መረጃዎን ያስገቡ.<br> በፍጥነት ፈላጊ እናገናኞታለን.</p>
      </div>
      <div class="rectangle b-l-gray">
        <div class="button-sell badge badge-warning white">በ ቴሌ-ግራም (TELEGRAM)</div>
        <p class="w-80"><u><a href="">የቴሌ-ግራም CHANNEL ለመቀላቀል እዚጋ ይንኩ</a></u></p>
        <p class="mx-2 text-left d-md-block d-none">መረጃዎን በቴሌ-ግራም ከላኩልን<br> በፍጥነት ፈላጊ እናገናኞታለን</p>
      </div>
      <div class="rectangle b-l-gray ">
        <div class="button-sell badge badge-warning white">በ አካል (IN PERSON)</div>
        <p class="w-80"><u>0966337163 (0930104785) በዚ ሰልክ ይደውሉልን</u></p>
        <p class="mx-2 text-left d-md-block d-none"> <br>ያግኙን በፍጥነት ፈላጊ እናገናኞታለን </p>
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
