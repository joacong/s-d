<?php
  switch($_GET['name']){
    case 'ohio':
      $title = "Seguros Ohio";
      $name = "ohio";
      $description = "Breve descripcion de seguros ohio";
      $size = 12;
      break;
    default:
      $title = "Producto no encontrado";
      $name = "none";
      $description = "Lamentablemente el producto no ha sido encontrado";
      $size = 0;
      break;
  }
?>

<!DOCTYPE html>
<html>
<?php include('layout/head.html') ?>
<body>
  <?php include('layout/navbar.html') ?>
    <div class="container">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1><?= $title ?></h1>
            <p class="lead"><?= $description ?></p>
          </div>
        </div>
      </div>

      <div id="carousel-example-generic" class="carousel slide col-lg-offset-1 col-lg-10" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php for($i = 0; $i < $size; $i++){
            $_class = "";
            if($i == 0)
              $_class = "active";
          ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>" class="<?= $_class ?>"></li>
          <?php } ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php for($i = 0; $i < $size; $i++){
              $_class = "item";
              if($i == 0)
                $_class = "item active";
            ?>
            <div class="<?= $_class ?>">
              <img src="img/<?= $name ?>/<?= $name ?>-<?= $i ?>.png" alt="logo">
            </div>
          <?php } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  <?php include('layout/footer.html') ?>
</body>
</html>