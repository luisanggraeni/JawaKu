<?php
session_start();
session_destroy();
exit("<script>location.href='login_admin.php';</script>")
?>