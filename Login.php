
<!DOCTYPE html>
<html lang="en">


<body role="document">



<div class="container theme-showcase" role="main">

    <div class="jumbotron">
       <center> <font size='8' color='teal'>Bienvenido</font></center>
        <div class='table-responsive sok_font'>
        <?php
        echo"<center><form class='sam'  action='valida.php' method='POST'>

	   <table class='table table-bordered' >

	   	   <tr>
	   &nbsp;&nbsp;<font size='4' color='teal'>Usuario:<br></font><input class='roundeb matricula' type='text' name ='usuario' size='40'></tr>

<br><tr>&nbsp;&nbsp;<font size='4' color='teal'>Password:<br></font><input class='roundeb' type='password' name='password' size='40'></tr>

	   <tr><br><br><input class='btn btn-info' type='submit' value='Entrar' ></tr>

	   </Table>
	   </form></center>";
        ?>
            </div>
    </div>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>