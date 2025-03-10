
    function multiplicar(id_i) {

      m1 = document.getElementById("num1").value;

      r = m1 * id_i;

      if (typeof score !== 'undefined') { // Si score está definido no hacemos nada



      } else { // Si no está definido es igual a cero

        score = 0;


      }

      if (document.getElementById(id_i).value == r) {

        document.getElementById(id_i).classList.remove('is-invalid');
        document.getElementById(id_i).classList.add('is-valid');

        score++; //Suma 1 punto

        if (score == 4) {
          $('#premio').modal({
            show: true
          });
        }

        if (score == 7) {
          $('#premio2').modal({
            show: true
          });
        }

        if (score == 11) {
          $('#premio3').modal({
            show: true
          });
        }

      } else {

        document.getElementById(id_i).classList.remove('is-valid');
        document.getElementById(id_i).classList.add('is-invalid');

      }


    }
 