const btn_post = document.querySelector(".post");
const divLog = document.querySelector("#log");

const nomePaciente = document.querySelector("#nomePaciente");
const senhaPaciente = document.querySelector("#senhaPaciente");
const enderecoPaciente = document.querySelector("#enderecoPaciente");
const telefonePaciente = document.querySelector("#telefonePaciente");
const numeroBeneficiario = document.querySelector("#numeroBeneficiario");
const doencasPrevias = document.querySelector("#doencasPrevias");
const remedioDeUsoContinuo = document.querySelector("#remedioDeUsoContinuo");

btn_post.addEventListener("click", _post);

function _post(event) {
  event.preventDefault();

  if (
    nomePaciente.value != "" &&
    senhaPaciente.value != "" &&
    enderecoPaciente.value != "" &&
    telefonePaciente.value != "" &&
    numeroBeneficiario.value != "" &&
    doencasPrevias.value != "" &&
    remedioDeUsoContinuo.value != ""
  ) {
    let paciente = {
      nomePaciente: nomePaciente.value,
      senhaPaciente: senhaPaciente.value,
      enderecoPaciente: enderecoPaciente.value,
      telefonePaciente: telefonePaciente.value,
      numeroBeneficiario: numeroBeneficiario.value,
      doencasPrevias: doencasPrevias.value,
      remedioDeUsoContinuo: remedioDeUsoContinuo.value,
    };

    let url = "http://localhost/ConexaoMysql/insert/insert.php";
    fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(paciente),
    })
      .then(function (response) {
        return response.text();
      })
      .then(function (response) {
        divLog.innerHTML = response;
      });
  } else {
    alert("Cheque os campos e tente novamente");
  }
}
