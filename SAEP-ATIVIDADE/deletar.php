<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM alunos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Aluno excluído com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao excluir o aluno: " . $conn->error;
    }

    $conn->close();
}
// Exclusão de Registros --> feita em 01/10 11:10  6)
?>
