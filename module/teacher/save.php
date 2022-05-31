<?php
if (isset($_POST['save'])) {
    include('config.php');
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $photo = $_POST['photo'];
    $wa = $_POST['wa'];

    $sql = "INSERT INTO teachers (nip, name, pob, dob, photo, wa) VALUES ('$nip', '$name' , '$pob', '$dob', '$photo', '$wa')";
    if (mysqli_query($config, $sql)) {
        echo '<script>window.location.href="?m=subject&s=view"</script>';
    } else {
        echo '<script>alert("Data gagal disimpan!"); window.location.href="?m=subject&s=add"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}