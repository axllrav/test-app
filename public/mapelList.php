<?php require_once 'connect.php'; ?>
<style>
    table,a {
        margin-left: 10px;
    }
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
            <tr>
                <td>NO</td>
                <td>Kode Mapel</td>
                <td>Nama Mapel</td>
                <td>Guru</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM subjects JOIN teachers ON teachers.kode_guru = subjects.kode_guru';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['kode_mapel'] ?></td>
                        <td><?= $row['nama_mapel'] ?></td>
                        <td><?= $row['nama_guru'] ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <a href="inputMapel.php">Masukkan mapel baru</a>
</div>