<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<?php include('layout/head.php') ?>
<body>
  <?php include('layout/navbar.php') ?>
    <div class="container">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Contacto</h1>
            <p class="lead">Envianos tu consulta, te responderemos en breve</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12" id="alert"></div>
      <form class="form-horizontal" id="">
		  <div class="form-group" id="emailDiv">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-4">
		      <input type="email" class="form-control" id="email" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group" id="messageDiv">
		    <label for="message" class="col-sm-2 control-label">Mensaje</label>
		    <div class="col-sm-10">
		      <textarea name="message" class="form-control" id="message" placeholder="Mensaje" rows="4"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <a type="submit" class="btn btn-primary" onclick="submitContactForm(this)">Enviar</a>
		    </div>
		  </div>
	   </form>
    </div>
  <?php include('layout/footer.php') ?>
  <script src="js/contacto.js"></script>
</body>
</html>