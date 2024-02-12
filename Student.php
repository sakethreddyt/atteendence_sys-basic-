<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <style>
		body{
			      background-image:url('st.jpg');
            background-repeat:no-repeat;
            background-size:cover;
        }
		</style>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Student Login</h1>
          </div>
          <div class="panel-body">
            <form action="c2.php" method="post">
              <div class="form-group">
                <label for="rn">Registrartion Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="rn"
                  name="rn"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          </div>
      </div>
  </body>
</html>
