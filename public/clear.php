<?php
    include "navigation.php";
    session_start();

    session_destroy();

    echo "Successfully clear data";

?>