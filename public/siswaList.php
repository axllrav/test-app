<?php require_once "connect.php"; ?>

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
                <td width="200px">Nama</td>
                <td width="80px">Kelas</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM students JOIN classes ON classes.kode_kelas = students.kode_kelas';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nis'] ?></td>
                        <td><?= $row['nama_siswa'] ?></td>
                        <td><?= $row['nama_kelas'] ?></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="4">Data kosong</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><a href="inputSiswa.php">Masukkan data siswa</a>
</div>