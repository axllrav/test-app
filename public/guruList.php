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
                <td>No</td>
                <td>Kode Guru</td>
                <td>Nama Guru</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM teachers';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['kode_guru'] ?></td>
                        <td><?= $row['nama_guru'] ?></td>
                <?php
                }
            }
                ?>
        </tbody>
    </table>
    <a href="inputGuru.php">Masukkan mapel baru</a>
</div>