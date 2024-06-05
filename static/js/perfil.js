let saldo = 30.00;
let fatura = 1000.00;
let saldoVisivel = false;

$("#btnSaldo").click(() => {
    if (saldoVisivel) {
        $("#sal").text("●●●●●")
        $("#btnSaldo").text("Mostrar")
    } else {
        $("#sal").text("R$ "+saldo.toFixed(2).replace('.', ','))
        $("#btnSaldo").text("Esconder")
    }
    saldoVisivel = !saldoVisivel;
})
$("#btnFatu").click(() => {
    if (saldoVisivel) {
        $("#fatu").text("●●●●●")
        $("#btnFatu").text("Mostrar")
    } else {
        $("#fatu").text("R$ "+fatura.toFixed(2).replace('.', ','))
        $("#btnFatu").text("Esconder")
    }
    saldoVisivel = !saldoVisivel;
})