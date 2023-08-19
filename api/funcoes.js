let Cli = [];
let itens = [];

function carregaCliente() {

    fetch('./listagem_cliente.php')
    .then(function(response)
        {return response.text();})
    .then(function(dados)
        {
            Cli = dados;
            let select = document.getElementById('Input_Id_Cpf');
            select.innerHTML = '';
            for (let i = 0; i < Cli.length; i++) {
                let opt = document.createElement('option');
                opt.innerText = Cli[i].Nom_Cliente;
                opt.setAttribute('value', Cli[i].Id_Cpf)
                select.append(opt);
            }
        })
}

function desenhaItens (itens){
        let tbody = document.getElementById('tbody');
        tbody.innerHTML= '';
        for (let i = 0; i< itens.length; i++){
            let tr = document.createElement('tr');
            let td1 = document.createElement('td');

            td1.innerText = itens[i].Nom_Cliente;

            tr.append(tr);
            tbody.append(tr);
        }
}

window.addEventListener('load', function () {
    carregaCliente();
    document.getElementById('btMais').addEventListener('click', function (a){
    a.preventDefault();
    let qualCliente = document.getElementById('Input_Id_Cpf').selectedIndex;
    itens.push({
        "Nom_Cliente": Cli[qualCliente].Nom_Cliente
    })
    desenhaItens(itens);
    })
    
    document.getElementById('btSalvar').addEventListener('click', function(a){})
    document.forms[0].addEventListener('submit', function(a){
        a.preventDefault();
    })
})

