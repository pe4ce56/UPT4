<?php
require 'config.php';
if (isset($_POST['action'])) {
	$sql = "SELECT * FROM kursil_modul WHERE TAHUN_KEGIATAN !='' ";
	if (isset($_POST['tahun'])) {
		$tahun = implode("','", $_POST['tahun']);
		$sql .= "AND TAHUN_KEGIATAN IN('" . $tahun . "')";
	}
	if (isset($_POST['jeniskursil'])) {
		$jeniskursil = implode("','", $_POST['jeniskursil']);
		$sql .= "AND JUDUL_KURSIL_MODUL IN('" . $jeniskursil . "')";
	}

	$result = $conn->query($sql);
	$output =  '';
	if ($result) {
		$output .= '<div class="col-12">
	<!-- Default box -->
	<div class="card" id="result">

	  <div class="card-header" style="background-color: #23267B; color: white;">
		<h3 class="card-title">Tabel Data Kursil dan Modul</h3>
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body">
		<table id="tabel-data" class="table table-bordered table-striped" cellspacing="0" width="150%">
		  <thead>
		 <tr>
				<th>NO</th>
                <th>JUDUL KURSIL/MODUL</th>
                <th>LOKASI</th>
                <th>TANGGAL KEGIATAN</th>
                <th>TAHUN KEGIATAN</th>
		</tr>
		  </thead>
		  <tbody>';
		while ($row = $result->fetch_assoc()) {
			$output .= '<tr>
							<td>' . $row['NO'] . '</td>
							<td>' . $row['JUDUL_KURSIL_MODUL'] . '</td>
							<td>' . $row['LOKASI'] . '</td>
							<td>' . $row['TANGGAL_KEGIATAN'] . '</td>
							<td>' . $row['TAHUN_KEGIATAN'] . '</td>
							
						</tr>';
		}
		$output .= ' 			</tbody>
							</table>
							</div>
						<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>';
	}
	if (!$output) {
		$output = "<h3>Hasil Tidak Ditemukan!</h3>";
	}
	echo $output;
}

?>


<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$(document).ready(function() {
			var table = $('#tabel-data').DataTable({
				scrollY: "400px",
				scrollX: false,
				scrollCollapse: true

			});
		});

	});
</script>