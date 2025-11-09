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
            if (isset($_SESSION['mapel'])) {
                $mapel = $_SESSION['mapel'];

                foreach ($mapel as $key => $items) {

            ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $items['kodeMapel'] ?></td>
                        <td><?= $items['namaMapel'] ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['guru'])) {
                                foreach ($_SESSION['guru'] as $itemGuru) {
                                    if ($itemGuru['kodeGuru'] == $items['kodeGuru']) {
                                        echo $itemGuru['namaGuru'];
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <a href="inputMapel.php">Masukkan mapel baru</a>
</div>