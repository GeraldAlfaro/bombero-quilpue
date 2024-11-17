document.addEventListener('DOMContentLoaded', () => {
    /* const botones = document.querySelectorAll('.boton-martires')
    for(i = 0; i < botones.length; i++) {
        botones[i].addEventListener('click', () => {
            // quitar line clamp de la etiqueta p
            let p = document.querySelectorAll('.parrafo-martires')
            p.forEach((elemento) => {
                elemento.style.display = "block"
                elemento.style.whiteSpace = "normaL";
                elemento.style.overflow = "visible";
                elemento.style.lineClamp = "none"
            })
        })
    } */
   console.log(document.querySelectorAll('.boton-martires'))
   const botones = document.querySelectorAll('.boton-martires');
   let parrafosMartires = document.querySelectorAll('.parrafo-martires')
   botones[0].addEventListener('click', () => {
        parrafosMartires[0].style.display = "block";
        parrafosMartires[0].style.whiteSpace = "normaL";
        parrafosMartires[0].style.overflow = "visible";
        parrafosMartires[0].style.lineClamp = "none";
        botones[0].style.display = "none";console.log('Botones:', botones);
})
   botones[1].addEventListener('click', () => {
    parrafosMartires[1].style.display = "block"
    parrafosMartires[1].style.whiteSpace = "normaL";
    parrafosMartires[1].style.overflow = "visible";
    parrafosMartires[1].style.lineClamp = "none";
    botones[1].style.display = "none";
})
botones[2].addEventListener('click', () => {
    parrafosMartires[2].style.display = "block"
    parrafosMartires[2].style.whiteSpace = "normaL";
    parrafosMartires[2].style.overflow = "visible";
    parrafosMartires[2].style.lineClamp = "none";
    botones[2].style.display = "none";
})
});