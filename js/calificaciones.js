function getXMLHTTPRequest(){
    var req = false;
    try{
        req = new XMLHttpRequest(); /* p.e. Firefox */
      }
    catch(err1){
      try{
         req = new ActiveXObject("Msxml2.XMLHTTP");
      /* algunas versiones IE */
        }
      catch(err2){
        try{
           req = new ActiveXObject("Microsoft.XMLHTTP");
      /* algunas versiones IE */
          }
          catch(err3){
             req = false;
            }
        }
      }
    return req;
    }
    
    var miPericion4 = getXMLHTTPRequest();
    


function guardar_parcial(){
    var nombre = document.form_parciales.nombre.value;
    var url = "./calificaciones/guardar_parcial.php?nombre=" + nombre;
    miPericion4.open("GET", url, true);
    miPericion4.onreadystatechange=respuesta_agregar_parcial;
    miPericion4.send(null);
  }
  
  function respuesta_agregar_parcial(){
    if(miPericion4.readyState == 1) {
      document.getElementById("recarga_calificaciones").innerHTML="<center>Loading...</center>";
    }
    else if(miPericion4.readyState == 4) {
    if(miPericion4.status == 200) {
     var mitexto=miPericion4.responseText;
     document.getElementById("recarga_calificaciones").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPericion4.statusText);
            }
    }
  }

  
function guardar_calificacion(){
    var calificacion = document.form_guardar_calificacion.calificacion.value;
    var materia = document.form_guardar_calificacion.materia.value;
    var parcial = document.form_guardar_calificacion.parcial.value;
    var url = "./calificaciones/guardar_calificacion.php?calificacion=" + calificacion+"&"+"materia="+materia+"&"+"parcial="+parcial;
    miPericion4.open("GET", url, true);
    miPericion4.onreadystatechange=respuesta_agregar_calificacion;
    miPericion4.send(null);
  }
  
  function respuesta_agregar_calificacion(){
    if(miPericion4.readyState == 1) {
      document.getElementById("recarga_calificaciones").innerHTML="<center>Loading...</center>";
    }
    else if(miPericion4.readyState == 4) {
    if(miPericion4.status == 200) {
     var mitexto=miPericion4.responseText;
     document.getElementById("recarga_calificaciones").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPericion4.statusText);
            }
    }
  }

  
  function editar_calificacion(id){
    var id;
    var calificacion = document.getElementById('nueva_calificacion'+id).value;
    var materia = document.getElementById('nueva_materia'+id).value;
    var parcial = document.getElementById('nuevo_parcial'+id).value;
    var url = "./calificaciones/editar_calificacion.php?calificacion="+calificacion+"&"+ "materia=" + materia+ "&"+"parcial="+parcial+"&"+"id="+id;
    miPericion4.open("GET", url, true);
    miPericion4.onreadystatechange=respuesta_editar_calificacion;
    miPericion4.send(null);
  }

  function respuesta_editar_calificacion(){
    if(miPericion4.readyState == 1) {
      document.getElementById("recarga_calificaciones").innerHTML="<center>Loading...</center>";
    }
    else if(miPericion4.readyState == 4) {
    if(miPericion4.status == 200) {
     var mitexto=miPericion4.responseText;
     document.getElementById("recarga_calificaciones").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPericion4.statusText);
            }
    }
  }

  function el_calificacion(id){
    var id;
    alert(id);
    var url = "./calificaciones/eliminar_calificacion.php?id="+id;
    miPericion4.open("GET", url, true);
    miPericion4.onreadystatechange=respuesta_eliminar_calificacion;
    miPericion4.send(null);
  }

  function respuesta_eliminar_calificacion(){
    if(miPericion4.readyState == 1) {
      document.getElementById("recarga_calificaciones").innerHTML="<center>Loading...</center>";
    }
    else if(miPericion4.readyState == 4) {
    if(miPericion4.status == 200) {
     var mitexto=miPericion4.responseText;
     document.getElementById("recarga_calificaciones").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPericion4.statusText);
            }
    }
  }


 