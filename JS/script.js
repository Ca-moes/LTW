/* 4.
 console.log(document.getElementsByTagName('form'))
console.log(document.querySelector('form label:nth-child(2) input'))
console.log(document.querySelectorAll('form label input'))

let nodelist = document.getElementsByTagName('form')
for (let item of nodelist)
    console.log(item.outerHTML)
console.log(document.querySelector('form label:nth-child(2) input').outerHTML)
document.querySelectorAll('form label input').forEach((elem)=>console.log(elem.outerHTML)) 
*/

let form = document.getElementsByTagName('form')[0]
form.addEventListener('submit', (event) => {
    const row = document.createElement('tr')
    row.innerHTML = '<td>' + document.querySelectorAll('form label input')[0].value + 
    '</td><td><input value="'+ document.querySelectorAll('form label input')[1].value +
    '"></td><td><input type="button" value="Remove"></td>'

    alert('Submitted!') 
    document.getElementsByTagName('table')[0].appendChild(row)
    update_remove()
    event.preventDefault() 
})

update_total()

function update_remove(){
    let table = document.querySelectorAll('table tr')
    for (let i = 0; i<table.length; i++) {
        if (table[i].querySelectorAll('td').length != 0) {
            table[i].querySelectorAll('input')[1].addEventListener('click', 
            () => {table[i].remove()}
            )
        }
    }
}


function update_total(){
    let span = document.querySelector('span')
    let values = document.querySelectorAll('td input')
    console.log(values)
    span.innerHTML= 1
    console.log(span.innerHTML)
}



