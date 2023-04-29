<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CONTROLE DE PESAGEM - MAPA UNICESUMAR</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Contole De Pessagem</h1>
</div>
  
<div class="container">
  <div class="row">


    <div class="col-sm-4">
      <h3>Tiket/Nota Fiscal</h3>
      @foreach ($tikets as $tiket)
        <p>{{$tiket}}</p>
        @endforeach
    </div>


    <div class="col-sm-4">
      <h3>Peso Liquido</h3>
      @foreach ($weights as $weight)
      <p>{{$weight}}</p>
      @endforeach
    </div>


    <div class="col-sm-4">
      <h3>Motorista</h3>  
      @foreach ($drivers as $driver)
      <p>{{$driver}}</p>     
      @endforeach 
    </div>


  </div>
</div>
</body>
</html>    
    </body>
</html>
