const btn_put = document.querySelector(".put");
const divLog = document.querySelector("#log");

const idPaciente = document.querySelector("#id_usuario");
const senhaPaciente = document.querySelector("#senha_usuario");

btn_put.addEventListener("click", _put);

function _put(event) {
  event.preventDefault();
  let paciente = {
    id: idPaciente.value,
    senha: senhaPaciente.value,
  };

  let url = "./update.php";
  fetch(url, {
    method: "PUT",
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
}
