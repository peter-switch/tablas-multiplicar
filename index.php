<?php include 'template/header.php'; ?>
<title>Tablas de multiplicar del 1 al 10 para niños</title>
<meta name="description" content="Aprende y repasa las tablas de multiplicar en cualquier sitio y forma divertida. Diseñado por un papá y su hija."/>
</head>

<body>


  <div class="container">

    <div class="row">

      <div class="col-md-3"></div>


      <div class="col-md-6">

        <br /><br />
        <br /><br />

        <div class="card">


          <div class="card-header">

          </div>
          <div class="card-body">
            <form name="multiform" method="get" action="tablas.php">
              <div class="form-group">
                <h2>¿Qué tabla quieres repasar?</h2>
                <br />
                <select class="form-select form-select-lg" name="tabla" id="tabla" onchange="verificar()">
                  <option selected disabled hidden value="">-- Seleccionar --</option>
                  <option value="0">La tabla del 0</option>
                  <option value="1">La tabla del 1</option>
                  <option value="2">La tabla del 2</option>
                  <option value="3">La tabla del 3</option>
                  <option value="4">La tabla del 4</option>
                  <option value="5">La tabla del 5</option>
                  <option value="6">La tabla del 6</option>
                  <option value="7">La tabla del 7</option>
                  <option value="8">La tabla del 8</option>
                  <option value="9">La tabla del 9</option>
                  <option value="10">La tabla del 10</option>
                </select>
              </div>
              <br />
              <div class="d-grid gap-2">
                <button type="submit" id="enviar" class="btn btn-lg btn-primary" disabled="true">¡VAMOS ALLÁ!</button>
              </div>
              <br />
            </form>
          </div>


        </div>
        <br/><br/>
        <figcaption class="blockquote-footer">
        <cite>by NahiaPains && <a href="https://github.com/peter-switch" title="Github" target="_blank">PeterSwitch</a></cite>
                </figcaption>
        
        















      </div>

      <div class="col-md-3"></div>


    </div>
  </div>

<?php include 'template/footer.php';?>