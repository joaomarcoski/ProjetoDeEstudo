function chamar_api(){
    varCEP = document.querySelector("#cep");
    console.log(varCEP.value)
	fetch('https://brasilapi.com.br/api/cep/v1/' + varCEP.value)
	  .then(response => response.json())
	  .then(data => exibir_cep(data));
}

function exibir_cep(data){
	document.querySelector("#cidade").value = data.city;
    document.querySelector("#bairro").value = data.neighborhood;
    document.querySelector("#uf").value = data.state;
    document.querySelector("#endereco").value = data.street;
}

function Cadastrar(){
    alert('Usuário Cadastrado')
}
