<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>
	<h1>Ini adalah halaman update data</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open(base_url('update_data/'.$this->uri->segment(2))); ?>
	<?php foreach ($barang->result() as $produk): ?>
		<label>Nama Produk</label><br>
		<input type="text" name="nama_produk" value="<?=$produk->nama_produk; ?>"><br>
		<label>Keterangan</label><br>
		<input type="text" name="keterangan" value="<?=$produk->keterangan; ?>"><br>
		<label>Harga</label><br>
		<input type="text" name="harga" value="<?=$produk->harga;?>"><br>
		<label>Jumlah</label><br>
		<input type="text" name="jumlah" value="<?=$produk->jumlah;?>"><br>
		<button type="submit">Submit</button>
	<?php endforeach ?>
	<?php echo form_close(); ?>
</body>
</html>