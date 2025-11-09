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
            if (isset($_SESSION['guru'])) {
                $mapel = $_SESSION['guru'];

                foreach ($mapel as $key => $items) {

            ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $items['kodeGuru'] ?></td>
                        <td><?= $items['namaGuru'] ?></td>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <a href="inputGuru.php">Masukkan mapel baru</a>
</div>