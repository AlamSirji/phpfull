<?php

$sectionStart = <<< EOT
<div class="container-fluid">
  <table class="table table-sm table-striped table-hover">
    <tr>
      <th>Key</th>
      <th>Value</th>
    </tr>
EOT;

$sectionEnd = <<< EOT
  </table>
</div>
EOT;

$sectionsToPrint = array(
  '$_Server'=>$_SERVER,
  '$_GET'=>$_GET,
  '$_POST'=>$_POST,
  '$_COOKIE'=>$_COOKIE,
  '$_REQUEST'=>$_REQUEST,
  '$_FILES'=>$_FILES,
  '$_ENV'=>$_ENV,
  '$_SESSION'=>(session_status()!=PHP_SESSION_NONE)?$_SESSION:NULL
);

foreach ($sectionsToPrint as $k => $v) {
  if (isset($v)) {
    echo "
    <h4 class='alert alert-info m-2'>
      Super Global Variable: $k
    </h4>";
    echo $sectionStart;
    foreach ($v as $k2 => $v2) {
      echo "<tr><td>$k2</td><td>$v2</td></tr>";
    }
    echo $sectionEnd;
  }
}

print_r($GLOBALS);
