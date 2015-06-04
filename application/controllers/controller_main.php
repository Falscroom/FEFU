<?php
class Controller_Main extends Controller
{
    function __construct() {
        $this->view = new View();
        $this->model = new Model_Main();
    }
    function action_index()
    {

        $files = $this->get_files_array(array('main_style.css','main_update_height.js','main_create_dates.js','moment.js','menu_style.css','main_scrolling.js'));
        $data['authorization'] = $this->model->mainApproveLogin();
        $this->view->generate('main_view.php',$files,$data);
    }
}