<!DOCTYPE html>
<html>
<?php include('layout/head.html') ?>
<body>
  <?php include('layout/navbar.html') ?>
    <div class="container">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>United</h1>
            <p class="lead">Ubuntu orange and unique font</p>
          </div>
        </div>
      </div>
      <div id="products" class="col-lg-12">
         <div class="col-lg-4">
            <a href="product.php?name=ohio">
              <div class="product" style="background: url('img/ohio/logo.png');background-size: 340px 340px; background-repeat: no-repeat;background-position: center;"></div>
            </a>
         </div>
         <div class="col-lg-4">
            <a href="product.php?name=otro">
             <div class="product" style="background: url('img/ohio/logo.png');background-size: 340px 340px; background-repeat: no-repeat;background-position: center;"></div>
            </a>
         </div>
         <div class="col-lg-4">
            <a href="product.php?name=otro2">
             <div class="product" style="background: url('img/ohio/logo.png');background-size: 340px 340px; background-repeat: no-repeat;background-position: center;"></div>
            </a>
         </div>
      </div>
    </div>
  <?php include('layout/footer.html') ?>
</body>
</html>