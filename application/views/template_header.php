<title>Bootstrap</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--/////////////////////////////////////////////////////////////////////
//////////////////// Константные файлы, для всех страниц    /////////////-->
<link href="/FEFU/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="/FEFU/js/jquery-2.1.3.min.js"></script>
<script src="/FEFU/js/bootstrap.min.js"></script>
<link href="/FEFU/css/all_style.css" rel="stylesheet" media="screen">
<!--/////////////////////////////////////////////////////////////////////
///// Данные файлы добавляются динамически из контроллера-->

<?php foreach($files['header']['css'] as $css_file_name): ?>
    <link href="/FEFU/css/<?=$css_file_name ?>" rel="stylesheet" media="screen">
<?php endforeach; ?>

<?php foreach($files['header']['js'] as $js_file_name): ?>
    <script src="/FEFU/js/<?=$js_file_name ?>"></script>
<?php endforeach; ?>

<!--    foreach($files['header']['js'] as $js_file_name) {
        echo '<script src="/FEFU/js/{$js_file_name}"></script>';
    }

    foreach($files['header']['css'] as $css_file_name) {
        echo '<link href="/FEFU/css/{$css_file_name}" rel="stylesheet" media="screen">';
    }-->
