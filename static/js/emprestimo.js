function calcular() {

    const value = document.getElementById('value').value;
    const fee = document.getElementById('fee').value / 100;


    const total = value * (1 + fee) ** fee;

    document.getElementById('total').innerHTML = ("R$" + total.toFixed(2).replace('.', ','));

}
document.getElementById('value').addEventListener('blur', function () {
    calcular();
});
document.getElementById('fee').addEventListener('blur', function () {
    calcular();
});


function mascara(valor) {
    var valorAlterado = valor.value;
    valorAlterado = valorAlterado.replace(/\D/g, ""); 
    valorAlterado = valorAlterado.replace(/(\d+)(\d{2})$/, "$1,$2"); 
    valorAlterado = valorAlterado.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."); 
    valorAlterado = "R$ " + valorAlterado;
    valor.value = valorAlterado;
  }
  function openNav() {
    document.getElementById("mySidenav").style.width = "205px";
    document.querySelector(".logo").style.boxShadow = "none";
    document.querySelector(".logo:hover").style.transition = "none";
    document.querySelector(".logo:hover").style.transform = "none";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.querySelector(".logo").style.boxShadow = "rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset";
  }