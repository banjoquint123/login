<?php

echo "<h1>Hello world</h1>";
include 'settings.php';
include'library.php';
function connect_sql()
	{
		/**
		 * Database handle
		 *
		 * @global $dbh
		 */
		global $dbh;
	
		/**
		 * @todo Remove the try/catch block once development is done
		 */
		try {
				
			$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB, DB_USER, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => true));	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo 'database connected.';
	
		} catch (Exception $e) {
	
			echo 'Error occurred ' . $e->getMessage();
			exit;
		}
	}
	
	connect_sql();
	log_message("\nDatabase connected and open ");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="login/css/login.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Probably need to put header here -->
    <!-- Followed by some navigation -->
    <!-- Then some body content -->
    <div class='container'>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    			<h5 class="modal-title" id="exampleModelLabel">Modal Title</h5>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<div class="modal-body">
    			 <p>This is the body</p>
    			 <a href="#">Click here</a>
    			</div>
    			<div class="modal-footer">
    				<p>The footer</p>
    				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    				<button type="button" class="btn btn-primary" id="save">Save Changes</button>
    			</div>"
    		</div>
    	</div>
    </div>
    
    <!-- Probably go for a footer here -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script type="text/javascript" src="login/js/login.js"></script>
  </body>
  <!-- login page -->
  <div>
 <button  type="button" class="btn button-primary" data-toggle="modal" data-target="#myModal">Click for Modal</button>
  </div>

<!-- forgotten password -->


<!-- register page -->


</html>
