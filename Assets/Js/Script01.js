$(function () {

  var formulario = $('#formu');
  var cancelar =$('#cancel');
  var delite = $('#kino');
  var no_hay =$('#no_jay');
// text muestra datos
//text()


  formulario.css("display","none");

  $('#nueva').click(function (e) { 
    e.preventDefault();
// boton para esconder

    formulario.toggle('slow');
    
  });
/*
  $('#formu').submit(function (e) { 
    e.preventDefault();

    var data={
      Item:$('input[name="Item"]').val(),
      Descripcion:$('input[name="Descripcion"]').val()
    };
    
    // elemnto ajax
    $.ajax({
      type:"post",
      url:$(this).attr('action'),
      data: data,
      success: function (response) {
        console.log('correcto');
        
      },
      error:function (response){3
        console.log('error');
      }
    });
    // pata evitar que se  rtrecgar
   
  });

 

*/
    function desabili_btn(no_hay) {
          if (no_hay.text()!="Sin datos") {
              delite.hide();
          } 
          if (!no_hay.text()) {
             delite.show();
        }
    }  
// funcion
    desabili_btn(no_hay);
    // utilizar ajax para insertar con jquer
    
}

)