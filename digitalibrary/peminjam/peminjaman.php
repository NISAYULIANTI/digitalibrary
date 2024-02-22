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
            <a href="tambah_peminjaman.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Buku</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>
						<th>Status Peminjaman</th>
						<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
		            include '../koneksi.php';
		            $no = 1;
		            $data = mysqli_query($koneksi,"SELECT * FROM  peminjaman INNER JOIN user ON peminjaman.id_user=user.id_user INNER JOIN buku ON peminjaman.id_buku=buku.id_buku WHERE peminjaman.id_user=" . $_SESSION['id_user']." ORDER BY id_peminjaman ASC");
		            while($d = mysqli_fetch_array($data)){
			            ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['username']; ?></td>
							<td><?php echo $d['judul']; ?></td>
							<td><?php echo $d['tanggal_peminjaman']; ?></td>
							<td><?php echo $d['tanggal_pengembalian']; ?></td>
							<td><?=($d['status_peminjaman']== 1 ?"Dipinjam":"DIkembalikan") ?></td>
                            <td>
                                <?php if($d['status_peminjaman']== 1){?><a href="edit_peminjaman.php?id_peminjaman=<?php echo $d['id_peminjaman']; ?>" class="btn btn-warning btn-sm  mb-3">Edit</a><?php }?>
                                <a href="proses_hapus_peminjaman.php?id_peminjaman=<?php echo $d['id_peminjaman']; ?>" class="btn btn-danger btn-sm  mb-3">Hapus</a>
                            </td>
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