<?php include 'navigation.php'; ?>
<div>
    <form action="guruProcess.php" method="POST">
    <table>
        <tr>
            <td>Kode Guru</td>
            <td><input type="text" name="kodeGuru" id="" placeholder="Masukkan kode guru" required></td>
        </tr>
        <tr>
            <td>Nama Guru</td>
            <td><input type="text" name="namaGuru" id="" placeholder="Masukkan nama guru" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
        <!-- <tr>
            <td>Aksi</td>
        </tr> -->
    </table>
    
    </form>
</div>