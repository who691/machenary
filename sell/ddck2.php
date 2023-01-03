<?Php
@$subcat_id=$_GET['subcat_id'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($subcat_id)){
echo "Data Error";
exit;
 }

 elseif ($subcat_id>=837) {

     # code...
     /// end of checking injection attack ////
require "config.php"; // Database connection string 

$sql="SELECT semicategory,supcat_id FROM semicategory WHERE subcat_id=:subcat_id";
$row=$dbo->prepare($sql);
$row->bindParam(':subcat_id',$subcat_id,PDO::PARAM_INT,5);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
$main = array('data'=>$result);
echo json_encode($main);

 }

?>
