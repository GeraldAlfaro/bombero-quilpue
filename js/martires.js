document.addEventListener('DOMContentLoaded', () => {
const botones = document.querySelectorAll('.boton-martires');
const parrafosMartires = document.querySelectorAll('.parrafo-martires');

botones.forEach((boton, index) => {
  boton.addEventListener('click', () => {
    parrafosMartires[index].style.display = "block";
    parrafosMartires[index].style.whiteSpace = "normal";
    parrafosMartires[index].style.overflow = "visible";
    parrafosMartires[index].style.lineClamp = "none";
    boton.style.display = "none";
  });
});
});