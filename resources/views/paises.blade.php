<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <h1 class = "text-info">Lista de paises</h1>
    <table class="table table-striped table-dark">
         <tr>
             <th>Nombre</th>
             <th>Capital</th>
             <th>Moneda</th>
             <th>Población</th>
         </tr>

         @foreach ($naciones as $nombre => $nacion )
          <tr>
             <td>{{$nombre }}</td>
             <td>{{$nacion["capital"] }}</td>
             <td>{{$nacion["moneda"] }}</td>
             <td>{{$nacion["poblacion"] }}</td>
          <tr>
         @endforeach
    </table>
</body>
</html>