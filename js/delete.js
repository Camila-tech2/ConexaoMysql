// selecionei o botão
var btn_delete = document.querySelector('.del')
btn_delete.addEventListener('click', _delete)


function _delete(event) {
    event.preventDefault()
    let produto = {id: 4226}

    let url = "http://localhost/api_rest/back.php"
    fetch(url,{
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(produto)
    })
    .then(function (response) {return response.json()})
    .then(function (response) {console.log(response)})
    
}