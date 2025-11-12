<?php include 'navigation.php'; require_once 'connect.php'; ?>
<div>
    <form action="mapelProcess.php" method="POST">
        <table>
            <tr>
                <td>Kode Mapel</td>
                <td><input type="text" name="kodeMapel" id="" placeholder="Masukkan kode mapel" required></td>
            </tr>
            <tr>
                <td>Nama Mapel</td>
                <td><input type="text" name="namaMapel" id="" placeholder="Masukkan nama mapel" required></td>
            </tr>
            <tr>
            
                <td>Guru</td>
                <td>
                    <select name="kodeGuru" id="kodeGuru">
                        <option value="-1">Pilih guru..</option>
                        <?php

                        $sql = 'SELECT * FROM subjects JOIN teachers ON teachers.kode_guru = subjects.kode_guru';
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            
                            echo "<option value='$row[kode_guru]'>$row[nama_guru]</option>";
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