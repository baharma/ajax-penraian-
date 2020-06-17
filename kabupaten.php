<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<script type="text/javascript">
	function ajaxkabupaten(kab) {
		var httpRequest = new  XMLHttpRequest();
		httpRequest.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("kabupaten").innerHTML = this.responseText;
			}
		};		
		httpRequest.open("GET","formkabupaten.php?idprov="+kab,true);
		httpRequest.send();
	}

</script>

<body>
<div id="tesAjax">
	<form action="#" id="formdata">
		<select name="provinsi" id="provinsi" onchange="ajaxkabupaten(this.value)">
			<option value="">pilih kabupaten</option>
			<?php
			include 'koneksi.php';
			$query = "select * from provinsi";
			$result=mysqli_query($kon,$query);
			while ($row=mysqli_fetch_array($result)) {
				
			?>
			<option value="<?php echo $row['idprovinsi'] ?>"><?php echo $row['namaprovinsi']; ?></option>
			<?php
			}
			mysqli_close($kon);
			?>
		</select>
		<p>
		<label>Nama Kabupaten</label>
		<select name="kabupaten" id="kabupaten">
			<option value="">pilih Kabupaten</option>
		</select>
		</p>
	</form>
</div>
</body>
</html>