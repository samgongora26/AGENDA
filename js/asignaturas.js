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
    
    var miPeticion2 = getXMLHTTPRequest();
    var recarga_nav = getXMLHTTPRequest();
    


function guardar_materia(){
    var materia = document.form_materia.materia.value;
    var maestro = document.form_materia.maestro.value;
    var color = document.form_materia.color.value;
    var url = "./asignaturas/guardar_materia.php?materia=" + materia+ "&"+"maestro="+maestro+"&"+"color="+color;
    
    miPeticion2.open("GET", url, true);
    miPeticion2.onreadystatechange=respuesta_agragar;
    miPeticion2.send(null);
    respuesta_agragar.open("GET","#",true);
    respuesta_agragar.onreadystatechange=respuesta_agragar1;
    respuesta_agragar.send(null);
  }
  
  function respuesta_agragar(){
    if(miPeticion2.readyState == 1) {
      document.getElementById("carga_materia").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion2.readyState == 4) {
    if(miPeticion2.status == 200) {
     var mitexto=miPeticion2.responseText;
     document.getElementById("carga_materia").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion2.statusText);
            }
    }
  }

  function respuesta_agragar1(){
    if(respuesta_agragar.readyState == 1) {
      document.getElementById("carga_nav").innerHTML="<center>Loading...</center>";
    }
    else if(respuesta_agragar.readyState == 4) {
    if(respuesta_agragar.status == 200) {
     var mitexto=respuesta_agragar.responseText;
     document.getElementById("carga_nav").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + respuesta_agragar.statusText);
            }
    }
  }


  function editar_materia(id){
    var id;
    var materia = document.getElementById('nueva_materia'+id).value;
    var maestro = document.getElementById('nuevo_maestro'+id).value;
    var color = document.getElementById('nuevo_color'+id).value;
    var url = "./asignaturas/editar_materia.php?materia=" + materia+ "&"+"maestro="+maestro+"&"+"color="+color+"&"+"id="+id;
    
    miPeticion2.open("GET", url, true);
    miPeticion2.onreadystatechange=respuesta_editar;
    miPeticion2.send(null);
  }

  function respuesta_editar(){
    if(miPeticion2.readyState == 1) {
      document.getElementById("carga_materia").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion2.readyState == 4) {
    if(miPeticion2.status == 200) {
     var mitexto=miPeticion2.responseText;
     document.getElementById("carga_materia").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion2.statusText);
            }
    }
  }


  function eliminar_materia(id){
    var id;
    var url = "./asignaturas/eliminar_materia.php?id="+id;
    miPeticion2.open("GET", url, true);
    miPeticion2.onreadystatechange=respuesta_eliminar;
    miPeticion2.send(null);
  }

  function respuesta_eliminar(){
    if(miPeticion2.readyState == 1) {
      document.getElementById("carga_materia").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion2.readyState == 4) {
    if(miPeticion2.status == 200) {
     var mitexto=miPeticion2.responseText;
     document.getElementById("carga_materia").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion2.statusText);
            }
    }
  }