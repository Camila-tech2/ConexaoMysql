var btn_post = document.querySelector('.post')
btn_post.addEventListener('click', _post)

function _post(event){
    event.preventDefault();
    // selecionando objetos html
    
    let produto = {
        id: 1,
        nome: "adfasd",
        preco: 5.00
    }

    let url = "http://localhost/api_rest/back.php"
    fetch(url,{
        method: "POST",
        headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(produto)
    })
    .then(function (response) {
        return response.json()
    })
    .then(function (response) {
        console.log(response)
    })
}
