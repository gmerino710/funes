// cambiar de color segun el valor
var prioridades = ['importante','urgente','no importante','Completada']; 
var typo = document.querySelector("#tipo").innerHTML;

     //funciones
     prioridad(typo);

function prioridad (x) {
  
   
    if (x==prioridades[2]) {
      var normal =typo.fontcolor("green");
      document.getElementById("tipo").innerHTML = normal;
      
      
    } 
    if (x==prioridades[0]) {
      var normal =typo.fontcolor("yellow");
      document.getElementById("tipo").innerHTML = normal;
      
  } 
  if (x==prioridades[1]) {
    var normal =typo.fontcolor("red");
      document.getElementById("tipo").innerHTML = normal; 
    
  } 

  if (x==prioridades[3]) {
    var normal =typo.fontcolor("green");
      document.getElementById("tipo").innerHTML = normal; 
      quitarnbtn(typo)
  } 
    
   }

   function quitarnbtn(x) {
     if (x ==prioridades[3]) {
        let jum = document.getElementById('jumbo');
        let botonx =document.getElementById('botoni');// la ago hijo
            jum.removeChild(botonx);
          console.log('elinminado');
      }
   }
alert(delete_all);
    
