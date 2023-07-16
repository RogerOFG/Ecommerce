var botonUsu = document.getElementById('tUsu');
var botonProd = document.getElementById('tProd');
var botonSoli = document.getElementById('tSoli');

var tablaUsu = document.getElementById('box-tablaUser');
var tablaProd = document.getElementById('box-tablaProductos');
var tablaSoli = document.getElementById('box-tablaCompras');

var iconU = document.getElementById('iconU');
var iconP = document.getElementById('iconP');
var iconS = document.getElementById('iconS');

botonUsu.addEventListener('click', function(){
    if(tablaUsu.classList.contains('ocultar')){
        tablaUsu.classList.remove('ocultar');
        iconU.classList.remove('ocultar');
    }else{
        tablaUsu.classList.add('ocultar');
        iconU.classList.add('ocultar');
    }
});

botonProd.addEventListener('click', function(){
    if(tablaProd.classList.contains('ocultar')){
        tablaProd.classList.remove('ocultar');
        iconP.classList.remove('ocultar');
    }else{
        tablaProd.classList.add('ocultar');
        iconP.classList.add('ocultar');
    }
});

botonSoli.addEventListener('click', function(){
    if(tablaSoli.classList.contains('ocultar')){
        tablaSoli.classList.remove('ocultar');
        iconS.classList.remove('ocultar');
    }else{
        tablaSoli.classList.add('ocultar');
        iconS.classList.add('ocultar');
    }
});