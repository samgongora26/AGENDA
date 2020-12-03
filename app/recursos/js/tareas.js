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
    
    var miPeticion1 = getXMLHTTPRequest();
    


//-------------------------------LISTA DE TAREAS-------------------------------

//-----------ELIMINAR TAREA------------------
function eliminar_tarea(id){
    var id;
    //alert("id " +id);
    var url = "./resumen/eliminar_tarea.php?id=" + id;
    miPeticion1.open("GET", url, true);
    miPeticion1.onreadystatechange=respuesta_eliminar_tarea;
    miPeticion1.send(null);
  }
  
  function respuesta_eliminar_tarea(){
    if(miPeticion1.readyState == 1) {
      document.getElementById("todo_list").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion1.readyState == 4) {
    if(miPeticion1.status == 200) {
     var mitexto=miPeticion1.responseText;
     document.getElementById("todo_list").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion1.statusText);
            }
    }
  }
  
  //--------------MARCAR TAREA
  function marcar_tarea(id){
    var id;
    //alert("id tarea" +id);
    var url = "./resumen/marcar_tarea.php?id=" + id;
    miPeticion1.open("GET", url, true);
    miPeticion1.onreadystatechange=respuesta_marcar_tarea;
    miPeticion1.send(null);
  }
  
  function respuesta_marcar_tarea(){
    if(miPeticion1.readyState == 1) {
      document1.getElementById("todo_list").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion1.readyState == 4) {
    if(miPeticion1.status == 200) {
     var mitexto=miPeticion1.responseText;
     document.getElementById("todo_list").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion1.statusText);
            }
    }
  }
  
  //----------------GUARDAR TAREA
  function guardar_tarea(){
    var tarea = document.getElementById('tarea').value;
    //alert("tarea " +tarea);
    var url = "./resumen/guardar_tarea.php?tarea=" + tarea;
    miPeticion1.open("GET", url, true);
    miPeticion1.onreadystatechange=respuesta_eliminar_tarea;
    miPeticion1.send(null);
  }
  
  function respuesta_marcar_tarea(){
    if(miPeticion1.readyState == 1) {
      document.getElementById("todo_list").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion1.readyState == 4) {
    if(miPeticion1.status == 200) {
     var mitexto=miPeticion1.responseText;
     document.getElementById("todo_list").innerHTML=mitexto;
            } else {
              alert("Ha ocurrido un error: " + miPeticion1.statusText);
            }
    }
  }
  