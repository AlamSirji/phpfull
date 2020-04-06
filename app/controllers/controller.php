<?php
require_once("../app/models/model.php");
class Controller
{
  protected $model;
  public function __construct(){
    $this->model = new Model();
  }
  public function load(){
    $this->model->printSyllabus();
    if (isset($_GET['addNewTopic']) && $_GET['addNewTopic'] == 'true') {
      require_once(VIEWS . "addNewTopicForm.php");
      if (isset($_POST['saveTopic'])) {
        // print_r($_POST);
      }
    }
  }
}
