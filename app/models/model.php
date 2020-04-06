<?php
class Model
{
  public function __construct(){
    require_once(VIEWS . "header.php");
  }
  public function printSyllabus(){
    require_once(VIEWS . "syllabus.php");
  }
  public function __destruct(){
    require_once(VIEWS . "footer.php");
  }
}
