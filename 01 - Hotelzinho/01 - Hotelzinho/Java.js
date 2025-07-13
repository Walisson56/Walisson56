function adicionarNaTabela() {
    const nomeCrianca = document.getElementById("nomeCrianca").value;
    const dataNascimento = document.getElementById("dataNascimento").value;
    const nomeResponsavel = document.getElementById("nomeResponsavel").value;
    const telefone = document.getElementById("telefone").value;
    const infoAdicionais = document.getElementById("infoAdicionais").value;

    if (nomeCrianca && dataNascimento && nomeResponsavel && telefone) {
        const tabela = document.getElementById("tabela").getElementsByTagName("tbody")[0];
        const novaLinha = tabela.insertRow();

        const dataHoraAtual = new Date().toLocaleString();

        novaLinha.insertCell(0).innerText = dataHoraAtual;
        novaLinha.insertCell(1).innerText = nomeCrianca;
        novaLinha.insertCell(2).innerText = dataNascimento;
        novaLinha.insertCell(3).innerText = nomeResponsavel;
        novaLinha.insertCell(4).innerText = telefone;
        novaLinha.insertCell(5).innerText = infoAdicionais;

        novaLinha.onclick = function() {
            tabela.deleteRow(novaLinha.rowIndex - 1);
        };

        document.getElementById("nomeCrianca").value = '';
        document.getElementById("dataNascimento").value = '';
        document.getElementById("nomeResponsavel").value = '';
        document.getElementById("telefone").value = '';
        document.getElementById("infoAdicionais").value = '';
    } else {
        alert("Preencha todos os campos obrigatórios!");
    }
}
