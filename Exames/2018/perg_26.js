let listing = document.querySelectorAll('#game li')
let inp = document.querySelector('input[type="text"]')
listing.forEach(element => {
    if (element.className != "used") {
        element.addEventListener('click', (e) => {
            element.classList.add("used")
            inp.value = inp.value + element.innerHTML
        })
    }
});

let reset = document.querySelector('#game input[name="reset"]')
reset.addEventListener('click', (e) => {
    listing.forEach(element => element.classList = [])
    inp.value = ""
})

let send = document.querySelector('#game input[name="send"]')
console.log(send)
send.addEventListener('click', (e) => {
    let request = new XMLHttpRequest()

    request.open("post", "is_guess_correct.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener('load', messageReceived)
    request.send(encodeForAjax({guess: inp.value}))
})

function messageReceived(){
    let response = JSON.parse(this.responseText)
    console.log(response)

    if (response.result == "wrong"){
        alert("WRONG")
    } else if (response.result == "correct"){
        inp.value = ""
        let list = document.querySelector('#game ul')
        list.innerHTML=""
        response.word.forEach((element)=>{
            console.log(element)
            let item = document.createElement('li')
            item.innerHTML = element
            list.append(item)
        })
    }
}

function encodeForAjax(data) {
    return Object.keys(data).map(function(k){
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&')
}