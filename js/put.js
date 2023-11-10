var btn_put = document.querySelector('.put')
btn_put.addEventListener('click', _put)


function _put(event) {
    event.preventDefault()
    let produto = {id: 4226}

    let url = "http://localhost/api_rest/back.php"
    fetch(url,{
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(produto)
    })
    .then(function (response) {return response.json()})
    .then(function (response) {console.log(response)})
    
}