<?php 
/*QR Code Version : V.1.0
Authors : Rudi Pratama*/
if(isset($_POST['data'])){
    include('phpqrcode/qrlib.php'); 
    $text = $_POST['text'];
    $folder = "images/";
    $file_name = "qr.png";
    $file_name = $folder.$file_name;
    QRcode::png($text, false, QR_ECLEVEL_H, 10, 3);
    echo"<img src='images/qr.png'>";
}
?>
<html>
<head>
	<title>QR Generator PHP</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="text" placeholder="Tuliskan Sesuatu">
		<input type="submit" name="data">
	</form>
</body>
</html>