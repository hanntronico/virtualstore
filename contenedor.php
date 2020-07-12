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




<?php include 'ofertas.php'; ?>