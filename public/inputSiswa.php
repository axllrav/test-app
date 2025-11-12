<?php include 'navigation.php';
require_once 'connect.php'; ?>

<div>
    <form action="siswaProcess.php" method="POST">
        <table>
            <tr>
                <td>NIS</td>
                <td><input name="nis" id="" placeholder="Masukkan NIS" required maxlength="9"></td>
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
                        $sql = 'SELECT * FROM students JOIN classes ON classes.kode_kelas = students.kode_kelas';
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='$row[kode_kelas]'>$row[nama_kelas]</option>";
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