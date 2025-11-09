<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
    }
    table .judul {
        margin: 5px;
        text-align: center;
        background-color: peru;
        font-size: 20px;
    }
    td {
        padding: 3px;
    }
</style>
<div>
    <table rules="all" border="">
        <thead>
            <tr class="judul">
                <td width="10px">NO</td>
                <td width="70px">NIS</td>
                <td width="150px">Nama</td>
                <td width="80px">Kelas</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['siswa'])) {
                $siswa = $_SESSION['siswa'];

                foreach ($siswa as $key => $items) {

            ?>
                    <tr>
                        <td align="center"><?= $key + 1 ?></td>
                        <td><?= $items['nis'] ?></td>
                        <td><?= $items['nama'] ?></td>
                        <td align="center"><?= $items['kelas'] ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <a href="inputSiswa.php">Masukkan data siswa</a>
</div>