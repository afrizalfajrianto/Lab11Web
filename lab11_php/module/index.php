<div class="container">
<?php require('../template/header.php'); ?>
    <h1>DATA BARANG</h1>
    <a class="tambah" href="tambah.php">Tambah Barang</a>
        <div class="main">
            
            <table>
                <!-- Table header -->
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <!-- Display data from the database -->
                <?php if($result && mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td>
                            <td><?= $row['nama'];?></td>
                            <td><?= $row['kategori'];?></td>
                            <td><?= $row['harga_beli'];?></td>
                            <td><?= $row['harga_jual'];?></td>
                            <td><?= $row['stok'];?></td>
                            <td>
                                <a class="ubah" href="ubah.php?id=<?= $row['id_barang'];?>">Ubah</a>
                                <a class="hapus" href="hapus.php?id=<?= $row['id_barang'];?>">Hapus</a> 
                            </td>
                        </tr>
                    <?php endwhile; else: ?>
                     
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
        <?php require('../template/footer.php')?>
</div>
    

