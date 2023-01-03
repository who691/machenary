<?Php
@$cata_id=$_GET['cata_id'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($cata_id)){
echo "Data Error";
exit;
 }
/// end of checking injection attack ////
require "config.php"; // Database connection string 

$sql="SELECT subcategory,catb_id FROM subcategory WHERE cata_id=:cata_id";
$row=$dbo->prepare($sql);
$row->bindParam(':cata_id',$cata_id,PDO::PARAM_INT,5);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
$main = array('data'=>$result);
echo json_encode($main);
?>
