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
