$("#form-registro").on("submit", async (event) => {
    event.preventDefault();

    // @ts-ignore
    const entries = Object.fromEntries(new FormData(/**@type {HTMLFormElement} */ ($("#form-registro")[0])).entries());
    console.log(entries);

    // TODO: descomentar
    // for (let entry in entries) {
    //     if (!entries[entry]) {
    //         // TODO: Mostrar modal de erro caso campo esteja vazio
    //         console.error(`Campo ${entry} esta vazio!`);
    //         return false;
    //     }
    // }

    if (entries["senha"] !== entries["senha_confirmar"]) {
        $("#janela").modal();
        console.error("Senhas nao coincidem");
        return;
    }

    const response = await $.ajax({method: "POST", data:entries, url:"api/registro.php"});
    try {
        const respostaJson = JSON.parse(response);
        if (respostaJson.tipo === "erro") {
            const erro = respostaJson.mensagem;
            $("#janela").modal();
            console.error(erro);
            return false;
        }
    } catch (e) {
        /** @type {string} */
        const respostaString = response;
    }
})