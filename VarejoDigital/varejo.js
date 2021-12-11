
addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle("stick", window.scrollY > 0);
});


function toggleMenu(){
    const menuToggle = document.querySelector('.menuToggle');
    
    const navigation = document.querySelector('.navigation');
    
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}



function texto(){
    var div = document.getElementById('log');
    var texto = 'Varejo Digital é qualidade!';

    function escrever(str, el) {
        var char = str.split('').reverse();
        var typer = setInterval(function() {
            if (!char.length) return clearInterval(typer);
            var next = char.pop();
            el.innerHTML += next;
        }, 100);
    }
    escrever(texto, div);
}