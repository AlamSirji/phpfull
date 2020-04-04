<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Winner Winner Chicken Dinner</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="jumbotron">Winner Winner Chicken Dinner</h1>
    <div class="container-fluid">
      <form class="" action="" method="post">
        <label for="n">Match details</label>
        <div class="form-group">
            <input class="form-control" type="number" name="n" placeholder="Total number of players (min = 1, max = 100)" min="1", max="100" value="<?php echo isset($_POST['n'])?$_POST['n']:'' ?>">
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="start" value="Enter player names">
          <!-- <input class="btn btn-danger" type="reset" name="reset" value="Exit Match"> -->
        </div>
      </form>
    </div>

    <?php
      if (isset($_POST['start'])) {
        if (isset($_POST['n']) && $_POST['n'] >= 1) {

          $i = 1;
          $n = isset($_POST['n'])?$_POST['n']:'';
          $formStart = <<< string
          <div class='container-fluid'>
          <form action='' method='post'>
          <input type='hidden' name='n' value='$n'>
          string;

          $formEnd = <<< string
          <div class='form-group'><input class='btn btn-secondary' type='submit' name='result' value="Play"></div>
          </form></div>
          string;

          echo $formStart;

            while ($i <= $_POST['n']){
              echo "<div class='form-group'><input class='form-control' type='text' placeholder='Player $i name' name='playerNames[]'></div>";
              $i++;
            }

          echo $formEnd;
        }
      } elseif (isset($_POST['result'])) {
        if (isset($_POST['playerNames'])) {
          $allPlayers = $_POST['playerNames'];

          $tableStart = <<< string
          <div class='container-fluid'><table class='table table-striped table-sm'><tr><th>Rank</th><th>Player Name/ID</th></tr>
          string;

          $tableEnd = <<< string
          </table></div>
          string;

          echo $tableStart;
          shuffle($allPlayers);
          foreach ($allPlayers as $key => $value) {
            $rank = $key + 1;
            $player = ($value == "")? rand() : $value;
            echo "<tr><td>$rank</td><td>$player<td></tr>";
          }
          echo "<div class='form-group'><input class='btn btn-secondary' type='button' onClick='window.location.reload();' value='Re-play'></div>";
          echo $tableEnd;

        }
      }
     ?>
  </body>
</html>
