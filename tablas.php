<?php include 'template/header.php'; ?>
<?php $numTabla = isset($_GET["tabla"]) ? $_GET["tabla"] : ""; ?>

<title>Juego de multiplicaciones para niños de primaria</title>
<meta name="description" content="Un divertido juego para aprender tranquilamente las tablas de multiplicar y aprobar primiria sin complicaciones."/>
</head>

<body onload="cambiar();">


  <div class="container">

    <div class="row">

      <div class="col-md-3"></div>


      <div class="col-md-6">

        <br />


        


          <h3 class="col py-2">> La tabla del <?php echo $numTabla ?>...</h3>
      
            <div class="form-group">
              <fieldset>


                <table class="table table-sm table-hover table-borderless">

                  <?php for ($i = 0; $i <= 10; $i++) { ?>

                    <tr>

                      <td><input class="form-control form-control-lg" type="number" id="num1" value="<?php echo $numTabla ?>" placeholder="<?php echo $numTabla ?>" disabled=""></td>

                      <td class="align-middle"><?php echo 'X'; ?></td>


                      <td><input class="form-control form-control-lg" type="number" placeholder="<?php echo $i ?>" disabled=""></td>


                      <td class="align-middle"><?php echo '='; ?></td>


                      <td><input type="number" class="form-control form-control-lg" id="<?php echo $i ?>" onchange="multiplicar(this.id);" placeholder="?"></td>


                    </tr>

                  <?php } ?>


                </table>





              </fieldset>
            </div>



          

       

        <div class="row mt-2  text-center">

          <div class="col-sm">
            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=1';">Tabla del 1</button>

            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=2';">Tabla del 2</button>



            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=3';">Tabla del 3</button>


            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=4';">Tabla del 4</button>


            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=5';">Tabla del 5</button>
          </div>


        </div>

        <div class="row mb-2 text-center">

          <div class="col-sm">
            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=6';">Tabla del 6</button>


            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=7';">Tabla del 7</button>



            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=8';">Tabla del 8</button>



            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=9';">Tabla del 9</button>


            <button type="button" class="btn btn-primary btn-sm mt-2 mx-1" onclick="window.location.href='tablas.php?tabla=10';">Tabla del 10</button>
          </div>


        </div>










      </div>

      <div class="col-md-3"></div>




    </div>
  </div>






  <!-- Modal 1-->

  <div class="modal fade" id="premio">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¡Lo estás haciendo genial!</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" id="randomIMG" src="" width="440">



        </div>
        <div class="text-center mb-3">

          <button type="button" class="btn btn-outline-success" data-dismiss="modal">¡CONTINÚA!</button>


        </div>
      </div>
    </div>
  </div>
  <!-- Modal 1-->

  <!-- Modal 2-->

  <div class="modal fade" id="premio2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¡Ya casi lo tienes!</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">
        <img class="img-fluid" id="randomIMG2" src="" width="440">



        </div>
        <div class="text-center mb-3">

          <button type="button" class="btn btn-outline-success" data-dismiss="modal">¡A POR TODAS!</button>


        </div>
      </div>
    </div>
  </div>
  <!-- Modal 2-->


  <!-- Modal 3-->

  <div class="modal fade" id="premio3">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¡Reto superado!</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">
        <img class="img-fluid" id="randomIMG3" src="" width="440">



        </div>
        <div class="text-center mb-3">

          <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='/tablas/';">¿HACEMOS OTRA?</button>


        </div>
      </div>
    </div>
  </div>
  <!-- Modal 2-->







  <?php include 'template/footer.php'; ?>

  