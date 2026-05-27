<?php
session_start();
session_destroy();
?>
<script>
    localStorage.setItem("usuarioAtual", "visitante");
    window.location.href = "index.php";
</script>