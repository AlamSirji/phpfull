<?php
require_once("../app/models/model.php");
class Controller
{
  protected $model;
  public function __construct(){
    $this->model = new Model();
  }
  public function load(){
    if (isset($_GET['game'])) {
      switch ($_GET['game']) {
        case 'wwcd':
          $this->model->playGame('wwcd');
          break;

        default:
          $this->model->printSyllabus();
          break;
      }
    } elseif (isset($_GET['topic'])) {
        switch ($_GET['topic']) {
          case 'superGlobals':
            $this->model->printTopic("superGlobals");
            break;

          default:
            $this->model->printSyllabus();
            break;
        }
    } else {
      $this->model->printSyllabus();
    }
  }
}
