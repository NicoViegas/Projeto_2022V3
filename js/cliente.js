const cliente = document.querySelector("#clientes");

const putClientes = async() => {

    const data = await fetch(`http://${location.host}../api/clientes.php`)
    .then(resp => resp.json()).catch(error => false)

    if(!data) return

    inserirClientes(data)
}

const inserirClientes = (data) => {
    data.forEach(linha => {
        console.log(linha[Cliente])
    })
}
putClientes()