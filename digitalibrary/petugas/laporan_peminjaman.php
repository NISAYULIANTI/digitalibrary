<?php
	include 'header.php';
	include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <?php 
	        if(isset($_GET['pesan'])){
		        if($_GET['pesan']=="simpan"){
			        echo "<div class='alert alert-success'>Data Berhasil Disimpan</div>";
		        }
	        }
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="update"){
                    echo "<div class='alert alert-success'>Data Berhasil Diupdate</div>";
                }
            }
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="hapus"){
                    echo "<div class='alert alert-success'>Data Berhasil Dihapus</div>";
                }
            }
	        ?>
			<a href="cetak.php" class="btn btn-primary"><i class="fa fa-print"></i>Cetak Data</a>            
			<table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Buku</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>
						<th>Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
		            include '../koneksi.php';
		            $no = 1;
		            $data = mysqli_query($koneksi,"SELECT * FROM  peminjaman INNER JOIN user ON peminjaman.id_user=user.id_user INNER JOIN buku ON peminjaman.id_buku=buku.id_buku");
		            while($d = mysqli_fetch_array($data)){
			            ?>
                        <tr>
                            <td><?=$no++; ?></td>
                            <td><?=$d['username']; ?></td>
							<td><?=$d['judul']; ?></td>
							<td><?=$d['tanggal_peminjaman']; ?></td>
							<td><?=$d['tanggal_pengembalian']; ?></td>
							<td><?=$d['status_peminjaman']; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
	include 'footer.php';
?>