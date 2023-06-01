<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $database =  new Database();
    $db = $database->getConnection();

    $deleteSql = "DELETE FROM karyawan WHERE id = ?";
    $stmt = $db->prepare($deleteSql);
    $stmt->bindParam(1, $_GET['id']);
    if ($stmt->execute()) {
        $_SESSION['hasil'] = true;
    }else {
        $_SESSION['hasil'] = false;
    }  {
        $hapusSql = "DELETE FROM pengguna WHERE id = ?";
        $stmt = $db->prepare($hapusSql);
        $stmt->bindParam(1, $_GET['id']);
        if ($stmt->execute()) {
            $_SESSION['hasil'] = true;
        } else {
            $_SESSION['hasil'] = false;
        }
    }
}
echo "<meta http-equiv='refresh' content='0;url=?page=karyawanread'>";
?>