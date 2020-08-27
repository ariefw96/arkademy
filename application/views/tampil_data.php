<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Barang</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th colspan="2">Aksi</th>
		</tr>
		<a href="<?=base_url('tambah_data'); ?>">+Tambah Data</a>
		<?php foreach ($barang->result() as $produk): ?>
			<tr>
				<td><?=$produk->id_produk;?></td>
				<td><?=$produk->nama_produk;?></td>
				<td><?=$produk->keterangan;?></td>
				<td>Rp. <?=number_format($produk->harga,2,',','.'); ?></td>
				<td><?=$produk->jumlah;?></td>
				<td><a href="<?=base_url('update_data/'.$produk->id_produk);?>">Update Produk</td>
				<td><a href="<?=base_url('hapus_data/'.$produk->id_produk);?>">Hapus Produk</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
