<?
$pg = isset($_GET['pg']) ? $_GET['pg'] : 1 ;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Aprendendo Bootstrap</title>
  </head>
  <body>

    <div class="container-fluid">
        <br>
        <br>
        <br>
        <ul class="pagination">
            <li class="page-item <?php echo ($pg == 1 ) ? 'disabled' : '';?>"><a href="#" class="page-link">Anterior</a></li>
            <li class="page-item <?php echo ($pg == 1 ) ? 'active' : '';?>"><a href="#" class="page-link">1</a></li>
            <li class="page-item <?php echo ($pg == 2) ? 'active' : '';?>"><a href="#" class="page-link">2</a></li>
            <li class="page-item <?php echo ($pg == 3) ? 'active' : '';?>"><a href="#" class="page-link">3</a></li>
            <li class="page-item <?php echo ($pg == 3 ) ? 'disabled' : '';?>"><a href="#" class="page-link">Próximo</a></li>
        </ul>
        

    </div>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>