<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ url("buscar") }}" class="form-horizontal">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend>Busqueda en varios motores</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">1.Ingrese el termino de busqueda</label>
                <div class="col-md-4">
                    <input id="termino" name="termino" type="text" placeholder="placeholder" class="form-control input-md">

                </div>
            </div>



            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Motores">2. Seleccione motor de busqueda</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="Motores-0">
                            <input type="radio" name="motores" id="Motores-0" value="1" checked="checked">
                            Google
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-1">
                            <input type="radio" name="motores" id="Motores-1" value="2">
                            Youtube
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-2">
                            <input type="radio" name="motores" id="Motores-2" value="3">
                            Facebook
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-3">
                            <input type="radio" name="motores" id="Motores-3" value="4">
                            Bing
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-4">
                            <input type="radio" name="motores" id="Motores-4" value="5">
                            Ecosia
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-5">
                            <input type="radio" name="motores" id="Motores-5" value="6">
                            Twitter
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-6">
                            <input type="radio" name="motores" id="Motores-6" value="7">
                            DuckDuckGo
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-7">
                            <input type="radio" name="motores" id="Motores-7" value="8">
                            FindX
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-8">
                            <input type="radio" name="motores" id="Motores-8" value="9">
                            Pinterest
                        </label>
                    </div>
                    <div class="radio">
                        <label for="Motores-9">
                            <input type="radio" name="motores" id="Motores-9" value="10">
                            Ask
                        </label>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-danger">Buscar</button>
                </div>
            </div>
        </fieldset>
    </form>

</body>

</html>