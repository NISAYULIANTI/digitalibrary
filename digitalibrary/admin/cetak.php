<h2 align="center">Laporan Peminjaman Buku</h2>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
            <table border="1" cellspasing="0" cellpadding="5" width="100%">
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
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['username']; ?></td>
                            <td><?php echo $d['judul']; ?></td>
                            <td><?php echo $d['tanggal_peminjaman']; ?></td>
                            <td><?php echo $d['tanggal_pengembalian']; ?></td>
                            <td><?php echo $d['status_peminjaman']; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <script>
                window.print();
                settimeout(function() {
                    window.close();
                }, 100);
            </script>
        </div>
    </div>
</div>
