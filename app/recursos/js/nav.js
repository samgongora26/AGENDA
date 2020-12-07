// FUNCION PARA OCULTAR ITEMS Y MOSTRAR SOLO LOS DE CADA MODULO SELECCIONADO

function mostrar_item(item){
    //alert("hola");  
    var item;
    switch(item){
        case 1: //RESUMEN
                document.getElementById('resumen').style.display = 'flex';
                document.getElementById('maestros').style.display = 'none';
                document.getElementById('calificaciones').style.display = 'none';
                document.getElementById('materia').style.display = 'none';
                break;
        case 2: //Calificaciones
                document.getElementById('resumen').style.display = 'none';
                document.getElementById('maestros').style.display = 'none';
                document.getElementById('calificaciones').style.display = 'flex';
                document.getElementById('materia').style.display = 'none';
                break;
        case 3: //ASIGNATURAS
                document.getElementById('resumen').style.display = 'none';
                document.getElementById('maestros').style.display = 'none';
                document.getElementById('calificaciones').style.display = 'none';
                document.getElementById('materia').style.display = 'flex';
                break;
        case 4: //MAESTROS
                document.getElementById('resumen').style.display = 'none';
                document.getElementById('maestros').style.display = 'block';
                document.getElementById('calificaciones').style.display = 'none';
                document.getElementById('materia').style.display = 'none';
                break;

    }
}