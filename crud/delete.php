<?php
require '../conn.php';
$id = $_GET["id"];
mysqli_query($conn,"DELETE FROM accounts WHERE id = $id");

if (mysqli_affected_rows($conn)> 0){
    echo "
    <script>
        alert('data berhasil dihapus')
        document.location.href = 'index.php'
    </script>";
}else{
    echo "
    <script>
        alert('data gagal dihapus!')
        document.location.href = 'index.php'
    </script>";

}
?>