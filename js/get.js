var getTable = document.querySelector("#get");

let url = "./selectPaciente.php";
fetch(url)
  .then(function (response) {
    return response.json();
  })
  .then(function (dados) {
    for (var i = 0; i < dados.length; i++) {
      getTable.innerHTML += `
      <tr>
        <th scope="row">${dados[i]["id"]}</th>
        <td>${dados[i]["nomePaciente"]}</td>
        <td>${dados[i]["enderecoPaciente"]}</td>
        <td>${dados[i]["telefonePaciente"]}</td>
        <td>${dados[i]["numeroBeneficiario"]}</td>
        <td>${dados[i]["doencasPrevias"]}</td>
        <td>${dados[i]["remedioDeUsoContinuo"]}</td>
      </tr>
      `;
    }

    console.log(dados);
  });
