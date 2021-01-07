<?php
require_once('koneksi.php');

$query = "SELECT * FROM sagita";
$urlcrud = "index.php?page=crud/";
?>
<div class="row">
	<div class="col-lg-12">
		<a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Input</a>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">
				<th width="50px">No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th style="text-align: center;">Pilih</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $a ?></td>
						<td><?= $obj->nim ?></td>
						<td><?= $obj->nama ?></td>
						<td style="text-align: center;">
						<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&nim='.$obj->nim ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="<?= $urlcrud.'edit&nim='.$obj->nim ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
						</td>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>
