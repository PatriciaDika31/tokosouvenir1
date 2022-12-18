
<h1 style="text-align:center">Riwayat Penjualan</h1>

<a href="<?=base_url('index.php/Histori/cetak_laporan')?>" class="btn btn-primary" style="float: right;">Cetak Histori</a>

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
		<!-- <td><a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_detil_transaksi" onclick="prepare_detil_transaksi('.$r->id_transaksi.')">Lihat Detil</a>
		</td> -->
	</tr>

<?php endforeach?>
</tbody>	
</table>
<!-- 
<div id="modal_detil_transaksi" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detil Transaksi</h4>
      </div>
      <form action="<?php echo base_url('index.php/pengguna/ubah'); ?>" method="post" enctype="multipart/form-data">
	      <div class="modal-body">
	        	
	      </div>
	      <div class="modal-footer">
	        <a href="#" class="btn btn-warning" id="cetak_nota" target="_blank">CETAK NOTA</a>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	
	function prepare_detil_transaksi(id)
	{
		$(".modal-body").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/Transaksi/get_detil_transaksi_by_id/' + id, function(data){
			$(".modal-body").html(data.show_detil);
		});

		$('#cetak_nota').attr('href','<?php echo base_url();?>index.php/transaksi/cetak_nota/' + id);
	}
</script> --> 
