<?php
session_start();
$email = $_SESSION["usuario_email"] ?? "visitante";
?>
<script>
    localStorage.setItem("usuarioAtual", "<?= $email ?>");
    window.location.href = "index.php";
</script>