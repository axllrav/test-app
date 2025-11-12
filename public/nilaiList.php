<?php require_once "connect.php"; ?>

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
            <tr class="judul">
                <th rowspan="2">Kode Nilai</th>
                <th rowspan="2">NIS</th>
                <th rowspan="2">Kode Mapel</th>
                <th rowspan="2">Kelas</th>
                <th rowspan="2">Guru</th>
                <th colspan="6">Nilai</th>
            </tr>
            <tr>
                <th>Hadir</th>
                <th>Formatif</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir <br>(NA)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM scores JOIN subjects ON scores.kode_mapel = subjects.kode_mapel
                                         JOIN students ON students.nis = scores.nis
                                         JOIN classes ON classes.kode_kelas = students.kode_kelas
                                         JOIN teachers ON teachers.kode_guru = subjects.kode_guru';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?= $row['kode_nilai'] ?></td>
                        <td><?= $row['nis'] ?></td>
                        <td><?= $row['nama_mapel'] ?></td>
                        <td><?= $row['nama_kelas'] ?></td>
                        <td><?= $row['nama_guru'] ?></td>
                        <td><?= $absen = round(($row['kehadiran'] / 18 ) * 5,2) ?></td>
                        <td><?= $row['formatif'] ?></td>
                        <td><?= $row['tugas'] ?></td>
                        <td><?= $row['uts'] ?></td>
                        <td><?= $row['uas'] ?></td>
                        <td><?= $hasil = $absen + ($row['tugas'] * 0.1) + ($row['formatif'] * 0.15) + ($row['uts'] * 0.3) + ($row['uas'] * 0.4);?></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="10">Data kosong</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><a href="inputNilai.php">Masukkan data siswa</a>
</div>