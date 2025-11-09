<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    include 'navigation.php';
    ?>

    <?php
    if (isset($_GET['menu'])) {
        if ($_GET['menu'] == 'all') {
            include 'index__.php';
        } elseif ($_GET['menu'] == 'siswa') {
            include 'siswaList.php';
        } elseif ($_GET['menu'] == 'mapel') {
            include 'mapelList.php';
        } elseif ($_GET['menu'] == 'guru') {
            include 'guruList.php';
        } else {
            echo 'Navigasi tidak tersedia';
        }
    } else {
        include 'home.php';
    }

    ?>
</body>

</html>