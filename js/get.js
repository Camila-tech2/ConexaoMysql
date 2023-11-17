var btn_get = document.querySelector(".get");
btn_get.addEventListener("click", _get);

function _get(event) {
  event.preventDefault();
  let url = "http://localhost/ConexaoMysql/select/selectPaciente.php";

  fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (response) {
      console.log(response);
    });
}
