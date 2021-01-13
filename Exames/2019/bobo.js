let section = document.querySelector('#tic-tac-toe')
let codeSquares = document.querySelectorAll('#tic-tac-toe .square')

codeSquares.forEach((element) => {
    element.addEventListener("click", squareClick)
})

function parseResponse() {
    let response = JSON.parse(this.responseText)

    for (let i = 0; i<codeSquares.length; i++)
        codeSquares[i].innerHTML = response.squares[i]

    document.querySelector('#tic-tac-toe #state').innerHTML = response.state
}

function squareClick(e){
    if (e.target.innerHTML !== 'X' && e.target.innerHTML !== 'O'){
        sendAJAX(section.getAttribute('data-id'),
            Array.prototype.indexOf.call(codeSquares, e.target) + 1)
    }
}

function sendAJAX(id, position){
    let request = new XMLHttpRequest()
    request.open('POST', 'play.php', true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener('load', parseResponse)
    let data = {id:id}
    if (position) data.position = position
    request.send(encodeForAjax(data))
}

function encodeForAjax(data) {
    return Object.keys(data).map(function(k){
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&')
}

sendAJAX(section.getAttribute('data-id'))