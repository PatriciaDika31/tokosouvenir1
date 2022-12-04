
<h1 style="text-align:center">Histori Penjualan</h1>

<a href="<?=base_url('index.php/Histori/cetak_laporan')?>" class="btn btn-primary" style="float: right;">Print</a>

				<table class="table table-hover table-stripped">
					<thead>
						<tr>
						<th>No</th>
						<th>No Nota</th>
						<th>Nama Kasir</th>
						<th>Pembeli</th>
						<th>Total</th>
						<th>Tanggal Beli</th>
						</tr>
					</thead>

<tbody>
	

<?php $no = 0; foreach($ts as $ts): $no++;?>
	<tr>
		<td><?=$no?></td><td><?=$ts->kode_transaksi?></td>
		<td><?=$ts->nama_user?></td><td><?=$ts->nama_pembeli?></td>
		<td><?=$ts->total?></td><td><?=$ts->tanggal_beli?></td>

	</tr>

<?php endforeach?>
</tbody>	
</table>
