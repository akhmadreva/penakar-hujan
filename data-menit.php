<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">	
			<h3>Data Permenit dan Jam</h3>
 
			<?php 
			if(isset($_GET['pesan'])){
				$pesan = $_GET['pesan'];
				if($pesan == "input"){
					echo "Data berhasil di input.";
				}else if($pesan == "update"){
					echo "Data berhasil di update.";
				}else if($pesan == "hapus"){
					echo "Data berhasil di hapus.";
				}
			}
			?>
			<br/>
			<a href="index.php">Home</a> ||
			<a class="tombol" href="index.php?page=form-input-menit">+ Tambah Data Baru</a>
			<br><br>
			<div class="table-responsive">
			<table border="1" class="table">
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>5 Menit</th>
					<th>10 Menit</th>
					<th>15 Menit</th>
					<th>30 Menit</th>
					<th>45 Menit</th>
					<th>60 Menit</th>
					<th>120 Menit</th>
					<th>3 Jam</th>
					<th>6 Jam</th>
					<th>12 Jam</th>
					<th>Opsi</th>		
				</tr>
				<?php 
				include "koneksi.php";
				$sql = "SELECT * FROM hujan ORDER BY tanggal ASC";
				$hasil=mysqli_query($conn,$sql);
				$nomor = 1;
				while($data = mysqli_fetch_array($hasil)){
				?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo date ( 'd F Y' , strtotime ($data['tanggal'])); ?></td>
					<td><?php echo $data['lima']; ?></td>
					<td><?php echo $data['sepuluh']; ?></td>
					<td><?php echo $data['limabelas']; ?></td>
					<td><?php echo $data['tigapuluh']; ?></td>
					<td><?php echo $data['empatlima']; ?></td>
					<td><?php echo $data['enampuluh']; ?></td>
					<td><?php echo $data['seratusduapuluh']; ?></td>
					<td><?php echo $data['tigajam']; ?></td>
					<td><?php echo $data['enamjam']; ?></td>
					<td><?php echo $data['duabelasjam']; ?></td>
					<td>
						<a class="edit" href="?page=edit-menit&id=<?php echo $data['id']; ?>">Edit</a> |
						<a class="hapus" href="?page=hapus-menit&id=<?php echo $data['id']; ?>">Hapus</a>					
					</td>
				</tr>
				<?php } ?>
			</table>
			</div>
	</div>
	</div>
	</div>
	</div>