<?php
if(isset($_POST['name'])){
require("fpdf/fpdf.php");
require("qr.php");
header("Content-type:image/png");
$font="C:/xampp/htdocs/ecertificate/Roboto-Bold.ttf";
$time=time();
$image=imagecreatefrompng("temp.PNG");
$color=imagecolorallocate($image,19,21,22,);
imagettftext($image,60,0,545,560,$color,$font,$_POST['name']);
imagettftext($image,45,0,600,685,$color,$font,$_POST['course']);

imagettftext($image,27,0,365,969,$color,$font,$_POST['mentor']);
imagettftext($image,20,0,750,780,$color,$font,$_POST['sdate']);

imagettftext($image,20,0,1050,780,$color,$font,$_POST['edate']);


imagepng($image,"download-certificate/$time.png");
imagedestroy($image);

	
$pdf=new FPDF();
$pdf->AddPage(L,A5);
$pdf->Image("download-certificate/$time.png",0,0,210,148);
$pdf->Image($filename,20,28,25,25);
ob_end_clean();
$pdf->Output('certificate.pdf','I');

}


?>
<form action="mycertandqr.php" method="POST">
<CENTER>
<h1>NAME</h1><br>
<input type="text" name="name" required>
<h1>COURSE</h1><br>
<input type="text" name="course" required>
<h1>MENTOR</h1><br>
<input type="text" name="mentor" required><br>
<h1> starting date </h1>
<input type="text" name="sdate" required></br>
<h1> ending date </h1>
<input type="text" name="edate" required></br>

<br><br>
<input type="submit" value="submit" >

</CENTER>

</form>