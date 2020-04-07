<div class="container-fluid p-3">
  <h2 class="alert alert-secondary">CORE Topics</h2>
  <div id="accordion">

  <?php
  $qry = "SELECT * FROM topics";
  $res = $GLOBALS['conn']->query($qry);
  while ($row = mysqli_fetch_assoc($res)) {
    printCard($row['id'],$row['name'],$row['description'],);
  }

  function printCard($id,$name,$description){
    $card = <<< EOT
    <div class="card">
      <div class="card-header" id="$id">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapse$id" aria-expanded="true" aria-controls="collapse$id">
            $name
          </button>
        </h5>
      </div>

      <div id="collapse$id" class="collapse" aria-labelledby="$id" data-parent="#accordion">
        <div class="card-body">
          $description
        </div>
      </div>
    </div>

    EOT;
    echo $card;
  }

  ?>

  </div>
</div>
