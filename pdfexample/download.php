<?php
require_once('connection.php');
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$query = "select * from pdfrecords";
$result = mysqli_query($con, $query); 
$infor = '';

while($rows=mysqli_fetch_assoc($result)){
    $infor .='<h4 style="color:red">Product: </h4>' .$rows['productname'] . '<br/>';
    $infor .='<p>Description: </p>' .$rows['productdesc'] . '<br/>';
    $infor .='<p>Price: </p>' .$rows['price'] . '<br/>';
}

$mpdf->WriteHTML($infor);
$mpdf->Output();

?>