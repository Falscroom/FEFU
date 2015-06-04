<!DOCTYPE html>
<html>
<head>
    <?php include 'application/views/'.$files['header']['file']; ?> <!--// Скорее всего тут Tamplate_header или другое если задано вручную в контроллере-->
</head>
<body>
<?php include 'application/views/'.$content_view; ?> <!--// Файл с HTML странички можно и модульности допилить!-->
<?php /*include 'application/views/menu_view.php'; */?> <!--TODO это меню здесь навсегда! -->
</body>
</html>