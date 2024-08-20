const text = "Voici le texte que vous souhaitez animer.";
const element = document.getElementById('animated-text');
let index = 0;

function typeWriter() {
    if (index < text.length) {
        element.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 100); // Ajustez la vitesse en changeant la valeur de 100
    }
}

typeWriter();