<?php include 'navigation.php'; ?>
<div>
    <form action="mapelProcess.php" method="POST">
    <table>
        <tr>
            <td>Kode Mapel</td>
            <td><input type="text" name="kodeMapel" id="" placeholder="Masukkan kode mapel" required ></td>
        </tr>
        <tr>
            <td>Nama Mapel</td>
            <td><input type="text" name="namaMapel" id="" placeholder="Masukkan nama mapel" required></td>
        </tr>
        <tr>
            
            <td>Guru</td>
            <td>
                <select name="kodeGuru" id="kodeGuru">
                    <option value="0">Pilih guru...</option>
                    <?php
                        $guru = $_SESSION['guru'];
                        foreach($guru as $items){
                            echo "<option value='$items[kodeGuru]'>$items[namaGuru]</option>";
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