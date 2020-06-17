<?php

$idprovinsi = $_GET['idprov'];

include 'koneksi.php';
$query ="select * from kabupaten where idprovinsi='$idprovinsi'";
$result=mysqli_query($kon,$query);
while ($row = mysqli_fetch_array($result)) {
	?>

	<option value="<?php echo $row['idkabupaten'] ?>"><?php echo $row['namakabupaten'];?></option>
	
<?php
}
mysqli_close($kon);
?>