<?php
class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $files = array(), $data = null) // data['header']['css'] названия всех файлов css data['header']['js'] название всех файлов JS
    {
        if(!isset($files['header']['file'])) { // Название файла шаблона для Header
            $files['header']['file'] = 'template_header.php';
        }

/*        if(!isset($files['menu']['file'])) { // Название файла шаблона для Menu
            $files['menu']['file'] = 'menu_view.php';
        }*/

        if(!isset($files['content']['file'])) { // Название файла шаблона для Content
            $files['content']['file'] = 'template_view.php';
        }

        include 'application/views/'.$files['content']['file'];
    }
}