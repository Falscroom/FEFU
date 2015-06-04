<?php
class Controller_Create_Event extends Controller
{
    function __construct() {
        $this->view = new View();
        $this->model = new Model_Create_Event();
    }
    function action_index()
    {

        $files = $this->get_files_array(array('create_event_style.css'));
        $this->view->generate('create_event_view.php',$files);
    }
}