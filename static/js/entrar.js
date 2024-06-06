$("#form-entrar").on("submit", async (event) => {
    event.preventDefault();
    const entries = Object.fromEntries(new FormData(/**@type {HTMLFormElement} */ ($("#form-entrar")[0])).entries());
    console.log(entries);
    // TODO: descomentar
    // for (let entry in entries) {
    //     if (!entries[entry]) {
    //         // TODO: Mostrar modal de erro caso campo esteja vazio
    //         console.error(`Campo ${entry} esta vazio!`);
    //         return false;
    //     }
    // }
    const response = await $.ajax({method: "POST", data:entries, url:"api/login.php"});
    try {
        const respostaJson = JSON.parse(response);
        if (respostaJson.tipo === "erro") {
            const erro = respostaJson.mensagem;
            // TODO: Mostrar modal com erro acima
            console.error(erro);
            return false;
        }
    } catch (e) {
        /** @type {string} */
        const respostaString = response;
        console.log(respostaString);
    }
    
})