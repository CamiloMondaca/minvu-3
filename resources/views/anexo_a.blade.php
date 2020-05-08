<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Subsidio Habitacional</title>

        <!-- Miniatura de pestaña de Favicon	 -->
        <link rel="icon" href="img/logo_favicon.png" type="image/png"/>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
        <!-- CSS Propio -->
        <link rel="stylesheet" href="css/inicio.css"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <nav class="navbar">
            <div class="nav-wrapper">
                <img class="logo" src="img/logo.png">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <a class="ministerio">Ministerio de Vivienda y Urbanismo</a>
                </ul>
            </div>
        </nav>
    </head>

    <body>
        <h1 class="text">Sistema Integrado de Subsidio Habitacional</h1> <br>

        <div class="tramo">
            <h5>Ubicación y Preferencia</h5>
            <form class="col s12">
                <p>
                <label>
                    <input name="group1" type="radio" checked/>
                    <span>Tramo 1, Vivienda de hasta 1.800 U.F.</span>
                </label>
                </p>
                <p>
                <label>
                    <input name="group1" type="radio"/>
                    <span>Tramo 2, Vivienda de hasta 2.400 U.F.</span>
                </label>
                </p>
                <p>
                <label>
                    <input name="group1" type="radio"/>
                    <span>Tramo 3, Vivienda de hasta 2.800 U.F.</span>
                </label>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Región de Preferencia</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Comuna de Preferencia</label>
                    </div>
                </div>
            </form>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <footer class="footer">
        <div class="copy">
          © 2020 Gobierno de Chile
        </div>
        <img class="logo_footer" src="https://cdn.digital.gob.cl/images/gob-header.svg">
    </footer>
  </html>