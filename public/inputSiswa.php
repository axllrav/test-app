<?php include 'navigation.php'; ?>

<div>
    <form action="siswaProcess.php" method="POST">
    <table>
        <tr>
            <td>NIS</td>
            <td><input name="nis" id="" placeholder="Masukkan NIS" required maxlength="8"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="" placeholder="Masukkan Nama" required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <select name="kelas" id="kelas">
                    <option value="0">Pilih kelas..</option>
                    <?php
                        $kelas = $_SESSION['kelas'];
                        foreach($kelas as $items){
                            echo "<option value='$items[kelas]'>$items[kelas]</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
    
    </form>
    
</div>