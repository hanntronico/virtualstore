<?php 

$res=@mysqli_query($link, "set names utf8");
$row=@mysqli_fetch_array($res);
// select * from producto where estado=1 and stock <> 0 ORDER BY 1 DESC limit 0,4
// $res=mysqli_query("select * from producto where estado=2 and stock <> 0 ORDER BY 1 limit 0,3",$link);
$sql = "SELECT * FROM producto WHERE estado=2 AND stock <> 0 ORDER BY 1 LIMIT 0,3";
$res=@mysqli_query($link, $sql);
    // $row=mysqli_fetch_array($res);
?>

          <section id="land" class="py-5">


            <div class="jumbotron">
              <h1 class="display-3">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
            </div>

            <?php //include 'slider/slider_gp.php'; ?>




          </section>



<!-- <div class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->



<?php include 'ofertas.php'; ?>