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
    
    var miPeticion3 = getXMLHTTPRequest();
    


function guardar_maestro(){
    var nombre = document.form_maestros.nombre_maestro.value;
    var apellido = document.form_maestros.apellido_maestro.value;
    var url = "./maestros/guardar_maestro.php?nombre=" + nombre+ "&"+"apellido="+apellido;
    miPeticion3.open("GET", url, true);
    miPeticion3.onreadystatechange=respuesta_agragar;
    miPeticion3.send(null);
  }
  
  function respuesta_agragar(){
    if(miPeticion3.readyState == 1) {
      document.getElementById("recarga_maestros").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion3.readyState == 4) {
    if(miPeticion3.status == 200) {
     var mitexto=miPeticion3.responseText;
     document.getElementById("recarga_maestros").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion3.statusText);
            }
    }
  }

  function editar_maestro(id){
    var id;
    var nombre = document.getElementById('nuevo_nombre'+id).value;
    var apellido = document.getElementById('nuevo_apellido'+id).value;
    var url = "./maestros/editar_maestro.php?nombre="+nombre+"&"+"apellido="+apellido+"&"+"id="+id;
    miPeticion3.open("GET", url, true);
    miPeticion3.onreadystatechange=respuesta_editar;
    miPeticion3.send(null);
  }

  function respuesta_editar(){
    if(miPeticion3.readyState == 1) {
      document.getElementById("recarga_maestros").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion3.readyState == 4) {
    if(miPeticion3.status == 200) {
     var mitexto=miPeticion3.responseText;
     document.getElementById("recarga_maestros").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion3.statusText);
            }
    }
  }


  function eliminar_maestro(id){
    var id;
    var url = "./maestros/eliminar_maestro.php?id="+id;
    miPeticion3.open("GET", url, true);
    miPeticion3.onreadystatechange=respuesta_eliminar;
    miPeticion3.send(null);
  }

  function respuesta_eliminar(){
    if(miPeticion3.readyState == 1) {
      document.getElementById("recarga_maestros").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion3.readyState == 4) {
    if(miPeticion3.status == 200) {
     var mitexto=miPeticion3.responseText;
     document.getElementById("recarga_maestros").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion3.statusText);
            }
    }
  }