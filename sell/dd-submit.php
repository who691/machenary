<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Try</title>
</head>

<body>
<?Php
error_reporting(0);// With this no error reporting will be there

 $conn=mysqli_connect('localhost','root','','machinery');

if (isset( $_POST['submit']))
{
   $absection= $_POST['absection'];
   $typ= $_POST['typ'];
   $sub_category= $_POST['sub-category']; 
   $sup_category= $_POST['sup-category'];
   $semi_category= $_POST['semi-category'];
   $condition= $_POST['condition'];
   $loc= $_POST['loc'];
   $location= $_POST['location'];  
   $ye= $_POST['ye'];
   $year= $_POST['year'];
   $hours= $_POST['hours'];
   $weight= $_POST['weight'];
   $fu= $_POST['fu'];
   $fule= $_POST['fule'];
   $cyl= $_POST['cyl'];
   $cylinder= $_POST['cylinder'];
   $tra= $_POST['tra'];
   $transmission= $_POST['transmission'];
   $col= $_POST['col'];
   $color= $_POST['color'];
   $cc= $_POST['cc'];
   $price= $_POST['price'];
   $number= $_POST['number'];

   $image=addslashes( $_FILES['image']['tmp_name']);
   $imagename=addslashes( $_FILES['image']['name']);
   $image=file_get_contents( $image);
   $image=base64_encode( $image);

 
 
  if(  $absection==1){

 if( $sub_category==1){

 if( $sup_category==1){
  $absection="Construction Machinery";
  $sub_category="Asphalt Burner";
  $sup_category="ZoomLine";

  }

  elseif ( $sup_category==2) {
  $absection="Construction Machinery";
  $sub_category="Asphalt Burner";
  $sup_category="Vulcan";
                        }
  elseif ( $sup_category==3) {
  $absection="Construction Machinery";
  $sub_category="Asphalt Burner";
  $sup_category="Diesel Burner";
                    }
  elseif ( $sup_category==4) {
  $absection="Construction Machinery";
  $sub_category="Asphalt Burner";
  $sup_category="Other";
               }
  }


  elseif ( $sub_category==2) {
 if( $sup_category==5){
   $absection="Construction Machinery";
   $sub_category="Asphalt Distributer";
   $sup_category="XCMG";
  }
  elseif ( $sup_category==6) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Distributer";
   $sup_category="JAC";
  }
  elseif ( $sup_category==7) {
   $absection="Construction Machinery";
  $sub_category="Asphalt Distributer";
   $sup_category="Lee Boy";
  }
  elseif ( $sup_category==8) {
   $absection="Construction Machinery";
  $sub_category="Asphalt Distributer";
   $sup_category="Other";
  }
  }


  elseif ( $sub_category==3) {
 if( $sup_category==9){
   $absection="Construction Machinery";
   $sub_category="Asphalt Power/paver machine";
   $sup_category="Roller Screed Pavers";
  }
  elseif ( $sup_category==10) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Power/paver machine";
   $sup_category="Tracked Pavers";
  }
  elseif ( $sup_category==11) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Power/paver machine";
   $sup_category="Wheeled Pavers";
  }
  elseif ( $sup_category==12) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Power/paver machine";
   $sup_category="Other";
   }
   }


 elseif ( $sub_category==4) {
 if( $sup_category==13){
   $absection="Construction Machinery";
   $sub_category="Asphalt Sprayer";
   $sup_category="Hand Type";
  }
 elseif ( $sup_category==14) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Sprayer";
   $sup_category="Air Type";
 }
 elseif ( $sup_category==15) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Sprayer";
   $sup_category="Seal Coat";
 }
 elseif ( $sup_category==16) {
   $absection="Construction Machinery";
   $sub_category="Asphalt Sprayer";
   $sup_category="Other";
 }
 }


 elseif ( $sub_category==5) {
if( $sup_category==17){
   $absection="Construction Machinery";
 $sub_category="Concert Concert Vibrator";
   $sup_category="Minnich";
 }
 elseif ( $sup_category==18) {
   $absection="Construction Machinery";
 $sub_category="Concert Concert Vibrator";
   $sup_category="Makita";
 }
 elseif ( $sup_category==19) {
   $absection="Construction Machinery";
   $sub_category="Concert Concert Vibrator";
   $sup_category="Zogo";
 }
 elseif ( $sup_category==20) {
   $absection="Construction Machinery";
  $sub_category="Concert Concert Vibrator";
   $sup_category="Other";
 }
 }


 elseif ( $sub_category==6) {
 if ( $sup_category==21) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="Gidetti";
 }
 elseif ( $sup_category==22) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="Sandvik";
 }
 elseif( $sup_category==23){
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Fabo";
 }
 elseif ( $sup_category==24) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="O.L.F";
 }
 elseif ( $sup_category==25) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Kormann";
 }
 elseif ( $sup_category==26) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="ARAJES";
 }
 elseif( $sup_category==27){
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="KLEEKMANN";
 }
 elseif ( $sup_category==28) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Terex";
 }
 elseif ( $sup_category==29) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="Powerscreen";
 }
 elseif ( $sup_category==30) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="RM";
 }
 elseif ( $sup_category==31) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Metso";
 }
 elseif ( $sup_category==32) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="KPI-JCI";
 }
 elseif( $sup_category==33){
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Tenova";
 }
 elseif ( $sup_category==34) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="Mecru";
 }
 elseif ( $sup_category==35) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Luoyang Luoyang";
 }
 elseif ( $sup_category==36) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="Soyu";
 }
 elseif( $sup_category==37){
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="MulMtione";
 }
 elseif ( $sup_category==38) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="HXJQ";
 }
 elseif ( $sup_category==39) {
   $absection="Construction Machinery";
   $sub_category="Crusher";
   $sup_category="Constmach";
 }
 elseif ( $sup_category==40) {
   $absection="Construction Machinery";
  $sub_category="Crusher";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==7) {
 if ( $sup_category==41) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Cat";
 }
 elseif ( $sup_category==42) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="ITR";
 }
 elseif( $sup_category==43){
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="SHANTUI";
 }
 elseif ( $sup_category==44) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Komatsu";
 }
 elseif ( $sup_category==45) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="John Deere";
 }
 elseif ( $sup_category==46) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="SEM";
 }
 elseif( $sup_category==47){
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Case";
 }
 elseif ( $sup_category==48) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Liebherr";
 }
 elseif ( $sup_category==49) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="XCMG";
 }
 elseif ( $sup_category==50) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Liu Gong";
 }
 elseif ( $sup_category==51) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Bell";
 }
 elseif ( $sup_category==52) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="XGMA";
 }
 elseif( $sup_category==53){
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Topway";
 }
 elseif ( $sup_category==54) {
   $absection="Construction Machinery";
  $sub_category="Dozer";
   $sup_category="Sandvik";
 }
 elseif ( $sup_category==55) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Zoomlion";
 }
 elseif ( $sup_category==56) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Sany";
 }
 elseif( $sup_category==57){
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Matador";
 }
 elseif ( $sup_category==58) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Vostosun";
 }
 elseif ( $sup_category==59) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="Yishan";
 }
 elseif ( $sup_category==60) {
   $absection="Construction Machinery";
  $sub_category="Dozer";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==8) {
 if ( $sup_category==61) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Sinotruck";
 }
 elseif ( $sup_category==62) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Iveco";
 }
 elseif( $sup_category==63){
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Nissan Diesel";
 }
 elseif ( $sup_category==64) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="UD";
 }
 elseif ( $sup_category==65) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Shacman";
 }
 elseif ( $sup_category==66) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Man";
 }
 elseif( $sup_category==67){
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Fuso";
 }
 elseif ( $sup_category==68) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Fait";
 }
 elseif ( $sup_category==69) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Scania";
 }
 elseif ( $sup_category==70) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Foton";
 }
 elseif ( $sup_category==71) {
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="JAC";
 }
 elseif ( $sup_category==72) {
   $absection="Construction Machinery";
   $sub_category="Dozer";
   $sup_category="DFM";
 }
 elseif( $sup_category==73){
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="kamaz";
 }
 elseif ( $sup_category==74) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Faw";
 }
 elseif ( $sup_category==75) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="XCMG";
 }
 elseif ( $sup_category==76) {
   $absection="Construction Machinery";
 $sub_category="Dump Truck";
   $sup_category="Mahindra Blazo";
 }
 elseif( $sup_category==77){
   $absection="Construction Machinery";
   $sub_category="Dump Truck";
   $sup_category="Volvo";
 }
 elseif ( $sup_category==78) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Isuzu";
 }
 elseif ( $sup_category==79) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Hino";
 }
 elseif ( $sup_category==80) {
   $absection="Construction Machinery";
  $sub_category="Dump Truck";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==9) {
 if ( $sup_category==81) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Caterpillar(cat)";
 }
 elseif ( $sup_category==82) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Case";
 }
 elseif( $sup_category==83){
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Doosan";
 }
 elseif ( $sup_category==84) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Hitachi";
 }
 elseif ( $sup_category==85) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Hyundai";
 }
 elseif ( $sup_category==86) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="JCB";
 }
 elseif( $sup_category==87){
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="John Deere";
 }
 elseif ( $sup_category==88) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Kobelco";
 }
 elseif ( $sup_category==89) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Komatsu";
 }
 elseif ( $sup_category==90) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Liebherr";
 }
 elseif ( $sup_category==91) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Sany";
 }
 elseif ( $sup_category==92) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="SDLG";
 }
 elseif( $sup_category==93){
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Takeuchi";
 }
 elseif ( $sup_category==94) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Faw";
 }
 elseif ( $sup_category==95) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="XCMG";
 }
 elseif ( $sup_category==96) {
   $absection="Construction Machinery";
  $sub_category="Excavator";
   $sup_category="Volvo";
 }
 elseif( $sup_category==97){
   $absection="Construction Machinery";
 $sub_category="Excavator";
   $sup_category="Liu gong";
 }
 elseif ( $sup_category==98) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Can Max";
 }
 elseif ( $sup_category==99) {
   $absection="Construction Machinery";
 $sub_category="Excavator";
   $sup_category="Toros";
 }
 elseif ( $sup_category==100) {
   $absection="Construction Machinery";
   $sub_category="Excavator";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==10) {

 if ( $sup_category==101) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="JCB";
 }
 elseif ( $sup_category==102) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Cat";
 }
 elseif ( $sup_category==103) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Komatsu";
 }
 elseif ( $sup_category==104) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Hyundai";
 }
 elseif ( $sup_category==105) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="XCMG";
 }
 elseif ( $sup_category==106) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Hercules";
 }
 elseif ( $sup_category==107) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Chinzen";
 }
 elseif ( $sup_category==108) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="LiuGong";
 }
 elseif ( $sup_category==109) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Hitachi";
 }
 elseif ( $sup_category==110) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Sany";
 }
 elseif ( $sup_category==111) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Sandvik";
 }
 elseif ( $sup_category==112) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Zoomlion";
 }
 elseif ( $sup_category==113) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Probst";
 }
 elseif ( $sup_category==114) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Avant";
 }
 elseif ( $sup_category==115) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Rhinoceros";
 }
 elseif ( $sup_category==116) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Lovol";
 }
 elseif ( $sup_category==117) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Doosan";
 }
 elseif ( $sup_category==118) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Epiroc";
 }
 elseif ( $sup_category==119) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Volvo";
 }
 elseif ( $sup_category==120) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="New Holland";
 }
 elseif ( $sup_category==121) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Case";
 }
 elseif ( $sup_category==122) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Bell";
 }
 elseif ( $sup_category==123) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="SHANTUI";
 }
 elseif ( $sup_category==124) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Liebherr";
 }
 elseif ( $sup_category==125) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Lonking";
 }
 elseif ( $sup_category==126) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="SEM";
 }
 elseif ( $sup_category==127) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Dressta";
 }
 elseif ( $sup_category==128) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Escort";
 }
 elseif ( $sup_category==129) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="XGMA";
 }
 elseif ( $sup_category==130) {
   $absection="Construction Machinery";
 $sub_category="Loader";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==11) {
 if ( $sup_category==131) {
   $absection="Construction Machinery";
   $sub_category="Roller";
   $sup_category="XCMG";
 }
 elseif ( $sup_category==132) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Sany";
 }
 elseif ( $sup_category==133) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Dyna Pac";
 }
 elseif ( $sup_category==134) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Bomag";
 }
 elseif ( $sup_category==135) {
   $absection="Construction Machinery";
   $sub_category="Roller";
   $sup_category="Komatsu";
 }
 elseif ( $sup_category==136) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="HAMM";
 }
 elseif ( $sup_category==137) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="GRW";
 }
 elseif ( $sup_category==138) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Atlas Waycor";
 }
 elseif ( $sup_category==139) {
   $absection="Construction Machinery";
   $sub_category="Roller";
   $sup_category="Cat";
 }
 elseif ( $sup_category==140) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Volvo";
 }
 elseif ( $sup_category==141) {
   $absection="Construction Machinery";
   $sub_category="Roller";
   $sup_category="Hyundai";
 }
 elseif ( $sup_category==142) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Sakai";
 }
 elseif ( $sup_category==143) {
   $absection="Construction Machinery";
   $sub_category="Roller";
   $sup_category="Wacker Neuson";
 }
 elseif ( $sup_category==144) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Ammann";
 }
 elseif ( $sup_category==145) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Ingersoll";
 }
 elseif ( $sup_category==146) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Sicom";
 }
 elseif ( $sup_category==147) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Bitelli";
 }
 elseif ( $sup_category==148) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="LiuGong";
 }
 elseif ( $sup_category==149) {
   $absection="Construction Machinery";
   $sub_category="Roller";
   $sup_category="SEM";
 }
 elseif ( $sup_category==150) {
   $absection="Construction Machinery";
 $sub_category="Roller";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==12) {
 if ( $sup_category==151) {
   $absection="Construction Machinery";
 $sub_category="Grader";
   $sup_category="Sany";
 }
 elseif ( $sup_category==152) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Cat";
 }
 elseif ( $sup_category==153) {
   $absection="Construction Machinery";
 $sub_category="Grader";
   $sup_category="Probst";
 }
 elseif ( $sup_category==154) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Hyundai";
 }
 elseif ( $sup_category==155) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="XCMG";
 }
 elseif ( $sup_category==156) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Komatsu";
 }
 elseif ( $sup_category==157) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Case";
 }
 elseif ( $sup_category==158) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="LiuGong";
 }
 elseif ( $sup_category==159) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Hitachi";
 }
 elseif ( $sup_category==160) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="SHANTUI";
 }
 elseif ( $sup_category==161) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Bell";
 }
 elseif ( $sup_category==162) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="XGMA";
 }
 elseif ( $sup_category==163) {
   $absection="Construction Machinery";
 $sub_category="Grader";
   $sup_category="Paus";
 }
 elseif ( $sup_category==164) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="LeeBoy";
 }
 elseif ( $sup_category==165) {
   $absection="Construction Machinery";
 $sub_category="Grader";
   $sup_category="Bobcat";
 }
 elseif ( $sup_category==166) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Topway";
 }
 elseif ( $sup_category==167) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="GS";
 }
 elseif ( $sup_category==168) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Hidromek";
 }
 elseif ( $sup_category==169) {
   $absection="Construction Machinery";
   $sub_category="Grader";
   $sup_category="Volvo Grader";
 }
 elseif ( $sup_category==170) {
   $absection="Construction Machinery";
 $sub_category="Grader";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==13) {

 if ( $sup_category==171) {
   $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Sandvik";
 }

 elseif ( $sup_category==172) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Soosan";
 }
 elseif ( $sup_category==173) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Hydra";
 }
 elseif ( $sup_category==174) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Multion";
 }
 elseif ( $sup_category==175) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Normet";
 }
 elseif ( $sup_category==176) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Baitai";
 }
 elseif ( $sup_category==177) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Hyundai";
 }
 elseif ( $sup_category==178) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Volvo";
 }
 elseif ( $sup_category==179) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="New Holland";
 }
 elseif ( $sup_category==180) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Komatsu";
 }
 elseif ( $sup_category==181) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Stanley";
 }
 elseif ( $sup_category==182) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Furukawe";
 }
 elseif ( $sup_category==183) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Arden";
 }
 elseif ( $sup_category==184) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Oktech";
 }
 elseif ( $sup_category==185) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Arrow Head";
 }
 elseif ( $sup_category==186) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Bob Cat";
 }
 elseif ( $sup_category==187) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Montabert";
 }
 elseif ( $sup_category==188) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="D and A";
 }
 elseif ( $sup_category==189) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Socma";
 }
 elseif ( $sup_category==190) {
 $absection="Construction Machinery";
 $sub_category="Jack Hammer";
   $sup_category="Other";
 }

 }


 elseif ( $sub_category==14) {
 if ( $sup_category==191) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Fabo";
   }
 elseif ( $sup_category==192) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Sany";
   }
 elseif ( $sup_category==193) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Ammann";
   }
 elseif ( $sup_category==194) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Zoomlion";
   }
 elseif ( $sup_category==195) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Carmax";
   }
 elseif ( $sup_category==196) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Meka";
   }
 elseif ( $sup_category==197) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Em euromecc";
   }
 elseif ( $sup_category==198) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="CIFA";
   }
 elseif ( $sup_category==199) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Sumab";
   }
 elseif ( $sup_category==200) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="TTC";
   }
 elseif ( $sup_category==201) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Constmach";
   }
 elseif ( $sup_category==202) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Guris";
   }
 elseif ( $sup_category==203) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Elkon";
   }
 elseif ( $sup_category==204) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Semix";
   }
 elseif ( $sup_category==205) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="BHS";
   }
 elseif ( $sup_category==206) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Prensloland";
   }
 elseif ( $sup_category==207) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Promax";
   }
 elseif ( $sup_category==208) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="LiuGong";
   }
 elseif ( $sup_category==209) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Liebherr";
   }
 elseif ( $sup_category==210) {
   $absection="Construction Machinery";
   $sub_category="Mobile Concrete Batching Plant";
     $sup_category="Other";
   }

 }


 elseif ( $sub_category==15) {
 if ( $sup_category==211) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Scaffco";
   }
 elseif ( $sup_category==212) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="CETA";
   }
 elseif ( $sup_category==213) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Pilosio";
   }
 elseif ( $sup_category==214) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Zarges";
   }
 elseif ( $sup_category==215) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Peri";
   }
 elseif ( $sup_category==216) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Mavi";
   }
 elseif ( $sup_category==217) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Faresin";
   }
 elseif ( $sup_category==218) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Hunnerback";
   }
 elseif ( $sup_category==219) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Elbe";
   }
 elseif ( $sup_category==220) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Accesus";
   }
 elseif ( $sup_category==221) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Paschal";
   }
 elseif ( $sup_category==222) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="RMD";
   }
 elseif ( $sup_category==223) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Absyapl";
   }
 elseif ( $sup_category==224) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Jean Four";
   }
 elseif ( $sup_category==225) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Ozler";
   }
 elseif ( $sup_category==226) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="SEM";
   }
 elseif ( $sup_category==227) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Dressta";
   }
 elseif ( $sup_category==228) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Escort";
   }
 elseif ( $sup_category==229) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="XGMA";
   }
 elseif ( $sup_category==230) {
   $absection="Construction Machinery";
   $sub_category="Scaffolding";
     $sup_category="Other";
   }

 }


 elseif ( $sub_category==16) {
 if ( $sup_category==231) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Tinius Olsen";
   }
 elseif ( $sup_category==232) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Walter Bai";
   }
 elseif ( $sup_category==233) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Zmtestmak";
   }
 elseif ( $sup_category==234) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Apageo";
   }
 elseif ( $sup_category==235) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Humbolt";
   }
 elseif ( $sup_category==236) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Roots";
   }
 elseif ( $sup_category==237) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Eralytics";
   }
 elseif ( $sup_category==238) {
   $absection="Construction Machinery";
 $sub_category="Soil Testing Equipment";
     $sup_category="Other";
   }

 }


 elseif ( $sub_category==17) {
 if ( $sup_category==239) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="ZOOMLION";
   }
 elseif ( $sup_category==240) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="XCMG";
   }
 elseif ( $sup_category==241) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="SANY";
   }
 elseif ( $sup_category==242) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="LEEBHERR";
   }
 elseif ( $sup_category==243) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="WHICHMAN";
   }
 elseif ( $sup_category==244) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="POTAIN";
   }
 elseif ( $sup_category==245) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="TAVOL";
   }
 elseif ( $sup_category==246) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="SHD";
   }
 elseif ( $sup_category==247) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="XJCM";
   }
 elseif ( $sup_category==248) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="QTZ";
   }
 elseif ( $sup_category==249) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="SYM";
   }
 elseif ( $sup_category==250) {
   $absection="Construction Machinery";
 $sub_category="Tower Crane/Telescopic Crane";
     $sup_category="Other";
   }

 }


 elseif ( $sub_category==18) {
 if ( $sup_category==251) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Leica";
   }
 elseif ( $sup_category==252) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Geomax";
   }
 elseif ( $sup_category==253) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Hexagon";
   }
 elseif ( $sup_category==254) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Satlab";
   }
 elseif ( $sup_category==255) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Hi Target";
   }
 elseif ( $sup_category==256) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Chcnav";
   }
 elseif ( $sup_category==257) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Survey";
   }
 elseif ( $sup_category==258) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Topcon";
   }
 elseif ( $sup_category==259) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Trimble";
   }
 elseif ( $sup_category==260) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Sokkia";
   }
 elseif ( $sup_category==261) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Pentax";
   }
 elseif ( $sup_category==262) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Spectra";
   }
 elseif ( $sup_category==263) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="South";
   }
 elseif ( $sup_category==264) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Stonex";
   }
 elseif ( $sup_category==265) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Capital Instrument";
   }
 elseif ( $sup_category==266) {
   $absection="Construction Machinery";
   $sub_category="Survey Equipment";
    $sup_category="Other";
   }

 }


 elseif ( $sub_category==19) {
 if ( $sup_category==267) {
   $absection="Construction Machinery";
   $sub_category="Rock Drilling Machine";
    $sup_category="Top Hammer Drilling";
   }
 elseif ( $sup_category==268) {
   $absection="Construction Machinery";
   $sub_category="Rock Drilling Machine";
    $sup_category="Down The Hole Drilling";
   }
 elseif ( $sup_category==269) {
   $absection="Construction Machinery";
   $sub_category="Rock Drilling Machine";
    $sup_category="Rotary Drilling";
   }
 elseif ( $sup_category==270) {
   $absection="Construction Machinery";
   $sub_category="Rock Drilling Machine";
    $sup_category="Other";
   }

 }


 elseif ( $sub_category==20) {
 if ( $sup_category==271) {
   $absection="Construction Machinery";
   $sub_category="Other";
    $sup_category="Send Us The File";
   }
 }

 }
  





 else if(  $absection==2){
      if( $sub_category==21){
        if ( $sup_category==272) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Case";
           }
         elseif ( $sup_category==273) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="New Holland";
           }
         elseif ( $sup_category==274) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Merlo";
           }
         elseif ( $sup_category==275) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="John Deere";
           }
         elseif ( $sup_category==276) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Challenger";
           }
         elseif ( $sup_category==277) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="CAT";
           }
         elseif ( $sup_category==278) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="YTO";
           }
         elseif ( $sup_category==279) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Landini";
           }
         elseif ( $sup_category==280) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==281) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==282) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==283) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==284) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==285) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==286) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="DT";
           }
         elseif ( $sup_category==287) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==288) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==289) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==290) {
           $absection="Farm Machinery";
         $sub_category="Tractors";
            $sup_category="Other";
           }

       }
     
    
      


       elseif ( $sub_category==22) {

        if ( $sup_category==291) {
           $absection="Farm Machinery";
         $sub_category="Combiners";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==292) {
           $absection="Farm Machinery";
         $sub_category="Combiners";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==293) {
           $absection="Farm Machinery";
         $sub_category="Combiners";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==294) {
           $absection="Farm Machinery";
         $sub_category="Combiners";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==295) {
           $absection="Farm Machinery";
         $sub_category="Combiners";
            $sup_category="Other";
           }
       }


       elseif ( $sub_category==23) {
        if ( $sup_category==296) {
           $absection="Farm Machinery";
           $sub_category="Harvesters";
            $sup_category="DT";
           }
         elseif ( $sup_category==297) {
           $absection="Farm Machinery";
           $sub_category="Harvesters";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==298) {
           $absection="Farm Machinery";
           $sub_category="Harvesters";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==299) {
           $absection="Farm Machinery";
         $sub_category="Harvesters";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==300) {
           $absection="Farm Machinery";
           $sub_category="Harvesters";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==24) {
        if ( $sup_category==301) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==302) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==303) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==304) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==305) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==306) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==307) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==308) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==309) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==310) {
           $absection="Farm Machinery";
         $sub_category="Irrigation  Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==25) {
        if ( $sup_category==311) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==312) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==313) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==314) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==315) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==316) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==317) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==318) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==319) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==320) {
           $absection="Farm Machinery";
         $sub_category="Tillage  Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==26) {
     
        if ( $sup_category==321) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==322) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==323) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==324) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==325) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==326) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==327) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==328) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==329) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==330) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==27) {
        if ( $sup_category==331) {
           $absection="Farm Machinery";
         $sub_category="Post Harvest Machinery";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==332) {
           $absection="Farm Machinery";
           $sub_category="Post Harvest Machinery";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==333) {
           $absection="Farm Machinery";
         $sub_category="Post Harvest Machinery";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==334) {
           $absection="Farm Machinery";
           $sub_category="Planting  Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==335) {
           $absection="Farm Machinery";
           $sub_category="Post Harvest Machinery";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==336) {
           $absection="Farm Machinery";
         $sub_category="Post Harvest Machinery";
            $sup_category="DT";
           }
         elseif ( $sup_category==337) {
           $absection="Farm Machinery";
         $sub_category="Post Harvest Machinery";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==338) {
           $absection="Farm Machinery";
         $sub_category="Post Harvest Machinery";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==339) {
           $absection="Farm Machinery";
           $sub_category="Post Harvest Machinery";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==340) {
           $absection="Farm Machinery";
           $sub_category="Post Harvest Machinery";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==28) {
        if ( $sup_category==341) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==342) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==343) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==344) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==345) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==346) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==347) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==348) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==349) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==350) {
           $absection="Farm Machinery";
           $sub_category="Potato Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==29) { 
        if ( $sup_category==351) {
           $absection="Farm Machinery";
         $sub_category="Live Stock Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==352) {
           $absection="Farm Machinery";
         $sub_category="Live Stock Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==353) {
           $absection="Farm Machinery";
           $sub_category="Live Stock Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==354) {
           $absection="Farm Machinery";
         $sub_category="Live Stock Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==355) {
           $absection="Farm Machinery";
         $sub_category="Live Stock Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==356) {
           $absection="Farm Machinery";
           $sub_category="Live Stock Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==357) {
           $absection="Farm Machinery";
         $sub_category="Live Stock Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==358) {
           $absection="Farm Machinery";
           $sub_category="Live Stock Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==359) {
           $absection="Farm Machinery";
           $sub_category="Live Stock Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==360) {
           $absection="Farm Machinery";
         $sub_category="Live Stock Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==30) {
        if ( $sup_category==361) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==362) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==363) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==364) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==365) {
           $absection="Farm Machinery";
         $sub_category="Garden Machinery";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==366) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="DT";
           }
         elseif ( $sup_category==367) {
           $absection="Farm Machinery";
         $sub_category="Garden Machinery";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==368) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==369) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==370) {
           $absection="Farm Machinery";
           $sub_category="Garden Machinery";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==31) {
        if ( $sup_category==371) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==372) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==373) {
           $absection="Farm Machinery";
         $sub_category="Forestry Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==374) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==375) {
           $absection="Farm Machinery";
         $sub_category="Forestry Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==376) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==377) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==378) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==379) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==380) {
           $absection="Farm Machinery";
           $sub_category="Forestry Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==32) {
        if ( $sup_category==381) {
           $absection="Farm Machinery";
         $sub_category="Ploughs";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==382) {
           $absection="Farm Machinery";
           $sub_category="Ploughs";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==383) {
           $absection="Farm Machinery";
           $sub_category="Ploughs";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==384) {
           $absection="Farm Machinery";
         $sub_category="Ploughs";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==385) {
           $absection="Farm Machinery";
           $sub_category="Ploughs";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==386) {
           $absection="Farm Machinery";
           $sub_category="Ploughs";
            $sup_category="DT";
           }
         elseif ( $sup_category==387) {
           $absection="Farm Machinery";
         $sub_category="Ploughs";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==388) {
           $absection="Farm Machinery";
           $sub_category="Ploughs";
            $sup_category="VERSATILE";
           }
        elseif ( $sup_category==399) { 
         $absection="Farm Machinery";
         $sub_category="Ploughs";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==390) {
           $absection="Farm Machinery";
           $sub_category="Ploughs";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==33) {
        if ( $sup_category==391) {
           $absection="Farm Machinery";
         $sub_category="Harrows";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==392) {
           $absection="Farm Machinery";
           $sub_category="Harrows";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==393) {
           $absection="Farm Machinery";
           $sub_category="Harrows";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==394) {
           $absection="Farm Machinery";
           $sub_category="Harrows";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==395) {
           $absection="Farm Machinery";
           $sub_category="Harrows";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==396) {
           $absection="Farm Machinery";
         $sub_category="Harrows";
            $sup_category="DT";
           }
         elseif ( $sup_category==397) {
           $absection="Farm Machinery";
         $sub_category="Harrows";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==398) {
           $absection="Farm Machinery";
         $sub_category="Harrows";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==399) {
           $absection="Farm Machinery";
         $sub_category="Harrows";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==400) {
           $absection="Farm Machinery";
           $sub_category="Harrows";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==34) {
       
        if ( $sup_category==401) {
           $absection="Farm Machinery";
           $sub_category="Cultivators";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==402) {
           $absection="Farm Machinery";
           $sub_category="Cultivators";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==403) {
           $absection="Farm Machinery";
           $sub_category="Cultivators";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==404) {
           $absection="Farm Machinery";
         $sub_category="Cultivators";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==405) {
           $absection="Farm Machinery";
           $sub_category="Cultivators";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==406) {
           $absection="Farm Machinery";
           $sub_category="Cultivators";
            $sup_category="DT";
           }
         elseif ( $sup_category==407) {
           $absection="Farm Machinery";
           $sub_category="Cultivators";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==408) {
           $absection="Farm Machinery";
         $sub_category="Cultivators";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==409) {
           $absection="Farm Machinery";
         $sub_category="Cultivators";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==410) {
           $absection="Farm Machinery";
         $sub_category="Cultivators";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==35) {
        if ( $sup_category==411) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==412) {
           $absection="Farm Machinery";
         $sub_category="Diary";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==413) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==414) {
           $absection="Farm Machinery";
         $sub_category="Diary";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==415) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==416) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="DT";
           }
         elseif ( $sup_category==417) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==418) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==419) {
           $absection="Farm Machinery";
         $sub_category="Diary";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==420) {
           $absection="Farm Machinery";
           $sub_category="Diary";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==36) {
        if ( $sup_category==421) {
           $absection="Farm Machinery";
           $sub_category="Beekeeping Equipment";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==422) {
           $absection="Farm Machinery";
         $sub_category="Beekeeping Equipment";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==423) {
           $absection="Farm Machinery";
         $sub_category="Beekeeping Equipment";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==424) {
           $absection="Farm Machinery";
         $sub_category="Beekeeping Equipment";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==425) {
           $absection="Farm Machinery";
         $sub_category="Beekeeping Equipment";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==426) {
           $absection="Farm Machinery";
         $sub_category="Beekeeping Equipment";
            $sup_category="DT";
           }
         elseif ( $sup_category==427) {
           $absection="Farm Machinery";
         $sub_category="Beekeeping Equipment";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==428) {
           $absection="Farm Machinery";
           $sub_category="Beekeeping Equipment";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==429) {
           $absection="Farm Machinery";
           $sub_category="Beekeeping Equipment";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==430) {
           $absection="Farm Machinery";
           $sub_category="Beekeeping Equipment";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==37) {
        if ( $sup_category==431) {
           $absection="Farm Machinery";
           $sub_category="Rotator";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==432) {
           $absection="Farm Machinery";
           $sub_category="Rotator";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==433) {
           $absection="Farm Machinery";
           $sub_category="Rotator";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==434) {
           $absection="Farm Machinery";
         $sub_category="Rotator";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==435) {
           $absection="Farm Machinery";
           $sub_category="Rotator";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==436) {
           $absection="Farm Machinery";
           $sub_category="Rotator";
            $sup_category="DT";
           }
         elseif ( $sup_category==437) {
           $absection="Farm Machinery";
           $sub_category="Rotator";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==438) {
           $absection="Farm Machinery";
         $sub_category="Rotator";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==439) {
           $absection="Farm Machinery";
         $sub_category="Rotator";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==440) {
           $absection="Farm Machinery";
         $sub_category="Rotator";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==38) {
        if ( $sup_category==441) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==442) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==443) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==444) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==445) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==446) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="DT";
           }
         elseif ( $sup_category==447) {
           $absection="Farm Machinery";
           $sub_category="Roller";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==448) {
           $absection="Farm Machinery";
         $sub_category="Roller";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==449) {
           $absection="Farm Machinery";
         $sub_category="Roller";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==450) {
           $absection="Farm Machinery";
         $sub_category="Roller";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==39) {
        if ( $sup_category==451) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="Fendt";
           }
         elseif ( $sup_category==452) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="Zoomlion";
           }
         elseif ( $sup_category==453) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="Belarus";
           }
         elseif ( $sup_category==454) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="Morooka";
           }
         elseif ( $sup_category==455) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="Yazhno Uralskiy";
           }
         elseif ( $sup_category==456) {
           $absection="Farm Machinery";
         $sub_category="Diggers";
            $sup_category="DT";
           }
         elseif ( $sup_category==457) {
           $absection="Farm Machinery";
         $sub_category="Diggers";
            $sup_category="Hanomag";
           }
         elseif ( $sup_category==458) {
           $absection="Farm Machinery";
         $sub_category="Diggers";
            $sup_category="VERSATILE";
           }
         elseif ( $sup_category==459) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="HTZ";
           }
         elseif ( $sup_category==460) {
           $absection="Farm Machinery";
           $sub_category="Diggers";
            $sup_category="Other";
           }

       }


       elseif ( $sub_category==40) {
        if ( $sup_category==461) {
           $absection="Farm Machinery";
           $sub_category="Other";
            $sup_category="Send Us The File";  
         }
       }

     }
  
  











 else if(  $absection==3){
      if( $sub_category==41){
      if( $sup_category==462){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Toyota";  
                             }
       elseif( $sup_category==463){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Iveco";  
                             }
       elseif( $sup_category==464){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Honda";  
                             }
       elseif( $sup_category==465){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Mitsubishi";  
                             }
       elseif( $sup_category==466){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Volkswagen";  
                             }
       elseif( $sup_category==467){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Volvo";  
                             }
       elseif( $sup_category==468){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Nissan";  
                             }
       elseif( $sup_category==469){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Porsche";  
                             }
       elseif( $sup_category==470){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Land Rover";  
                             }
       elseif( $sup_category==471){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Audi";  
                             }
       elseif( $sup_category==472){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Mercedes Benz";  
                             }
       elseif( $sup_category==473){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Skoda";  
                             }
       elseif( $sup_category==474){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Ford";  
                             }
       elseif( $sup_category==475){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="BMW";  
                             }
       elseif( $sup_category==476){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Fiat";  
                             }
       elseif( $sup_category==477){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Hyundai";  
                             }
       elseif( $sup_category==478){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Jeep";  
                             }
       elseif( $sup_category==479){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Suzuki";  
                             }
       elseif( $sup_category==480){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Chevrolet";  
                             }
       elseif( $sup_category==481){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Mazda";  
                             }
       elseif( $sup_category==482){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Acura";  
                             }
       elseif( $sup_category==483){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Dodge";  
                             }
       elseif( $sup_category==484){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Subaru";  
                             }
       elseif( $sup_category==485){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Chrysler";  
                             }
       elseif( $sup_category==486){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Lincoln";  
                             }
       elseif( $sup_category==487){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Suzuki";  
                             }
       elseif( $sup_category==488){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Alfa Romeo";  
                             }
       elseif( $sup_category==489){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Infiniti";  
                             }
       elseif( $sup_category==490){
         $absection="Vehicle";
         $sub_category="Automobile";
         $sup_category="Other";  
                             }
  
       }
      
      
       elseif ( $sub_category==42) {
        if( $sup_category==491){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Toyota  Hilux";  
                               }
         elseif( $sup_category==492){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Ford";  
                               }
         elseif( $sup_category==493){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Rivian";  
                               }
         elseif( $sup_category==494){
           $absection="Vehicle";
         $sub_category="Pickup"; 
           $sup_category="Musso";  
                               }
         elseif( $sup_category==495){
           $absection="Vehicle";
         $sub_category="Pickup"; 
           $sup_category="Nissan";  
                               }
         elseif( $sup_category==496){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Volkswagen";  
                               }
         elseif( $sup_category==497){
           $absection="Vehicle";
         $sub_category="Pickup"; 
           $sup_category="Mercedes Benz";  
                               }
         elseif( $sup_category==498){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Mitsubishi";  
                               }
         elseif( $sup_category==499){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==500){
           $absection="Vehicle";
           $sub_category="Pickup"; 
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==43) {
        if( $sup_category==501){
           $absection="Vehicle";
         $sub_category="Station Wagon";
           $sup_category="Toyota  Hilux";  
                               }
         elseif( $sup_category==502){
           $absection="Vehicle";
         $sub_category="Station Wagon"; 
           $sup_category="Ford";  
                               }
         elseif( $sup_category==503){
           $absection="Vehicle";
           $sub_category="Station Wagon";
           $sup_category="Rivian";  
                               }
         elseif( $sup_category==504){
           $absection="Vehicle";
           $sub_category="Station Wagon";
           $sup_category="Musso";  
                               }
         elseif( $sup_category==505){
           $absection="Vehicle";
         $sub_category="Station Wagon";
           $sup_category="Yazhno Uralskiy";  
                               }
         elseif( $sup_category==506){
           $absection="Vehicle";
           $sub_category="Station Wagon";
           $sup_category="Mitsubishi";  
                               }
         elseif( $sup_category==507){
           $absection="Vehicle";
         $sub_category="Station Wagon";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==508){
           $absection="Vehicle";
         $sub_category="Station Wagon";
           $sup_category="VERSATILE";  
                               }
         elseif( $sup_category==509){
           $absection="Vehicle";
           $sub_category="Station Wagon";
           $sup_category="Nissan";  
                               }
         elseif( $sup_category==510){
           $absection="Vehicle";
           $sub_category="Station Wagon";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==44) {
        if( $sup_category==511){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="DAF";  
                               }
         elseif( $sup_category==512){
           $absection="Vehicle";
           $sub_category="Lorry Truck";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==513){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="Ford";  
                               }
         elseif( $sup_category==514){
           $absection="Vehicle";
           $sub_category="Lorry Truck";
           $sup_category="Hino";  
         }
         elseif( $sup_category==515){
           $absection="Vehicle";
           $sub_category="Lorry Truck";
           $sup_category="Howo SinoTruck";  
                               }
         elseif( $sup_category==516){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="MAN";  
                               }
         elseif( $sup_category==517){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==518){
           $absection="Vehicle";
           $sub_category="Lorry Truck";
           $sup_category="MITSUBISHI FUSO";  
                               }
         elseif( $sup_category==519){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="IVECO";  
                               }
         elseif( $sup_category==520){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="Mercedes Benz";  
                               }
         elseif( $sup_category==521){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="MITSUBISHI";  
                               }
         elseif( $sup_category==522){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==523){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==524){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="RENAULT";  
                               }
         elseif( $sup_category==525){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==526){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="STEYR";  
                               }
         elseif( $sup_category==527){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="TATRA";  
                               }
         elseif( $sup_category==528){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==529){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="VOLKSWAG";  
                               }
         elseif( $sup_category==530){
           $absection="Vehicle";
         $sub_category="Lorry Truck";
           $sup_category="Other";  
                               }
        
       }


       elseif ( $sub_category==45) {
        if( $sup_category==531){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="MITSUBISHI";  
                               }
         elseif( $sup_category==532){
           $absection="Vehicle";
         $sub_category="Open Body Truck";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==533){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==534){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="RENAULT";  
         }
         elseif( $sup_category==535){
           $absection="Vehicle";
         $sub_category="Open Body Truck";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==536){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="STEYR";  
                               }
         elseif( $sup_category==537){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="TATRA";  
                               }
         elseif( $sup_category==538){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==539){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="VOLKSWAG";  
                               }
         elseif( $sup_category==540){
           $absection="Vehicle";
           $sub_category="Open Body Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==46) {
        if( $sup_category==541){
           $absection="Vehicle";
           $sub_category="Closed Body Truck";
           $sup_category="MITSUBISHI";  
                               }
         elseif( $sup_category==542){
           $absection="Vehicle";
           $sub_category="Closed Body Truck";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==543){
           $absection="Vehicle";
         $sub_category="Closed Body Truck";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==544){
           $absection="Vehicle";
           $sub_category="Closed Body Truck";
           $sup_category="RENAULT";  
                               }
         elseif( $sup_category==545){
           $absection="Vehicle";
         $sub_category="Closed Body Truck";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==546){
           $absection="Vehicle";
         $sub_category="Closed Body Truck";
           $sup_category="STEYR";  
                               }
         elseif( $sup_category==547){
           $absection="Vehicle";
         $sub_category="Closed Body Truck";
           $sup_category="TATRA";  
                               }
         elseif( $sup_category==548){
           $absection="Vehicle";
           $sub_category="Closed Body Truck";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==549){
           $absection="Vehicle";
         $sub_category="Closed Body Truck";
           $sup_category="VOLKSWAG";  
                               }
         elseif( $sup_category==550){
           $absection="Vehicle";
           $sub_category="Closed Body Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==47) {
        if( $sup_category==551){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="DAF";  
                               }
         elseif( $sup_category==552){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==553){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="Ford";  
                               }
         elseif( $sup_category==554){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="Hino";  
         }
         elseif( $sup_category==555){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="Howo SinoTruck";  
                               }
         elseif( $sup_category==556){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="MAN";  
                               }
         elseif( $sup_category==557){
           $absection="Vehicle";
         $sub_category="Cargo Van";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==558){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="MITSUBISHI FUSO";  
                               }
         elseif( $sup_category==559){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="IVECO";  
                               }
         elseif( $sup_category==560){
           $absection="Vehicle";
           $sub_category="Cargo Van";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==48) {
        if( $sup_category==561){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="VDL";  
                               }
         elseif( $sup_category==562){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==563){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==564){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="Hino";  
                               }
         elseif( $sup_category==565){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="TOYOTA";  
                               }
         elseif( $sup_category==566){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="MAN";  
                               }
         elseif( $sup_category==567){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==568){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==569){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="IVECO";  
                               }
         elseif( $sup_category==570){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="IRIZAR";  
                               }
         elseif( $sup_category==571){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="SOLARIS";  
                               }
         elseif( $sup_category==572){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="VAN HOOL";  
                               }
         elseif( $sup_category==573){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="VDL BOVA";  
                               }
         elseif( $sup_category==574){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="TEMSA";  
                               }
         elseif( $sup_category==575){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="OTOKAR";  
                               }
         elseif( $sup_category==576){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="TRATON";  
                               }
         elseif( $sup_category==577){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="NEOPLAN";  
                               }
         elseif( $sup_category==578){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="KING LONG";  
                               }
         elseif( $sup_category==579){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="MERCEDES BENZ";  
                               }
         elseif( $sup_category==580){
           $absection="Vehicle";
           $sub_category="Buses";
           $sup_category="Other";  
                               }
       
       }


       elseif ( $sub_category==49) { 
        if( $sup_category==581){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="SOLARIS";  
                               }
         elseif( $sup_category==582){
           $absection="Vehicle";
         $sub_category="Trailer Truck";
           $sup_category="VAN HOOL";  
                               }
         elseif( $sup_category==583){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="VDL BOVA";  
                               }
         elseif( $sup_category==584){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="TEMSA";  
                               }
         elseif( $sup_category==585){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="OTOKAR";  
                               }
         elseif( $sup_category==586){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="TRATON";  
                               }
         elseif( $sup_category==587){
           $absection="Vehicle";
         $sub_category="Trailer Truck";
           $sup_category="NEOPLAN";  
                               }
         elseif( $sup_category==588){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="KING LONG";  
                               }
         elseif( $sup_category==589){
           $absection="Vehicle";
         $sub_category="Trailer Truck";
           $sup_category="MERCEDES BENZ";  
                               }
         elseif( $sup_category==590){
           $absection="Vehicle";
           $sub_category="Trailer Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==50) {
        if( $sup_category==591){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="VDL";  
                               }
         elseif( $sup_category==592){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==593){
           $absection="Vehicle";
           $sub_category="Commercial Vehicles";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==594){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="Hino";  
                               }
         elseif( $sup_category==595){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="TOYOTA";  
                               }
         elseif( $sup_category==596){
           $absection="Vehicle";
           $sub_category="Commercial Vehicles";
           $sup_category="MAN";  
                               }
         elseif( $sup_category==597){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==598){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==599){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="IVECO";  
                               }
         elseif( $sup_category==600){
           $absection="Vehicle";
         $sub_category="Commercial Vehicles";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==51) {
        if( $sup_category==601){
           $absection="Vehicle";
           $sub_category="Tank Truck";
           $sup_category="Toyota  Hilux";  
                               }
         elseif( $sup_category==602){
           $absection="Vehicle";
         $sub_category="Tank Truck";
           $sup_category="Ford";  
                               }
         elseif( $sup_category==603){
           $absection="Vehicle";
           $sub_category="Tank Truck";
           $sup_category="Rivian";  
                               }
         elseif( $sup_category==604){
           $absection="Vehicle";
         $sub_category="Tank Truck";
           $sup_category="Musso";  
                               }
         elseif( $sup_category==605){
           $absection="Vehicle";
         $sub_category="Tank Truck";
           $sup_category="Yazhno Uralskiy";  
                               }
         elseif( $sup_category==606){
           $absection="Vehicle";
         $sub_category="Tank Truck";
           $sup_category="Mitsubishi";  
                               }
         elseif( $sup_category==607){
           $absection="Vehicle";
           $sub_category="Tank Truck";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==608){
           $absection="Vehicle";
           $sub_category="Tank Truck"; 
           $sup_category="VERSATILE";  
                               }
         elseif( $sup_category==609){
           $absection="Vehicle";
           $sub_category="Tank Truck";
           $sup_category="Nissan";  
                               }
         elseif( $sup_category==610){
           $absection="Vehicle";
           $sub_category="Tank Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==52) {
        if( $sup_category==611){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Toyota  Hilux";  
                               }
         elseif( $sup_category==612){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Ford";  
                               }
         elseif( $sup_category==613){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Rivian";  
                               }
         elseif( $sup_category==614){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Musso";  
                               }
         elseif( $sup_category==615){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Yazhno Uralskiy";  
                               }
         elseif( $sup_category==616){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Mitsubishi";  
                               }
         elseif( $sup_category==617){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==618){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="VERSATILE";  
                               }
         elseif( $sup_category==619){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Nissan";  
                               }
         elseif( $sup_category==620){
           $absection="Farm Machinery";
         $sub_category="Special  Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==53) {
        if( $sup_category==621){
           $absection="Vehicle";
         $sub_category="Light Truck";
           $sup_category="Toyota  Hilux";  
                               }
         elseif( $sup_category==622){
           $absection="Vehicle";
         $sub_category="Light Truck";
           $sup_category="Ford";  
                               }
         elseif( $sup_category==623){
           $absection="Vehicle";
         $sub_category="Light Truck";
           $sup_category="Rivian";  
                               }
         elseif( $sup_category==624){
           $absection="Vehicle";
           $sub_category="Light Truck";
           $sup_category="Musso";  
                               }
         elseif( $sup_category==625){
           $absection="Vehicle";
         $sub_category="Light Truck";
           $sup_category="Yazhno Uralskiy";  
                               }
         elseif( $sup_category==626){
           $absection="Vehicle";
         $sub_category="Light Truck";
           $sup_category="Mitsubishi";  
                               }
         elseif( $sup_category==627){
           $absection="Vehicle";
           $sub_category="Light Truck";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==628){
           $absection="Vehicle";
         $sub_category="Light Truck";
           $sup_category="VERSATILE";  
                               }
         elseif( $sup_category==629){
           $absection="Vehicle";
           $sub_category="Light Truck";
           $sup_category="Nissan";  
                               }
         elseif( $sup_category==630){
           $absection="Vehicle";
           $sub_category="Light Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==54) {
        if( $sup_category==631){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="MITSUBISHI";  
                               }
         elseif( $sup_category==632){
           $absection="Vehicle";
         $sub_category="Heavy Truck";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==633){
           $absection="Vehicle";
         $sub_category="Heavy Truck";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==634){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="RENAULT";  
                               }
         elseif( $sup_category==635){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==636){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="STEYR";  
                               }
         elseif( $sup_category==637){
           $absection="Vehicle";
         $sub_category="Heavy Truck";
           $sup_category="TATRA";  
                               }
         elseif( $sup_category==638){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==639){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="VOLKSWAG";  
                               }
         elseif( $sup_category==640){
           $absection="Vehicle";
           $sub_category="Heavy Truck";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==55) {
        if( $sup_category==641){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="MITSUBISHI";  
                               }
         elseif( $sup_category==642){
           $absection="Vehicle";
         $sub_category="Emergency vehicle";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==643){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==644){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="RENAULT";  
                               }
         elseif( $sup_category==645){
           $absection="Vehicle";
         $sub_category="Emergency vehicle";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==646){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="STEYR";  
                               }
         elseif( $sup_category==647){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="TATRA";  
                               }
         elseif( $sup_category==648){
           $absection="Vehicle";
         $sub_category="Emergency vehicle";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==649){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="VOLKSWAG";  
                               }
         elseif( $sup_category==650){
           $absection="Vehicle";
           $sub_category="Emergency vehicle";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==56) {
        if( $sup_category==651){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="MITSUBISHI";  
                               }
         elseif( $sup_category==652){
           $absection="Vehicle";
           $sub_category="Sedan";
           $sup_category="FIAT";  
                               }
         elseif( $sup_category==653){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==654){
           $absection="Vehicle";
           $sub_category="Sedan";
           $sup_category="RENAULT";  
                               }
         elseif( $sup_category==655){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==656){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="STEYR";  
                               }
         elseif( $sup_category==657){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="TATRA";  
                               }
         elseif( $sup_category==658){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==659){
           $absection="Vehicle";
         $sub_category="Sedan";
           $sup_category="VOLKSWAG";  
                               }
         elseif( $sup_category==660){
           $absection="Vehicle";
           $sub_category="Sedan";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==57) {
        if( $sup_category==661){
           $absection="Vehicle";
           $sub_category="Minvan";
           $sup_category="VDL";  
                               }
         elseif( $sup_category==662){
           $absection="Vehicle";
           $sub_category="Minvan";
           $sup_category="TATA";  
                               }
         elseif( $sup_category==663){
           $absection="Vehicle";
           $sub_category="Minvan";
           $sup_category="VOLVO";  
                               }
         elseif( $sup_category==664){
           $absection="Vehicle";
         $sub_category="Minvan";
           $sup_category="Hino";  
                               }
         elseif( $sup_category==665){
           $absection="Vehicle";
         $sub_category="Minvan";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==58) {
        if( $sup_category==666){
           $absection="Vehicle";
         $sub_category="Coupe";
           $sup_category="MAN";  
                               }
         elseif( $sup_category==667){
           $absection="Vehicle";
         $sub_category="Coupe";
           $sup_category="Isuzu";  
                               }
         elseif( $sup_category==668){
           $absection="Vehicle";
         $sub_category="Coupe";
           $sup_category="SCANIA";  
                               }
         elseif( $sup_category==669){
           $absection="Vehicle";
           $sub_category="Coupe";
           $sup_category="IVECO";  
                               }
         elseif( $sup_category==670){
           $absection="Vehicle";
           $sub_category="Coupe";
           $sup_category="Other";  
                               }
        
       }


       elseif ( $sub_category==59) {
        if( $sup_category==671){
           $absection="Vehicle";
         $sub_category="Hatchback";
           $sup_category="Bajaj Pulsar";  
                               }
         elseif( $sup_category==672){
           $absection="Vehicle";
         $sub_category="Hatchback";
           $sup_category="Ad";  
                               }
         elseif( $sup_category==673){
           $absection="Vehicle";
           $sub_category="Hatchback";
           $sup_category="Bajaj CT";  
                               }
         elseif( $sup_category==674){
           $absection="Vehicle";
           $sub_category="Hatchback";
           $sup_category="Bajaj Bikes Dekho";  
                               }
         elseif( $sup_category==675){
           $absection="Vehicle";
           $sub_category="Hatchback";
           $sup_category="Other";  
                               }
      
       }


       elseif ( $sub_category==60) {
        if( $sup_category==676){
           $absection="Vehicle";
         $sub_category="Other";
           $sup_category="Send Us The File";  
                               }

       }


   }
  







 else if(  $absection==4){ 
      if( $sub_category==61){
        if( $sup_category==677){
           $absection="Productive Machinery";
           $sub_category="Wood Working Machines";
           $sup_category="Boring drilling";  
                               }
         elseif( $sup_category==678){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Briquetting machines";  
                               }
         elseif( $sup_category==679){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Brushing machines";  
                               }
         elseif( $sup_category==680){
           $absection="Productive Machinery";
           $sub_category="Wood Working Machines";
           $sup_category="Drying  kilns";  
                               }
         elseif( $sup_category==681){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Dust collectors";  
                               }
         elseif( $sup_category==682){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Edgebanders";  
                               }
         elseif( $sup_category==683){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Finger joint machines";  
                               }
         elseif( $sup_category==684){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Gluing machines";  
                               }
         elseif( $sup_category==685){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Guillotine for veneer";  
                               }
         elseif( $sup_category==686){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Moulders";  
                               }
         elseif( $sup_category==687){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Planing machines";  
                               }
         elseif( $sup_category==688){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Routers";  
                               }
         elseif( $sup_category==689){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Wood lathes";  
                               }
         elseif( $sup_category==690){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Trunks processing machines";  
                               }
         elseif( $sup_category==691){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Sanding Machinery";  
                               }
         elseif( $sup_category==692){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Miscellaneous wood machinery";  
                               }
         elseif( $sup_category==693){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Tenoning machines";  
                               }
         elseif( $sup_category==694){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Spraying machines";  
                               }
         elseif( $sup_category==695){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Wood CNC machining centres";  
                               }
         elseif( $sup_category==696){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Woodworks plant and complete wood units";  
                               }
         elseif( $sup_category==697){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Wood milling machines";  
                               }
         elseif( $sup_category==698){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Wood Presses";  
                               }
         elseif( $sup_category==699){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Wood chipping machines";  
                               }
         elseif( $sup_category==700){
           $absection="Productive Machinery";
         $sub_category="Wood Working Machines";
           $sup_category="Other";  
                               }

       }


       elseif ( $sub_category==62) {
        if( $sup_category==701){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="Complete Plants";  
                               }
         elseif( $sup_category==702){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="CUTTING MACHINE";  
                               }
         elseif( $sup_category==703){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="SPREADING MACHINES";  
                               }
         elseif( $sup_category==704){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="DRYERS";  
                               }
         elseif( $sup_category==705){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="SHEARING MACHINE";  
                               }
         elseif( $sup_category==706){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="STENTERS";  
                               }
         elseif( $sup_category==707){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="EMBROIDERY MACHINE";  
                               }
         elseif( $sup_category==708){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="FOLDING MACHINE";  
                               }
         elseif( $sup_category==709){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="KNITTING MACHINE";  
                               }
         elseif( $sup_category==710){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="MISCELLANEOUS TEXTILE MACHINES";  
                               }
         elseif( $sup_category==711){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="TEXTILE PRESSES MACHINE";  
                               }
         elseif( $sup_category==712){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="SEWING MACHINES";  
                               }
         elseif( $sup_category==713){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="SPECIAL TEXTILE MACHINE";  
                               }
         elseif( $sup_category==714){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="WARP SIZING MACHINE";  
                               }
         elseif( $sup_category==715){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="SECTIONAL WARPING Machine";  
                               }
         elseif( $sup_category==716){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="WEAVING MACHINE";  
                               }
         elseif( $sup_category==717){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="WASHING MACHINE";  
                               }
         elseif( $sup_category==718){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="PRINTING Machines";  
                               }
         elseif( $sup_category==719){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="FINISHING MACHINES";  
                               }
         elseif( $sup_category==720){
           $absection="Productive Machinery";
           $sub_category="Textile Machines";
           $sup_category="Other";  
         }

       }


       elseif ( $sub_category==63) {
        if( $sup_category==721){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="3D PRINTER";  
                               }
         elseif( $sup_category==722){
           $absection="Productive Machinery";
           $sub_category="Printing Machines";
           $sup_category="CASE MAKING MACHINE";  
                               }
         elseif( $sup_category==723){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="DIE CUTTERS";  
                               }
         elseif( $sup_category==724){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="SEWING MACHINE";  
                               }
         elseif( $sup_category==725){
           $absection="Productive Machinery";
           $sub_category="Printing Machines";
           $sup_category="BINDING MACHINE";  
                               }
         elseif( $sup_category==726){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="LAMINATORS";  
                               }
         elseif( $sup_category==727){
           $absection="Productive Machinery";
           $sub_category="Printing Machines";
           $sup_category="WIRE BINDERS";  
                               }
         elseif( $sup_category==728){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="FOLDING MACHINES";  
                               }
         elseif( $sup_category==729){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="POTTERS MACHINE";  
                               }
         elseif( $sup_category==730){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="ENVOLOPES INSERTING MACHINES";  
                               }
         elseif( $sup_category==731){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="DIGITAL PRINTING PRESSES MACHINE";  
                               }
         elseif( $sup_category==732){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="PAPER AND BOARD MACHINES";  
                               }
         elseif( $sup_category==733){
           $absection="Productive Machinery";
           $sub_category="Printing Machines";
           $sup_category="SPECIAL MACHINE";  
                               }
         elseif( $sup_category==734){
           $absection="Productive Machinery";
           $sub_category="Printing Machines";
           $sup_category="WARP SIZING MACHINE";  
                               }
         elseif( $sup_category==735){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="TRIMMERS MACHINE";  
                               }
         elseif( $sup_category==736){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="WINDERS MACHINE";  
                               }
         elseif( $sup_category==737){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="SLITTERS MACHINE";  
                               }
         elseif( $sup_category==738){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="SCREEN PRINTING MACHINES";  
                               }
         elseif( $sup_category==739){
           $absection="Productive Machinery";
         $sub_category="Printing Machines";
           $sup_category="FINISHING MACHINES";  
                               }
         elseif( $sup_category==740){
           $absection="Productive Machinery";
           $sub_category="Printing Machines";
           $sup_category="Other";  
         }
     
       }


       elseif ( $sub_category==64) {
        if( $sup_category==741){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="Forging Machine";  
                               }
         elseif( $sup_category==742){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="FURNACES MACHINE";  
                               }
         elseif( $sup_category==743){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="PRESS MACHINE";  
                               }
         elseif( $sup_category==744){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="DRAWING MACHINE";  
                               }
         elseif( $sup_category==745){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="BORING MACHINE";  
                               }
         elseif( $sup_category==746){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="BAR FEEDERS";  
                               }
         elseif( $sup_category==747){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="PRESS BREAKES";  
                               }
         elseif( $sup_category==748){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="DRILLING MACHINES";  
                               }
         elseif( $sup_category==749){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="EDM MACHINE";  
                               }
         elseif( $sup_category==750){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="GRINDING MACHINES";  
                               }
         elseif( $sup_category==751){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="HOBBING MACHINE";  
                               }
         elseif( $sup_category==752){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="LATHE MACHINES";  
                               }
         elseif( $sup_category==753){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="MILLING MACHINE";  
                               }
         elseif( $sup_category==754){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="PLANING MACHINE";  
                               }
         elseif( $sup_category==755){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="SPRING MACHINE";  
                               }
         elseif( $sup_category==756){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="SHAPING MACHINE";  
                               }
         elseif( $sup_category==757){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="CUTTING MACHINE";  
                               }
         elseif( $sup_category==758){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="FOLDING MACHINES";  
                               }
         elseif( $sup_category==759){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="SHEAR MACHINES";  
                               }
         elseif( $sup_category==760){
           $absection="Productive Machinery";
           $sub_category="Metal Sheet Matal Machines";
           $sup_category="Other";  
         }
     
       }


       elseif ( $sub_category==65) {
        if( $sup_category==761){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="BAKERY AND BREADING MACHINE";  
                               }
         elseif( $sup_category==762){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="BAKERY AND KNEADING MACHINES";  
                               }
         elseif( $sup_category==763){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="BEATERS MACHINE";  
                               }
         elseif( $sup_category==764){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="BRINE INJECTION MACHINE";  
                               }
         elseif( $sup_category==765){
           $absection="Productive Machinery";
         $sub_category="Food Processing  Machines";
           $sup_category="BUTCHERY MACHINE";  
                               }
         elseif( $sup_category==766){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="FRYERS MACHINE";  
                               }
         elseif( $sup_category==767){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="PASTEURIZER MACHINES";  
                               }
         elseif( $sup_category==768){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="CANDY MACHINES";  
                               }
         elseif( $sup_category==769){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="CHOCOLATE MACHINES";  
                               }
         elseif( $sup_category==770){
           $absection="Productive Machinery";
         $sub_category="Food Processing  Machines";
           $sup_category="MISCELLANEOUS MACHINES";  
                               }
         elseif( $sup_category==771){
           $absection="Productive Machinery";
         $sub_category="Food Processing  Machines";
           $sup_category="OVENES COOKING TUNNELS";  
                               }
         elseif( $sup_category==772){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="REFRIGERATOR";  
                               }
         elseif( $sup_category==773){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="COMPLETE BREAD PRODUCTION LINES";  
                               }
         elseif( $sup_category==774){
           $absection="Productive Machinery";
         $sub_category="Food Processing  Machines";
           $sup_category="COMPLETE PASTA PRODUCTION LINES";  
                               }
         elseif( $sup_category==775){
           $absection="Productive Machinery";
         $sub_category="Food Processing  Machines";
           $sup_category="BOWL CUTTERS MACHINE";  
                               }
         elseif( $sup_category==776){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="GRINDERS OR MINCERS MACHINE";  
                               }
         elseif( $sup_category==777){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="STUFFERS MACHINE";  
                               }
         elseif( $sup_category==778){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="CUTTER OR CHOPPERS MACHINES";  
                               }
         elseif( $sup_category==779){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="MIXER MACHINES";  
                               }
         elseif( $sup_category==780){
           $absection="Productive Machinery";
           $sub_category="Food Processing  Machines";
           $sup_category="Other";  
         }
      
       }


       elseif ( $sub_category==66) {
        if( $sup_category==781){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="Inspection Equipment";  
                               }
         elseif( $sup_category==782){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="PCB Cleaning Machines";  
                               }
         elseif( $sup_category==783){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="PCB Drilling And Routing Machines";  
                               }
         elseif( $sup_category==784){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="PCB Pick And Place Machine";  
                               }
         elseif( $sup_category==785){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="PCB Miscellaneous";  
                               }
         elseif( $sup_category==786){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="PCB Reflow Ovens";  
                               }
         elseif( $sup_category==787){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="PCB Screen Printing Machine";  
                               }
         elseif( $sup_category==788){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="PCB Selective Soldering";  
                               }
         elseif( $sup_category==789){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="PCB Test And Rework Machines";  
                               }
         elseif( $sup_category==790){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="PCB Wave Soldering";  
                               }
         elseif( $sup_category==791){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="PCB Winding Machines";  
                               }
         elseif( $sup_category==792){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="Semiconductor Metrology Equipment";  
                               }
         elseif( $sup_category==793){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="Semiconductor Test And Measurement Equipment";  
                               }
         elseif( $sup_category==794){
           $absection="Productive Machinery";
         $sub_category="Electronics Machines";
           $sup_category="Semiconductor Wafer Equipment";  
                               }
         elseif( $sup_category==795){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="Other";  
         }

       }


       elseif ( $sub_category==67) {
        if( $sup_category==796){
           $absection="Productive Machinery";
         $sub_category="Plastic  Rubber Machines";
           $sup_category="Blowmoulding Machines";  
                               }
         elseif( $sup_category==797){
           $absection="Productive Machinery";
         $sub_category="Plastic  Rubber Machines";
           $sup_category="Extrusion Lines";  
                               }
         elseif( $sup_category==798){
           $absection="Productive Machinery";
         $sub_category="Plastic  Rubber Machines";
           $sup_category="Injection Moulding Machines";  
                               }
         elseif( $sup_category==799){
           $absection="Productive Machinery";
         $sub_category="Plastic  Rubber Machines";
           $sup_category="Plastic Crushers OR Compactors";  
                               }
         elseif( $sup_category==800){
           $absection="Productive Machinery";
           $sub_category="Plastic  Rubber Machines";
           $sup_category="Recycling Machines";  
                               }
         elseif( $sup_category==801){
           $absection="Productive Machinery";
           $sub_category="Plastic  Rubber Machines";
           $sup_category="Robots For Plastic Injection";  
                               }
         elseif( $sup_category==802){
           $absection="Productive Machinery";
           $sub_category="Plastic  Rubber Machines";
           $sup_category="Rubber Machines";  
                               }
         elseif( $sup_category==803){
           $absection="Productive Machinery";
         $sub_category="Plastic  Rubber Machines";
           $sup_category="Saws For Plastic";  
                               }
         elseif( $sup_category==804){
           $absection="Productive Machinery";
           $sub_category="Plastic  Rubber Machines";
           $sup_category="Sheet Processing Machines";  
                               }
         elseif( $sup_category==805){
           $absection="Productive Machinery";
           $sub_category="Plastic  Rubber Machines";
           $sup_category="Fed Machines";  
         }
         elseif( $sup_category==806){
           $absection="Productive Machinery";
           $sub_category="Electronics Machines";
           $sup_category="Other";  
         }
  
       }

       elseif ( $sub_category==68) { 
        if( $sup_category==807){
           $absection="Productive Machinery";
           $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="Compressed Air Plants";  
                               }
         elseif( $sup_category==808){
           $absection="Productive Machinery";
           $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="Compressors";  
                               }
         elseif( $sup_category==809){
           $absection="Productive Machinery";
           $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="Conveyor";  
                               }
         elseif( $sup_category==810){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="Dehydration And Filtering Machines";  
                               }
         elseif( $sup_category==811){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="ELECTRICITY OR GENERATOR SETS";  
                               }
         elseif( $sup_category==812){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="CRANE";  
                               }
         elseif( $sup_category==813){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="INDUSTRIAL BOILERS";  
                               }
         elseif( $sup_category==814){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="SPRAY BOOTHS Machines";  
                               }
         elseif( $sup_category==815){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="MARBLE AND GRANITE Machines";  
                               }
         elseif( $sup_category==816){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="LIQUIDS COOLING";  
                               }
         elseif( $sup_category==817){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="INDUSTRIAL OVENS";  
                               }
         elseif( $sup_category==818){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="TELESCOPIC HANDELER";  
                               }
         elseif( $sup_category==819){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="Vacuum Cleaning Units";  
                               }
         elseif( $sup_category==820){
           $absection="Productive Machinery";
         $sub_category="Miscellaneous Industrial Equipment";
           $sup_category="Other";  
                               }
     
       }


       elseif ( $sub_category==69) { 
        if( $sup_category==821){
           $absection="Productive Machinery";
           $sub_category="Metal Machine Tools";
           $sup_category="Analytical Instruments";  
                               }
         elseif( $sup_category==822){
           $absection="Productive Machinery";
           $sub_category="Metal Machine Tools";
           $sup_category="Drying Stoves";  
                               }
         elseif( $sup_category==823){
           $absection="Productive Machinery";
           $sub_category="Metal Machine Tools";
           $sup_category="Sterilizing Machines";  
                               }
         elseif( $sup_category==824){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Counting Machines";  
                               }
         elseif( $sup_category==825){
           $absection="Productive Machinery";
           $sub_category="Metal Machine Tools";
           $sup_category="Dryers";  
                               }
         elseif( $sup_category==826){
           $absection="Productive Machinery";
           $sub_category="Metal Machine Tools";
           $sup_category="Evaporators";  
                               }
         elseif( $sup_category==827){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Granulators";  
                               }
         elseif( $sup_category==828){
           $absection="Productive Machinery";
           $sub_category="Metal Machine Tools";
           $sup_category="Freeze Dryers";  
                               }
         elseif( $sup_category==829){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Medical Laboratory Equipment";  
                               }
         elseif( $sup_category==830){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Miscellaneous Pharmaceutical Equipment";  
                               }
         elseif( $sup_category==831){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Tablet Coating Machines";  
                               }
         elseif( $sup_category==832){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Tablet Presses";  
         }
         elseif( $sup_category==833){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Melting Tanks";  
                               }
         elseif( $sup_category==834){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Medical Complete Production Lines";  
                               }
         elseif( $sup_category==835){
           $absection="Productive Machinery";
         $sub_category="Metal Machine Tools";
           $sup_category="Other";  
                               }

       }

       elseif ( $sub_category==70) {
        if( $sup_category==836){
           $absection="Productive Machinery";
         $sub_category="Other";
           $sup_category="Send Us The File";  
                               }

       }

   }






 else if(  $absection==5){

      if( $sub_category==71){

        if( $sup_category==837){
      if( $semi_category==1){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";   
         $sup_category="Body Part";    
         $semi_category="Bumper";         
       }
       elseif( $semi_category==2){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part"; 
         $semi_category="Door";                    
       }
       elseif( $semi_category==3){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";     
         $semi_category="Mirror";                
       }
       elseif( $semi_category==4){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";  
         $semi_category="Boarding Step";                   
       }
       elseif( $semi_category==5){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";   
         $semi_category="Front Grill";                  
       }
       elseif( $semi_category==6){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";  
         $semi_category="Wiper Linkage";                   
       }
       elseif( $semi_category==7){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";       
         $semi_category="Cabin Corner";              
       }
       elseif( $semi_category==8){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";   
         $semi_category="Other Windows";                  
       }
       elseif( $semi_category==9){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";  
         $semi_category="Windscreen";                   
       }
       elseif( $semi_category==10){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";   
         $semi_category="Sun Visor";                  
       }
       elseif( $semi_category==11){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";   
         $semi_category="Front Cowling";                  
       }
       elseif( $semi_category==12){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";   
         $semi_category="Storage Box";                  
       }
       elseif( $semi_category==13){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Body Part";     
         $semi_category="Other";                
       }
 
     }


         elseif( $sup_category==838){
      if( $semi_category==14){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";     
         $semi_category="Shock Absorber";           
       }
       elseif( $semi_category==15){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Anti Roll Bar";              
       }
       elseif( $semi_category==16){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Heating And Air Conditioning";              
       }
       elseif( $semi_category==17){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Lift Cylinder";              
       }
       elseif( $semi_category==18){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Hydraulic Hose";              
       }
       elseif( $semi_category==19){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Lift Pump";              
       }
       elseif( $semi_category==20){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Seat";              
       }
       elseif( $semi_category==21){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Lock";              
       }
       elseif( $semi_category==22){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Air Filter";              
       }
       elseif( $semi_category==23){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Condenser";              
       }
       elseif( $semi_category==23){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Blower";              
       }
       elseif( $semi_category==25){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Level Valve And Cylinder";              
       }
       elseif( $semi_category==26){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cabin Part";  
         $semi_category="Other";              
       }

     }


         elseif( $sup_category==839){
      if( $semi_category==27){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Cylinder Head";              
       }
       elseif( $semi_category==28){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Piston And Liner";              
       }
       elseif( $semi_category==29){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Exhaust  Manifold";              
       }
       elseif( $semi_category==30){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Turbo Charger";              
       }
       elseif( $semi_category==31){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Oil Sump";              
       }
       elseif( $semi_category==32){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Crank Shaft";              
       }
       elseif( $semi_category==33){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Flywheel Housing";              
       }
       elseif( $semi_category==34){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Engine Suspension Mounting";              
       }
       elseif( $semi_category==35){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Crank Case";              
       }
       elseif( $semi_category==36){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Oil Pump";              
       }
       elseif( $semi_category==37){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Cam Shaft";              
       }
       elseif( $semi_category==38){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Oil Filter";              
       }
       elseif( $semi_category==39){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Engine Part";    
         $semi_category="Other";              
       }

     }


         elseif( $sup_category==840){
      if( $semi_category==40){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part"; 
         $semi_category="Injection Line Kit";                
       }
       elseif( $semi_category==41){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Nozzle Holder";            
       }
       elseif( $semi_category==42){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Fuel Tank";            
       }
       elseif( $semi_category==43){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Feed Pump";            
       }
       elseif( $semi_category==44){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Fuel Gauge Sander";            
       }
       elseif( $semi_category==45){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Electronical Injection Unit";            
       }
       elseif( $semi_category==46){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Injection Pump";            
       }
       elseif( $semi_category==47){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Urea system";            
       }
       elseif( $semi_category==48){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Fuel line";            
       }
       elseif( $semi_category==49){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Fuel Pump";            
       }
       elseif( $semi_category==50){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Injector Sleeve";            
       }
       elseif( $semi_category==51){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Working Cylinder";            
       }
       elseif( $semi_category==52){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Fule System Part";      
         $semi_category="Other";            
       }

     }


         elseif( $sup_category==841){
      if( $semi_category==53){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";  
         $semi_category="Silencer";               
       }
       elseif( $semi_category==54){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Air Filter";              
       }
       elseif( $semi_category==55){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Flexible Pipe";              
       }
       elseif( $semi_category==56){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Tail Pipe";              
       }
       elseif( $semi_category==57){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Rubber Bearing";              
       }
       elseif( $semi_category==58){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Accessories Exhaust System";              
       }
       elseif( $semi_category==59){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Heat Shield";              
       }
       elseif( $semi_category==60){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Catalyst Converter";              
       }
       elseif( $semi_category==61){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Exhaust Pipe";              
       }
       elseif( $semi_category==62){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Repaid kit Exhaust System";              
       }
       elseif( $semi_category==63){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Exhaust System Part";   
         $semi_category="Other";              
       }

     }


         elseif( $sup_category==842){
      if( $semi_category==64){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part"; 
         $semi_category="Clutch Kit";                 
       }
       elseif( $semi_category==65){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Clutch Cylinder";               
       }
       elseif( $semi_category==66){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Clutch Servo";               
       }
       elseif( $semi_category==67){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Release Lever";               
       }
       elseif( $semi_category==68){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Clutch Hose Lines";               
       }
       elseif( $semi_category==69){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Clutch Housing";               
       }
       elseif( $semi_category==70){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Clutch Pedal";               
       }
       elseif( $semi_category==71){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Oil Pump";               
       }
       elseif( $semi_category==72){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Clutch Unit";               
       }
       elseif( $semi_category==73){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Clutch And Pedal Part";   
         $semi_category="Other";               
       }

     }


         elseif( $sup_category==843){
      if( $semi_category==74){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part"; 
         $semi_category="Support Bearing";               
       }
       elseif( $semi_category==75){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="Joint Cross";        
       }
       elseif( $semi_category==76){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="End Yoke";        
       }
       elseif( $semi_category==77){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="Support Bearing Stub";        
       }
       elseif( $semi_category==78){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="Propeller Shaft Stub";        
       }
       elseif( $semi_category==79){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="Splined Sleeve";        
       }
       elseif( $semi_category==80){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="Mounting Propeller Shaft";        
       }
       elseif( $semi_category==81){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Propeller Shaft Part";        
         $semi_category="Other";        
       }

     }


         elseif( $sup_category==844){
      if( $semi_category==82){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";
         $sup_category="Gearbox Part";      
         $semi_category="Gearbox Unit";                
       }
       elseif( $semi_category==83){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part"; 
         $sup_category="Gearbox Part";     
         $semi_category="Gear Shift Housing";                
       }
       elseif( $semi_category==84){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";   
         $sup_category="Gearbox Part";   
         $semi_category="Gear Shift Level";                
       }
       elseif( $semi_category==85){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";  
         $sup_category="Gearbox Part";    
         $semi_category="Gearbox Housing";                
       }
       elseif( $semi_category==86){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";
         $sup_category="Gearbox Part";      
         $semi_category="Gasket Kit Gearbox";                
       }
       elseif( $semi_category==87){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Gearbox Part";  
         $semi_category="Retarder";                
       }
       elseif( $semi_category==88){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Gearbox Part";  
         $semi_category="Solenoid Valve";                
       }
       elseif( $semi_category==89){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";   
         $sup_category="Gearbox Part";   
         $semi_category="Gearbox Filter Kit";                
       }
       elseif( $semi_category==90){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Gearbox Part";  
         $semi_category="Power Take Off";                
       }
       elseif( $semi_category==91){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";   
         $sup_category="Gearbox Part";   
         $semi_category="Gearbox Suspension Mountings";                
       }
       elseif( $semi_category==92){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Gearbox Part";  
         $semi_category="Gearbox Hose Lines";                
       }
       elseif( $semi_category==93){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";  
         $sup_category="Gearbox Part";    
         $semi_category="Gearbox Hose";                
       }
       elseif( $semi_category==94){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";   
         $sup_category="Gearbox Part";   
         $semi_category="Other";                
       }


     }


         elseif( $sup_category==845){

      if( $semi_category==95){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";       
         $semi_category="Headlamp";           
       }
       elseif( $semi_category==96){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Sensors";               
       }
       elseif( $semi_category==97){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Tail Lamp";               
       }
       elseif( $semi_category==98){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Starter Motor";               
       }
       elseif( $semi_category==99){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Alternator";               
       }
       elseif( $semi_category==100){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Other Switch";               
       }
       elseif( $semi_category==101){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Marker Lamp";               
       }
       elseif( $semi_category==102){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Turn Signal Lamp";               
       }
       elseif( $semi_category==103){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Relay";               
       }
       elseif( $semi_category==104){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Steering Column Switch";               
       }
       elseif( $semi_category==105){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Bulb";               
       }
       elseif( $semi_category==106){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Battery";               
       }
       elseif( $semi_category==107){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Electrical System Part";   
         $semi_category="Other";               
       }
      
     }


         elseif( $sup_category==846){
      if( $semi_category==108){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Hub";                
       }
       elseif( $semi_category==109){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Wheel Bolt Kit";                
       }
       elseif( $semi_category==110){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Wheel Cover";                
       }
       elseif( $semi_category==111){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Rim Bolt Kits";                
       }
       elseif( $semi_category==112){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Tire Inflation Hose";                
       }
       elseif( $semi_category==113){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Rim";                
       }
       elseif( $semi_category==114){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Hubs And Wheels Part";   
         $semi_category="Other";                
       }
     }


         elseif( $sup_category==847){
      if( $semi_category==115){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part"; 
         $semi_category="Compressor";                 
       }
       elseif( $semi_category==116){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Brake Cylinders";        
       }
       elseif( $semi_category==117){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Brake Shoe";        
       }
       elseif( $semi_category==118){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Brake Caliper";        
       }
       elseif( $semi_category==119){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Various Valves";        
       }
       elseif( $semi_category==120){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Air Tank";        
       }
       elseif( $semi_category==121){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Air Dryer";        
       }
       elseif( $semi_category==122){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Brake Disc";        
       }
       elseif( $semi_category==123){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Brake Drum";        
       }
       elseif( $semi_category==124){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Connector";        
       }
       elseif( $semi_category==125){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Wear Indicator";        
       }
       elseif( $semi_category==126){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Hand Brake Valve";        
       }
       elseif( $semi_category==127){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Brake System Part";          
         $semi_category="Other";        
       }

     }


         elseif( $sup_category==848){
      if( $semi_category==128){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";
         $semi_category="Radiator";                  
       }
       elseif( $semi_category==129){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Water Pump";                  
       }
       elseif( $semi_category==130){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Belt Tensioner";                  
       }
       elseif( $semi_category==131){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Fan";                  
       }
       elseif( $semi_category==132){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="V–Belt Timing Belt";                  
       }
       elseif( $semi_category==133){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Inter Cooler";                  
       }
       elseif( $semi_category==134){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Thermostat";                  
       }
       elseif( $semi_category==135){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Expansion Tank";                  
       }
       elseif( $semi_category==136){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Coolant Pipe";                  
       }
       elseif( $semi_category==137){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Monitors And Gauges";                  
       }
       elseif( $semi_category==138){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Coolant Filter";                  
       }
       elseif( $semi_category==139){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Corrosion Prevention Agent";                  
       }
       elseif( $semi_category==140){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Cooling System Part";  
         $semi_category="Other";                  
       }

     }


         elseif( $sup_category==849){
      if( $semi_category==141){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";  
         $semi_category="Drag Link";                
       }
       elseif( $semi_category==142){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Pump";               
       }
       elseif( $semi_category==143){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Wheel";               
       }
       elseif( $semi_category==144){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Box";               
       }
       elseif( $semi_category==145){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Hose";               
       }
       elseif( $semi_category==146){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Column";               
       }
       elseif( $semi_category==147){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Cylinder";               
       }
       elseif( $semi_category==148){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Valve And Cylinder";               
       }
       elseif( $semi_category==149){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Oil Container,Steering";               
       }
       elseif( $semi_category==150){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Lift";               
       }
       elseif( $semi_category==151){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Tank";               
       }
       elseif( $semi_category==152){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Steering Buffer Frame";               
       }
       elseif( $semi_category==153){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Steering Part";   
         $semi_category="Other";               
       }

     }

         elseif( $sup_category==850){
      if( $semi_category==154){
         $absection="SparePart";
         $sub_category="Construction Equipment Spare Part";    
         $sup_category="Other";
         $semi_category="Send Us The File";                    
       }
     }

       }




       elseif ( $sub_category==72) {
       
        if( $sup_category==851){
          if( $semi_category==155){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";    
             $semi_category="Radiator";         
           }
           elseif( $semi_category==156){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part"; 
             $semi_category="Water Pump";                    
           }
           elseif( $semi_category==157){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";     
             $semi_category="Belt Tensioner";                
           }
           elseif( $semi_category==158){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";  
             $semi_category="Fan";                   
           }
           elseif( $semi_category==159){
             $absection="SparePart";
         $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="V–Belt Timing Belt";                  
           }
           elseif( $semi_category==160){
             $absection="SparePart";
         $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";  
             $semi_category="Inter Cooler";                   
           }
           elseif( $semi_category==161){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";       
             $semi_category="Thermostat";              
           }
           elseif( $semi_category==162){
             $absection="SparePart";
         $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Expansion Tank";                  
           }
           elseif( $semi_category==163){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";  
             $semi_category="Coolant Pipe";                   
           }
           elseif( $semi_category==164){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Monitors And Gauges";                  
           }
           elseif( $semi_category==165){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Coolant Filter";                  
           }
           elseif( $semi_category==166){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Corrosion Prevention Agent";                  
           }
           elseif( $semi_category==167){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cooling System Part";     
             $semi_category="Other";                
           }
     
         }

         elseif( $sup_category==852){
          if( $semi_category==168){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";    
             $semi_category="Silencer";         
           }
           elseif( $semi_category==169){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part"; 
             $semi_category="Air Filter";                    
           }
           elseif( $semi_category==170){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";     
             $semi_category="Flexible Pipe";                
           }
           elseif( $semi_category==171){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Tail Pipe";                   
           }
           elseif( $semi_category==172){
             $absection="SparePart";
         $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Rubber Bearing";                  
           }
           elseif( $semi_category==173){
             $absection="SparePart";
         $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Accessories Exhaust System";                   
           }
           elseif( $semi_category==174){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";       
             $semi_category="Heat Shield";              
           }
           elseif( $semi_category==175){
             $absection="SparePart";
         $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Catalyst Converter";                  
           }
           elseif( $semi_category==176){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Exhaust Pipe";                   
           }
           elseif( $semi_category==177){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Repaid kit Exhaust System";                  
           }
           elseif( $semi_category==178){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Exhaust System Part";     
             $semi_category="Other";                
           }
     
         }

         elseif( $sup_category==853){
          if( $semi_category==179){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Kit";                 
           }
           elseif( $semi_category==180){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Cylinder";               
           }
           elseif( $semi_category==181){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Servo";               
           }
           elseif( $semi_category==182){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Release Lever";               
           }
           elseif( $semi_category==183){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Hose Lines";               
           }
           elseif( $semi_category==184){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Housing";               
           }
           elseif( $semi_category==185){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Pedal";               
           }
           elseif( $semi_category==186){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Oil Pump";               
           }
           elseif( $semi_category==187){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Unit";               
           }
           elseif( $semi_category==188){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Other";               
           }
         }
        



         elseif( $sup_category==854){
          if( $semi_category==189){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Propeller Shaft Part"; 
             $semi_category="Support Bearing";               
           }
           elseif( $semi_category==190){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Joint Cross";        
           }
           elseif( $semi_category==191){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Propeller Shaft Part";        
             $semi_category="End Yoke";        
           }
           elseif( $semi_category==192){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Propeller Shaft Part";        
             $semi_category="Support Bearing Stub";        
           }
           elseif( $semi_category==193){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Propeller Shaft Part";        
             $semi_category="Propeller Shaft Stub";        
           }
           elseif( $semi_category==194){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Splined Sleeve";        
           }
           elseif( $semi_category==195){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Propeller Shaft Part";        
             $semi_category="Mounting Propeller Shaft";        
           }
           elseif( $semi_category==196){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Propeller Shaft Part";        
             $semi_category="Other";        
           }
         }



         elseif( $sup_category==855){
          if( $semi_category==197){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Gearbox Part";     
             $semi_category="Gear Shift Housing";                
           }
           elseif( $semi_category==198){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Gearbox Part";   
             $semi_category="Gear Shift Level";                
           }
           elseif( $semi_category==199){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Gearbox Part";    
             $semi_category="Gearbox Housing";                
           }
           elseif( $semi_category==200){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Gearbox Part";      
             $semi_category="Gasket Kit Gearbox";                
           }
           elseif( $semi_category==201){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Gearbox Part";  
             $semi_category="Retarder";                
           }
           elseif( $semi_category==202){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Gearbox Part";  
             $semi_category="Solenoid Valve";                
           }
           elseif( $semi_category==203){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Gearbox Part";   
             $semi_category="Gearbox Filter Kit";                
           }
           elseif( $semi_category==204){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Gearbox Part";  
             $semi_category="Power Take Off";                
           }
           elseif( $semi_category==205){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Gearbox Part";   
             $semi_category="Gearbox Suspension Mountings";                
           }
           elseif( $semi_category==206){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Gearbox Part";  
             $semi_category="Gearbox Hose Lines";                
           }
           elseif( $semi_category==207){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Gearbox Part";    
             $semi_category="Gearbox Hose";                
           }
           elseif( $semi_category==208){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Gearbox Part";   
             $semi_category="Other";                
           }
  
         }


         elseif( $sup_category==856){
          if( $semi_category==209){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";       
             $semi_category="Headlamp";           
           }
           elseif( $semi_category==210){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Sensors";               
           }
           elseif( $semi_category==211){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";   
             $semi_category="Tail Lamp";               
           }
           elseif( $semi_category==212){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";   
             $semi_category="Starter Motor";               
           }
           elseif( $semi_category==213){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";   
             $semi_category="Alternator";               
           }
           elseif( $semi_category==214){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Electrical System Part";   
             $semi_category="Other Switch";               
           }
           elseif( $semi_category==215){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Electrical System Part";   
             $semi_category="Marker Lamp";               
           }
           elseif( $semi_category==216){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";   
             $semi_category="Turn Signal Lamp";               
           }
           elseif( $semi_category==217){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";   
             $semi_category="Relay";               
           }
           elseif( $semi_category==218){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Electrical System Part";   
             $semi_category="Steering Column Switch";               
           }
           elseif( $semi_category==219){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Bulb";               
           }
           elseif( $semi_category==220){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Electrical System Part";   
             $semi_category="Battery";               
           }
           elseif( $semi_category==221){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Electrical System Part";   
             $semi_category="Other";               
           }
        
         }


         elseif( $sup_category==857){
          if( $semi_category==222){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Hub";                
           }
           elseif( $semi_category==223){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Wheel Bolt Kit";                
           }
           elseif( $semi_category==224){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Wheel Cover";                
           }
           elseif( $semi_category==225){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Rim Bolt Kits";                
           }
           elseif( $semi_category==226){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Tire Inflation Hose";                
           }
           elseif( $semi_category==227){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Rim";                
           }
           elseif( $semi_category==228){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Other";                
           }
         }


         elseif( $sup_category==858){
          if( $semi_category==229){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part";    
             $semi_category="King Pin Kit";         
           }
           elseif( $semi_category==230){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Drive Shaft";                    
           }
           elseif( $semi_category==231){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Track Rod";                    
           }
           elseif( $semi_category==232){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Differential Lock";                    
           }
           elseif( $semi_category==233){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Rear Axel Housing";                    
           }
           elseif( $semi_category==234){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Steering Knuckle";                    
           }
           elseif( $semi_category==235){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Control Arm";                    
           }
           elseif( $semi_category==236){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Balance Arm Trunnion";                    
           }
           elseif( $semi_category==237){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Rear Axel Complete";                    
           }
           elseif( $semi_category==238){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==859){
          if( $semi_category==239){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Steering Part";  
             $semi_category="Drag Link";                
           }
           elseif( $semi_category==240){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Steering Part";   
             $semi_category="Steering Pump";               
           }
           elseif( $semi_category==241){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Steering Part";   
             $semi_category="Steering Wheel";               
           }
           elseif( $semi_category==242){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Steering Part";   
             $semi_category="Steering Box";               
           }
           elseif( $semi_category==243){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Hose";               
           }
           elseif( $semi_category==244){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Column";               
           }
           elseif( $semi_category==245){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Steering Part";   
             $semi_category="Steering Cylinder";               
           }
           elseif( $semi_category==246){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Valve And Cylinder";               
           }
           elseif( $semi_category==247){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Steering Part";   
             $semi_category="Oil Container,Steering";               
           }
           elseif( $semi_category==248){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Steering Part";   
             $semi_category="Steering Lift";               
           }
           elseif( $semi_category==249){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Steering Part";   
             $semi_category="Steering Tank";               
           }
           elseif( $semi_category==250){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Steering Part";   
             $semi_category="Steering Buffer Frame";               
           }
           elseif( $semi_category==251){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Steering Part";   
             $semi_category="Other";               
           }
  
         }
    
         


         elseif( $sup_category==860){
          if( $semi_category==252){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Fule System Part";      
             $semi_category="Fuel Tank";            
           }
           elseif( $semi_category==253){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Fule System Part";      
             $semi_category="Feed Pump";            
           }
           elseif( $semi_category==254){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Fule System Part";      
             $semi_category="Fuel Gauge Sander";            
           }
           elseif( $semi_category==255){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Fule System Part";      
             $semi_category="Electronical Injection Unit";            
           }
           elseif( $semi_category==256){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Fule System Part";      
             $semi_category="Injection Pump";            
           }
           elseif( $semi_category==257){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Fule System Part";      
             $semi_category="Urea system";            
           }
           elseif( $semi_category==258){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Fule System Part";      
             $semi_category="Fuel line";            
           }
           elseif( $semi_category==259){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Fule System Part";      
             $semi_category="Fuel Pump";            
           }
           elseif( $semi_category==260){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Injector Sleeve";            
           }
           elseif( $semi_category==261){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Fule System Part";      
             $semi_category="Working Cylinder";            
           }
           elseif( $semi_category==262){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Fule System Part";      
             $semi_category="Other";            
           }
  
         }


         elseif( $sup_category==861){
          if( $semi_category==263){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part";    
             $semi_category="Injector Sleeve";         
           }
           elseif( $semi_category==264){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Working Cylinder";                    
           }
           elseif( $semi_category==265){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Belt Tensioner";                    
           }
           elseif( $semi_category==266){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Fan";                    
           }
           elseif( $semi_category==267){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Thermoster";                    
           }
           elseif( $semi_category==268){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Inter Cooler";                    
           }
           elseif( $semi_category==269){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==862){
          if( $semi_category==270){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part";    
             $semi_category="Spring Bracket";         
           }
           elseif( $semi_category==271){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Reaction Rod";                    
           }
           elseif( $semi_category==272){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="V-Stay";                    
           }
           elseif( $semi_category==273){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Level Valve And Cylinder";                    
           }
           elseif( $semi_category==274){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Solenoid Valve";                    
           }
           elseif( $semi_category==275){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Axle Lift";                    
           }
           elseif( $semi_category==276){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Air Tank";                    
           }
           elseif( $semi_category==277){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Rubber Buffer Frame";                    
           }
           elseif( $semi_category==278){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Other";                    
           }

         }



         elseif( $sup_category==863){
          if( $semi_category==279){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Battery Part";    
             $semi_category="Battery Plates";         
           }
           elseif( $semi_category==280){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Cracked Case";                    
           }
           elseif( $semi_category==281){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Cracked Cell Rod";                    
           }
           elseif( $semi_category==282){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Lead Acid";                    
           }
           elseif( $semi_category==283){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==864){
          if( $semi_category==284){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part";    
             $semi_category="Tread";         
           }
           elseif( $semi_category==285){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Bead";                    
           }
           elseif( $semi_category==286){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Sidewall";                    
           }
           elseif( $semi_category==287){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Shoulder";                    
           }
           elseif( $semi_category==288){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Ply";                    
           }
           elseif( $semi_category==289){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Snow Tires";                    
           }
           elseif( $semi_category==290){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==865){
          if( $semi_category==291){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part";    
             $semi_category="Piston Head";         
           }
           elseif( $semi_category==292){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Pin Bore";                    
           }
           elseif( $semi_category==293){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Pin";                    
           }
           elseif( $semi_category==294){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Skirt";                    
           }
           elseif( $semi_category==295){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Ring Grooves";                    
           }
           elseif( $semi_category==296){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Ring Lands";                    
           }
           elseif( $semi_category==297){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Rings";                    
           }
           elseif( $semi_category==298){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Cylinder Head";                    
           }
           elseif( $semi_category==299){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Snow Tires";                    
           }
           elseif( $semi_category==300){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Other";                    
           }

         }


         elseif( $sup_category==866){
          if( $semi_category==301){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Engine Part";    
             $semi_category="Oil Sump";              
           }
           elseif( $semi_category==302){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Engine Part";    
             $semi_category="Crank Shaft";              
           }
           elseif( $semi_category==303){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Engine Part";    
             $semi_category="Flywheel Housing";              
           }
           elseif( $semi_category==304){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Engine Part";    
             $semi_category="Engine Suspension Mounting";              
           }
           elseif( $semi_category==305){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Engine Part";    
             $semi_category="Crank Case";              
           }
           elseif( $semi_category==306){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Engine Part";    
             $semi_category="Oil Pump";              
           }
           elseif( $semi_category==307){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Engine Part";    
             $semi_category="Cam Shaft";              
           }
           elseif( $semi_category==308){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Engine Part";    
             $semi_category="Oil Filter";              
           }
           elseif( $semi_category==309){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Other";              
           }
         }


         elseif( $sup_category==867){
          if( $semi_category==310){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Cabin Part";     
             $semi_category="Shock Absorber";           
           }
           elseif( $semi_category==311){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Cabin Part";  
             $semi_category="Anti Roll Bar";              
           }
           elseif( $semi_category==312){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Cabin Part";  
             $semi_category="Heating And Air Conditioning";              
           }
           elseif( $semi_category==313){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Cabin Part";  
             $semi_category="Lift Cylinder";              
           }
           elseif( $semi_category==314){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Cabin Part";  
             $semi_category="Hydraulic Hose";              
           }
           elseif( $semi_category==315){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Cabin Part";  
             $semi_category="Lift Pump";              
           }
           elseif( $semi_category==316){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Cabin Part";  
             $semi_category="Seat";              
           }
           elseif( $semi_category==317){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Cabin Part";  
             $semi_category="Lock";              
           }
           elseif( $semi_category==318){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Cabin Part";  
             $semi_category="Air Filter";              
           }
           elseif( $semi_category==319){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Cabin Part";  
             $semi_category="Condenser";              
           }
           elseif( $semi_category==320){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Cabin Part";  
             $semi_category="Other";              
           }
  
         }


         elseif( $sup_category==868){
          if( $semi_category==321){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Body Part";    
             $semi_category="Bumper";         
           }
           elseif( $semi_category==322){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Body Part"; 
             $semi_category="Door";                    
           }
           elseif( $semi_category==323){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";     
             $semi_category="Mirror";                
           }
           elseif( $semi_category==324){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";  
             $semi_category="Boarding Step";                   
           }
           elseif( $semi_category==325){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";   
             $semi_category="Front Grill";                  
           }
           elseif( $semi_category==326){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Body Part";  
             $semi_category="Wiper Linkage";                   
           }
           elseif( $semi_category==327){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";       
             $semi_category="Cabin Corner";              
           }
           elseif( $semi_category==328){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";   
             $semi_category="Other Windows";                  
           }
           elseif( $semi_category==329){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";  
             $semi_category="Windscreen";                   
           }

           elseif( $semi_category==330){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Body Part";     
             $semi_category="Other";                
           }
     
         }


         elseif( $sup_category==869){
          if( $semi_category==331){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Brake System Part"; 
             $semi_category="Compressor";                 
           }
           elseif( $semi_category==332){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Cylinders";        
           }
           elseif( $semi_category==333){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Brake System Part";          
             $semi_category="Brake Shoe";        
           }
           elseif( $semi_category==334){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Caliper";        
           }
           elseif( $semi_category==335){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Brake System Part";          
             $semi_category="Various Valves";        
           }
           elseif( $semi_category==336){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Air Tank";        
           }
           elseif( $semi_category==337){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";   
             $sup_category="Brake System Part";          
             $semi_category="Air Dryer";        
           }
           elseif( $semi_category==338){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Brake System Part";          
             $semi_category="Brake Disc";        
           }
           elseif( $semi_category==339){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Drum";        
           }
           elseif( $semi_category==340){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Brake System Part";          
             $semi_category="Connector";        
           }
           elseif( $semi_category==341){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Brake System Part";          
             $semi_category="Wear Indicator";        
           }
           elseif( $semi_category==342){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part"; 
             $sup_category="Brake System Part";          
             $semi_category="Hand Brake Valve";        
           }
          
           elseif( $semi_category==343){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";  
             $sup_category="Brake System Part";          
             $semi_category="Other";        
           }
  
         }


         elseif( $sup_category==870){
          if( $semi_category==344){
             $absection="SparePart";
             $sub_category="Farm Equipment Spare Part";
             $sup_category="Other";    
             $semi_category="Send  Us The File";         
           }
         }

       }




       elseif ( $sub_category==73) {
        if( $sup_category==871){
          if( $semi_category==345){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";    
             $semi_category="Radiator";         
           }
           elseif( $semi_category==346){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part"; 
             $semi_category="Water Pump";                    
           }
           elseif( $semi_category==347){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";     
             $semi_category="Belt Tensioner";                
           }
           elseif( $semi_category==348){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";  
             $semi_category="Fan";                   
           }
           elseif( $semi_category==349){
             $absection="SparePart";
         $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="V–Belt Timing Belt";                  
           }
           elseif( $semi_category==350){
             $absection="SparePart";
         $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";  
             $semi_category="Inter Cooler";                   
           }
           elseif( $semi_category==351){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";       
             $semi_category="Thermostat";              
           }
           elseif( $semi_category==352){
             $absection="SparePart";
         $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Expansion Tank";                  
           }
           elseif( $semi_category==353){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";  
             $semi_category="Coolant Pipe";                   
           }
           elseif( $semi_category==354){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Monitors And Gauges";                  
           }
           elseif( $semi_category==355){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Coolant Filter";                  
           }
           elseif( $semi_category==356){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";   
             $semi_category="Corrosion Prevention Agent";                  
           }
           elseif( $semi_category==357){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Cooling System Part";     
             $semi_category="Other";                
           }
     
         }

         elseif( $sup_category==872){
          if( $semi_category==358){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part";    
             $semi_category="Anti Roll Bar";         
           }
           elseif( $semi_category==359){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part";    
             $semi_category="Air Bellow";         
           }
           elseif( $semi_category==360){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part";    
             $semi_category="Spring Bracket";         
           }
           elseif( $semi_category==361){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Reaction Rod";                    
           }
           elseif( $semi_category==362){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="V-Stay";                    
           }
           elseif( $semi_category==363){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Level Valve And Cylinder";                    
           }
           elseif( $semi_category==364){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Solenoid Valve";                    
           }
           elseif( $semi_category==365){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Axle Lift";                    
           }
           elseif( $semi_category==366){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Air Tank";                    
           }
           elseif( $semi_category==367){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Rubber Buffer Frame";                    
           }
           elseif( $semi_category==368){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Suspension System Part"; 
             $semi_category="Other";                    
           }

         }


         elseif( $sup_category==873){
          if( $semi_category==369){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Battery Part";    
             $semi_category="Battery Plates";         
           }
           elseif( $semi_category==370){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Cracked Case";                    
           }
           elseif( $semi_category==361){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Cracked Cell Rod";                    
           }
           elseif( $semi_category==372){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Lead Acid";                    
           }
           elseif( $semi_category==373){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Battery Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==374){
          if( $semi_category==384){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part";    
             $semi_category="Tread";         
           }
           elseif( $semi_category==385){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Bead";                    
           }
           elseif( $semi_category==386){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Sidewall";                    
           }
           elseif( $semi_category==387){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Shoulder";                    
           }
           elseif( $semi_category==388){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Ply";                    
           }
           elseif( $semi_category==389){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Snow Tires";                    
           }
           elseif( $semi_category==390){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Tire OR Tyre Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==875){
         if( $semi_category==391){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Gearbox Part";  
             $semi_category="Retarder";                
           }
           elseif( $semi_category==392){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Gearbox Part";  
             $semi_category="Solenoid Valve";                
           }
           elseif( $semi_category==393){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";   
             $sup_category="Gearbox Part";   
             $semi_category="Gearbox Filter Kit";                
           }
           elseif( $semi_category==394){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Gearbox Part";  
             $semi_category="Power Take Off";                
           }
           elseif( $semi_category==395){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";   
             $sup_category="Gearbox Part";   
             $semi_category="Gearbox Suspension Mountings";                
           }
           elseif( $semi_category==396){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Gearbox Part";  
             $semi_category="Gearbox Hose Lines";                
           }
           elseif( $semi_category==397){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";  
             $sup_category="Gearbox Part";    
             $semi_category="Gearbox Hose";                
           }
           elseif( $semi_category==398){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";   
             $sup_category="Gearbox Part";   
             $semi_category="Other";                
           }
  
         }

         elseif( $sup_category==876){
          if( $semi_category==399){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Oil Sump";              
           }
           elseif( $semi_category==400){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Crank Shaft";              
           }
           elseif( $semi_category==401){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Flywheel Housing";              
           }
           elseif( $semi_category==402){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Engine Suspension Mounting";              
           }
           elseif( $semi_category==403){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Crank Case";              
           }
           elseif( $semi_category==404){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Oil Pump";              
           }
           elseif( $semi_category==405){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Cam Shaft";              
           }
           elseif( $semi_category==406){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Crank Shaft";              
           }
           elseif( $semi_category==407){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Flywheel Housing";              
           }
           elseif( $semi_category==408){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Oil Filter";              
           }
           elseif( $semi_category==409){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Engine Part";    
             $semi_category="Other";              
           }
         }


         elseif( $sup_category==877){
          if( $semi_category==410){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";     
             $semi_category="Shock Absorber";           
           }
           elseif( $semi_category==411){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Anti Roll Bar";              
           }
           elseif( $semi_category==412){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Heating And Air Conditioning";              
           }
           elseif( $semi_category==413){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Lift Cylinder";              
           }
           elseif( $semi_category==414){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Hydraulic Hose";              
           }
           elseif( $semi_category==415){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Lift Pump";              
           }
           elseif( $semi_category==416){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Seat";              
           }
           elseif( $semi_category==417){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Lock";              
           }
           elseif( $semi_category==418){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Air Filter";              
           }
           elseif( $semi_category==419){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Condenser";              
           }
           elseif( $semi_category==420){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Cabin Part";  
             $semi_category="Other";              
           }
  
         }


         elseif( $sup_category==878){
          if( $semi_category==421){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";   
             $sup_category="Body Part";    
             $semi_category="Bumper";         
           }
           elseif( $semi_category==422){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part"; 
             $semi_category="Door";                    
           }
           elseif( $semi_category==423){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";     
             $semi_category="Mirror";                
           }
           elseif( $semi_category==424){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";  
             $semi_category="Boarding Step";                   
           }
           elseif( $semi_category==425){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";   
             $semi_category="Front Grill";                  
           }
           elseif( $semi_category==426){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";  
             $semi_category="Wiper Linkage";                   
           }
           elseif( $semi_category==427){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";       
             $semi_category="Cabin Corner";              
           }
           elseif( $semi_category==428){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";   
             $semi_category="Other Windows";                  
           }
           elseif( $semi_category==429){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";  
             $semi_category="Windscreen";                   
           }
           elseif( $semi_category==430){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part"; 
             $sup_category="Body Part";     
             $semi_category="Other";                
           }
     
         }


         elseif( $sup_category==879){
          if( $semi_category==431){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part"; 
             $semi_category="Compressor";                 
           }
           elseif( $semi_category==432){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Cylinders";        
           }
           elseif( $semi_category==433){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Shoe";        
           }
           elseif( $semi_category==434){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Caliper";        
           }
           elseif( $semi_category==435){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Various Valves";        
           }
           elseif( $semi_category==436){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Air Tank";        
           }
           elseif( $semi_category==437){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Air Dryer";        
           }
           elseif( $semi_category==438){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Disc";        
           }
           elseif( $semi_category==439){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Brake Drum";        
           }
           elseif( $semi_category==440){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Connector";        
           }
           elseif( $semi_category==441){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Wear Indicator";        
           }
           elseif( $semi_category==442){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Hand Brake Valve";        
           }
        
           elseif( $semi_category==443){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Brake System Part";          
             $semi_category="Other";        
           }
  
         }

        
         elseif( $sup_category==880){
          if( $semi_category==444){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Fuel Gauge Sander";            
           }
           elseif( $semi_category==445){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Electronical Injection Unit";            
           }
           elseif( $semi_category==446){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Injection Pump";            
           }
           elseif( $semi_category==447){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Urea system";            
           }
           elseif( $semi_category==448){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Fuel line";            
           }
           elseif( $semi_category==449){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Fuel Pump";            
           }
           elseif( $semi_category==450){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Injector Sleeve";            
           }
           elseif( $semi_category==451){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Working Cylinder";            
           }
           elseif( $semi_category==452){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Fule System Part";      
             $semi_category="Other";            
           }
  
         }


         elseif( $sup_category==881){
          if( $semi_category==453){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part";    
             $semi_category="Injector Sleeve";         
           }
           elseif( $semi_category==454){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Working Cylinder";                    
           }
           elseif( $semi_category==455){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Belt Tensioner";                    
           }
           elseif( $semi_category==456){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Fan";                    
           }
           elseif( $semi_category==457){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Thermoster";                    
           }
           elseif( $semi_category==458){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Inter Cooler";                    
           }
           elseif( $semi_category==459){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Other";                    
           }
         }

         elseif( $sup_category==882){
          if( $semi_category==460){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";     
             $semi_category="Flexible Pipe";                
           }
           elseif( $semi_category==461){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Tail Pipe";                   
           }
           elseif( $semi_category==462){
             $absection="SparePart";
         $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Rubber Bearing";                  
           }
           elseif( $semi_category==463){
             $absection="SparePart";
         $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Accessories Exhaust System";                   
           }
           elseif( $semi_category==464){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";       
             $semi_category="Heat Shield";              
           }
           elseif( $semi_category==465){
             $absection="SparePart";
         $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Catalyst Converter";                  
           }
           elseif( $semi_category==466){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Exhaust Pipe";                   
           }
           elseif( $semi_category==467){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Repaid kit Exhaust System";                  
           }
           elseif( $semi_category==468){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Exhaust System Part";     
             $semi_category="Other";                
           }
     
         }

         elseif( $sup_category==883){
          if( $semi_category==469){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Kit";                 
           }
           elseif( $semi_category==470){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Cylinder";               
           }
           elseif( $semi_category==471){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Servo";               
           }
           elseif( $semi_category==472){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Release Lever";               
           }
           elseif( $semi_category==473){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Hose Lines";               
           }
           elseif( $semi_category==474){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Housing";               
           }
           elseif( $semi_category==475){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Pedal";               
           }
           elseif( $semi_category==476){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Oil Pump";               
           }
           elseif( $semi_category==477){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Unit";               
           }
           elseif( $semi_category==478){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Other";               
           }
         }
        



         elseif( $sup_category==884){
          if( $semi_category==479){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part"; 
             $semi_category="Support Bearing";               
           }
           elseif( $semi_category==480){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Joint Cross";        
           }
           elseif( $semi_category==481){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="End Yoke";        
           }
           elseif( $semi_category==482){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Support Bearing Stub";        
           }
           elseif( $semi_category==483){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Propeller Shaft Stub";        
           }
           elseif( $semi_category==484){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Splined Sleeve";        
           }
           elseif( $semi_category==485){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Mounting Propeller Shaft";        
           }
           elseif( $semi_category==486){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Other";        
           }
         }


         elseif( $sup_category==885){
          if( $semi_category==487){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part";    
             $semi_category="Piston Head";         
           }
           elseif( $semi_category==488){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Pin Bore";                    
           }
           elseif( $semi_category==489){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Pin";                    
           }
           elseif( $semi_category==490){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Skirt";                    
           }
           elseif( $semi_category==491){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Ring Grooves";                    
           }
           elseif( $semi_category==492){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Ring Lands";                    
           }
           elseif( $semi_category==493){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Rings";                    
           }
           elseif( $semi_category==494){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Cylinder Head";                    
           }
           elseif( $semi_category==495){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Snow Tires";                    
           }
           elseif( $semi_category==496){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Other";                    
           }

         }


         elseif( $sup_category==886){
          if( $semi_category==497){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";       
             $semi_category="Headlamp";           
           }
           elseif( $semi_category==498){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Sensors";               
           }
           elseif( $semi_category==499){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Tail Lamp";               
           }
           elseif( $semi_category==500){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Starter Motor";               
           }
           elseif( $semi_category==501){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Alternator";               
           }
           elseif( $semi_category==502){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Other Switch";               
           }
           elseif( $semi_category==503){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Marker Lamp";               
           }
           elseif( $semi_category==504){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Turn Signal Lamp";               
           }
           elseif( $semi_category==505){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Relay";               
           }
           elseif( $semi_category==506){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Steering Column Switch";               
           }
           elseif( $semi_category==507){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Bulb";               
           }
           elseif( $semi_category==508){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Battery";               
           }
           elseif( $semi_category==509){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Other";               
           }
        
         }


         elseif( $sup_category==887){
          if( $semi_category==510){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Hub";                
           }
           elseif( $semi_category==511){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Wheel Bolt Kit";                
           }
           elseif( $semi_category==512){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Wheel Cover";                
           }
           elseif( $semi_category==513){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Rim Bolt Kits";                
           }
           elseif( $semi_category==514){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Tire Inflation Hose";                
           }
           elseif( $semi_category==515){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Rim";                
           }
           elseif( $semi_category==516){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Other";                
           }
         }


         elseif( $sup_category==888){
          if( $semi_category==517){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part";    
             $semi_category="King Pin Kit";         
           }
           elseif( $semi_category==518){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Drive Shaft";                    
           }
           elseif( $semi_category==519){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Track Rod";                    
           }
           elseif( $semi_category==520){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Differential Lock";                    
           }
           elseif( $semi_category==521){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Rear Axel Housing";                    
           }
           elseif( $semi_category==522){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Steering Knuckle";                    
           }
           elseif( $semi_category==523){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Control Arm";                    
           }
           elseif( $semi_category==524){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Balance Arm Trunnion";                    
           }
           elseif( $semi_category==525){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Rear Axel Complete";                    
           }
           elseif( $semi_category==526){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Other";                    
           }

         }


         elseif( $sup_category==889){
          if( $semi_category==527){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";  
             $semi_category="Drag Link";                
           }
           elseif( $semi_category==528){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Pump";               
           }
           elseif( $semi_category==529){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Wheel";               
           }
           elseif( $semi_category==530){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Box";               
           }
           elseif( $semi_category==531){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Hose";               
           }
           elseif( $semi_category==532){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Column";               
           }
           elseif( $semi_category==533){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Cylinder";               
           }
           elseif( $semi_category==534){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Valve And Cylinder";               
           }
           elseif( $semi_category==535){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Oil Container,Steering";               
           }
           elseif( $semi_category==536){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Lift";               
           }
           elseif( $semi_category==537){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Tank";               
           }
           elseif( $semi_category==538){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Buffer Frame";               
           }
           elseif( $semi_category==539){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Other";               
           }
  
         }
    
         elseif( $sup_category==890){
          if( $semi_category==540){
             $absection="SparePart";
             $sub_category="Vehicle Spare Part";
             $sup_category="Other";    
             $semi_category="Send  Us The File";         
           }
         }

     }








       elseif ( $sub_category==74) {
      if( $sup_category==881){
          if( $semi_category==541){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part";    
             $semi_category="Sleeve";         
           }
           elseif( $semi_category==541){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part";    
             $semi_category="Cylinder";         
           }
           elseif( $semi_category==543){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part";    
             $semi_category="Injector Sleeve";         
           }
           elseif( $semi_category==544){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Working Cylinder";                    
           }
           elseif( $semi_category==545){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Belt Tensioner";                    
           }
           elseif( $semi_category==546){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Fan";                    
           }
           elseif( $semi_category==547){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Thermoster";                    
           }
           elseif( $semi_category==548){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Inter Cooler";                    
           }
           elseif( $semi_category==549){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Radiator System Part"; 
             $semi_category="Other";                    
           }
         }

         elseif( $sup_category==882){
         if( $semi_category==550){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";     
             $semi_category="Flexible Pipe";                
           }
           elseif( $semi_category==551){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Tail Pipe";                   
           }
           elseif( $semi_category==552){
             $absection="SparePart";
         $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Rubber Bearing";                  
           }
           elseif( $semi_category==553){
             $absection="SparePart";
         $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Accessories Exhaust System";                   
           }
           elseif( $semi_category==554){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";       
             $semi_category="Heat Shield";              
           }
           elseif( $semi_category==555){
             $absection="SparePart";
         $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Catalyst Converter";                  
           }
           elseif( $semi_category==556){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";  
             $semi_category="Exhaust Pipe";                   
           }
           elseif( $semi_category==557){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";   
             $semi_category="Repaid kit Exhaust System";                  
           }
           elseif( $semi_category==558){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Exhaust System Part";     
             $semi_category="Other";                
           }
     
         }

         elseif( $sup_category==883){
          if( $semi_category==559){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Kit";                 
           }
           elseif( $semi_category==560){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Cylinder";               
           }
           elseif( $semi_category==561){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Clutch And Pedal Part";  
             $semi_category="Clutch Servo";               
           }
           elseif( $semi_category==562){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Release Lever";               
           }
           elseif( $semi_category==563){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Hose Lines";               
           }
           elseif( $semi_category==564){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Housing";               
           }
           elseif( $semi_category==565){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Pedal";               
           }
           elseif( $semi_category==566){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Oil Pump";               
           }
           elseif( $semi_category==567){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Clutch Unit";               
           }
           elseif( $semi_category==568){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Clutch And Pedal Part";   
             $semi_category="Other";               
           }
         }
        



         elseif( $sup_category==884){
          if( $semi_category==569){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part"; 
             $semi_category="Support Bearing";               
           }
           elseif( $semi_category==570){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Joint Cross";        
           }
           elseif( $semi_category==571){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="End Yoke";        
           }
           elseif( $semi_category==572){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Support Bearing Stub";        
           }
           elseif( $semi_category==573){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Propeller Shaft Stub";        
           }
           elseif( $semi_category==574){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Splined Sleeve";        
           }
           elseif( $semi_category==575){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Mounting Propeller Shaft";        
           }
           elseif( $semi_category==576){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Propeller Shaft Part";        
             $semi_category="Other";        
           }
         }


         elseif( $sup_category==885){
          if( $semi_category==577){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part";    
             $semi_category="Piston Head";         
           }
           elseif( $semi_category==578){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Pin Bore";                    
           }
           elseif( $semi_category==579){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Pin";                    
           }
           elseif( $semi_category==580){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Skirt";                    
           }
           elseif( $semi_category==581){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Ring Grooves";                    
           }
           elseif( $semi_category==582){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Ring Lands";                    
           }
           elseif( $semi_category==583){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Piston Rings";                    
           }
           elseif( $semi_category==584){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Cylinder Head";                    
           }
           elseif( $semi_category==585){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Snow Tires";                    
           }
           elseif( $semi_category==586){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Piston Part"; 
             $semi_category="Other";                    
           }

         }


         elseif( $sup_category==886){
          if( $semi_category==587){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";       
             $semi_category="Headlamp";           
           }
           elseif( $semi_category==588){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Sensors";               
           }
           elseif( $semi_category==589){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Tail Lamp";               
           }
           elseif( $semi_category==590){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Starter Motor";               
           }
           elseif( $semi_category==591){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Alternator";               
           }
           elseif( $semi_category==592){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Other Switch";               
           }
           elseif( $semi_category==593){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Marker Lamp";               
           }
           elseif( $semi_category==594){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Turn Signal Lamp";               
           }
           elseif( $semi_category==595){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Relay";               
           }
           elseif( $semi_category==596){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Steering Column Switch";               
           }
           elseif( $semi_category==597){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Bulb";               
           }
           elseif( $semi_category==598){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Battery";               
           }
           elseif( $semi_category==599){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Electrical System Part";   
             $semi_category="Other";               
           }
        
         }


         elseif( $sup_category==887){
          if( $semi_category==600){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Hub";                
           }
           elseif( $semi_category==601){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Wheel Bolt Kit";                
           }
           elseif( $semi_category==602){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Wheel Cover";                
           }
           elseif( $semi_category==603){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Rim Bolt Kits";                
           }
           elseif( $semi_category==604){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Tire Inflation Hose";                
           }
           elseif( $semi_category==605){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Rim";                
           }
           elseif( $semi_category==606){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Hubs And Wheels Part";   
             $semi_category="Other";                
           }
         }


         elseif( $sup_category==888){
          if( $semi_category==607){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part";    
             $semi_category="King Pin Kit";         
           }
           elseif( $semi_category==608){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Drive Shaft";                    
           }
           elseif( $semi_category==609){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Track Rod";                    
           }
           elseif( $semi_category==610){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Differential Lock";                    
           }
           elseif( $semi_category==611){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Rear Axel Housing";                    
           }
           elseif( $semi_category==612){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Steering Knuckle";                    
           }
           elseif( $semi_category==613){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Control Arm";                    
           }
           elseif( $semi_category==614){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Balance Arm Trunnion";                    
           }
           elseif( $semi_category==615){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Rear Axel Complete";                    
           }
           elseif( $semi_category==616){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Axles Part"; 
             $semi_category="Other";                    
           }
         }


         elseif( $sup_category==889){
          if( $semi_category==617){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";  
             $semi_category="Drag Link";                
           }
           elseif( $semi_category==618){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Pump";               
           }
           elseif( $semi_category==619){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Wheel";               
           }
           elseif( $semi_category==620){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Box";               
           }
           elseif( $semi_category==621){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Hose";               
           }
           elseif( $semi_category==622){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Column";               
           }
           elseif( $semi_category==623){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Cylinder";               
           }
           elseif( $semi_category==624){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Valve And Cylinder";               
           }
           elseif( $semi_category==625){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Oil Container,Steering";               
           }
           elseif( $semi_category==626){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Lift";               
           }
           elseif( $semi_category==627){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Tank";               
           }
           elseif( $semi_category==628){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Steering Buffer Frame";               
           }
           elseif( $semi_category==629){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";    
             $sup_category="Steering Part";   
             $semi_category="Other";               
           }
  
         }
    
         elseif( $sup_category==890){
          if( $semi_category==630){
             $absection="SparePart";
             $sub_category="Production Equipment Spare Part";
             $sup_category="Other";    
             $semi_category="Send  Us The File";         
           }
         }
       }


       elseif ( $sub_category==75) {
        if( $sup_category==901){
           $absection="SparePart";
           $sub_category="Other";
           $sup_category="Send Us The File";  
                               }

                             }


   
  

else if(  $absection==6){
    
 if ( $sub_category==76) {
  if( $sup_category==921){
   $absection="Other";
  $sub_category="Send Us The File";
    $sup_category="Send The Require File";  
  }
}     
    }

  
                                                      

 





                          
  

 $query=mysqli_query( $conn, "insert into buycar(absection,typ,subcategory,supcategory,semicategory,condition,
 loc,location,ye,year,hours,weight,fu,fule,cyl,cylinder,tra,transmission,col,color,cc,price,number,image,imagename)
values(' $absection',' $typ',' $sub_category',' $sup_category',' $semi_category','$condition','$loc',' $location',' $ye',' $year',' $hours',' $weight',
' $fu', ' $fule',' $cyl',' $cylinder',' $tra',' $transmission',' $col',' $color',' $cc',' $price',' $number',' $image',' $imagename')")
or die("qurey error");


 

  }   
                                                  
?>

<script>window.alert("Record Saved");</script>
</body>
</html>



