var buttons = document.querySelectorAll('.button');
var h2 = document.getElementById('escogido');

buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        buttons.forEach(function(btn) {
            btn.classList.remove('active');
        });

        this.classList.add('active');

        h2.textContent = this.textContent;
    });
});