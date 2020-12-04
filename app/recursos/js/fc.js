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

var miPeticion = getXMLHTTPRequest();

//------------------------------------EVENTOS INICIO--------------------------
function crear_evento(){
var titulo = document.form_evento.titulo.value;
var descripcion = document.form_evento.descripcion.value;
var fecha = document.form_evento.fecha.value;
var materia = document.form_evento.materia.value;
var color = document.form_evento.color.value;
//alert("titulo "+ titulo+" descripcion "+descripcion + " materia " + materia + " fecha "+ fecha +" color " +color);
var url = "./modulos/resumen/guardar_evento.php?titulo=" + titulo +"&"+"descripcion="+descripcion+"&"+"materia="+materia+"&"+"fecha="+fecha+"&"+"color="+color;
miPeticion.open("GET", url, true);
miPeticion.onreadystatechange=respuestaAjax;
miPeticion.send(null);
//setTimeout('llamarAjax()', 1000);
}
function respuestaAjax() {
if(miPeticion.readyState == 1) {
	document.getElementById("recarga").innerHTML="<center>Loading...</center>";
}
else if(miPeticion.readyState == 4) {
if(miPeticion.status == 200) {
 var mitexto=miPeticion.responseText;
 document.getElementById("recarga").innerHTML=mitexto;
        } else {
		alert("Ha ocurrido un error: " + miPeticion.statusText);
        }
    }
}

//---------------------MARCAR--------------------------------

function marcar_evento(id){
  var id
  //alert("id " +id);
  var url = "./modulos/resumen/marcar_evento.php?id=" + id;
  miPeticion.open("GET", url, true);
  miPeticion.onreadystatechange=respuestaAjax1;
  miPeticion.send(null);
  //setTimeout('llamarAjax()', 1000);
  }
  
  function respuestaAjax1() {
  if(miPeticion.readyState == 1) {
    document.getElementById("recarga").innerHTML="<center>Loading...</center>";
  }
  else if(miPeticion.readyState == 4) {
  if(miPeticion.status == 200) {
   var mitexto=miPeticion.responseText;
   document.getElementById("recarga").innerHTML=mitexto;
          } else {
      alert("Ha ocurrido un error: " + miPeticion.statusText);
          }
      }
  }

  //---------------ELIMINAR EVENTO

  function eliminar_evento(id){
    var id
    //alert("id " +id);
    var url = "./modulos/resumen/eliminar_evento.php?id=" + id;
    miPeticion.open("GET", url, true);
    miPeticion.onreadystatechange=respuestaAjax2;
    miPeticion.send(null);
    //setTimeout('llamarAjax()', 1000);
    }
    
    function respuestaAjax2() {
    if(miPeticion.readyState == 1) {
      document.getElementById("recarga").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion.readyState == 4) {
    if(miPeticion.status == 200) {
     var mitexto=miPeticion.responseText;
     document.getElementById("recarga").innerHTML=mitexto;
            } else {
        alert("Ha ocurrido un error: " + miPeticion.statusText);
            }
        }
    }

//-------------------------------EVENTOS FINAL----------------------------------

