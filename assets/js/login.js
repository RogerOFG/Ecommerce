var butonR = document.getElementById('btn-register');
var butonL = document.getElementById('btn-login');

var formLogin = document.getElementById('login');
var formRegister = document.getElementById('register');

let counter = 0;

butonR.addEventListener('click', function() {
    formLogin.classList.add('ocultarL');
    counter = setTimeout(function(){
        formRegister.classList.remove('ocultar');
        formLogin.classList.add('ocultar');
        formLogin.classList.remove('ocultarL');
    }, 400);
});

butonL.addEventListener('click', function() {
    formRegister.classList.add('ocultarR');
    counter = setTimeout(function(){
        formLogin.classList.remove('ocultar');
        formRegister.classList.add('ocultar');
        formRegister.classList.remove('ocultarR');
    }, 400);
});