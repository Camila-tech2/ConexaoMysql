const btn_delete = document.querySelector(".del");
const divLog = document.querySelector("#log");

const id = document.querySelector("#id_usuario");

btn_delete.addEventListener("click", _delete);

function _delete(event) {
  event.preventDefault();
  let paciente = { id: id.value };

  let url = "./delete.php";
  fetch(url, {
    method: "DELETE",
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
