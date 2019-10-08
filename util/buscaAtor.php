<?php
require_once 'conn.php';
$search = $_GET['id_ator'];
$query = $conn->query("SELECT id, ator from ator WHERE `setor` LIKE '%$search%'") or die(mysqli_connect_errno());

$list = array();
$rows = $query->num_rows;

if ($rows > 0) {
    while ($fetch = $query->fetch_assoc()) {
        $data['value'] = $fetch['ator'];

        array_push($list, $data);
    }
}

echo json_encode($list);
?>