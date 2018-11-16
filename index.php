<!doctype html>
<html lang="en">
  <head>
    <title> Leap years</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="text-center">
        <h1> Leap Years </h1>
            <h2 class="text-muted"> From 1 to 3000 AD </h2>
    </div>
    <br>
        <div class="text-center">
            <h5> The following years are LEAP </h5>
        </div>
        <br>
        <div class="row">
<?php
# Contador d'autoincrement per els anys
        for($counter=1;$counter <= 3000; $counter++){
#Tractament dels nombres generats per les iteracions del for
#Si el residu de la divisió del valor del contador i 4 és 0 passa a la següent condició
#si una de les dues condicions entre els parentesis es compleix es genera la targeta amb el valor del contador.

            if($counter%4==0 && (($counter%100!==0) || $counter%400==0))   {
            ?>
            <div class="card col-sm-2"> 
            <div class="card-header"> <?= $counter; ?> </div>
            </div>
        <?php
            } 
            ?>
          
        <?php
        }
        ?>
        </div>

        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>