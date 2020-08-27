<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Data</title>
</head>
<body>

<h1>Ini adalah halaman tambah data</h1>
<?php echo validation_errors(); ?>
<?php echo form_open(base_url('tambah_data')); ?>
	<label>Nama Produk</label><br>
	<input type="text" name="nama_produk"><br>
	<label>Keterangan</label><br>
	<input type="text" name="keterangan"><br>
	<label>Harga</label><br>
	<input type="text" name="harga"><br>
	<label>Jumlah</label><br>
	<input type="text" name="jumlah"><br>
	<button type="submit">Submit</button>
<?php echo form_close(); ?>

</body>
</html>