let commentForm = document.querySelector('#comments form')
console.log(commentForm)
commentForm.addEventListener("submit", submitComment)

// Fazendo AJAX Ponto 6.  Use the send function to send the data (id, comment_id, username and text). Use the encodeForAjax function described in the slides to help in this step.
async function submitComment(event){
    event.preventDefault()

    let news_id, comment_id, username, text
    let inputs = document.querySelectorAll('#comments form input')
    news_id = inputs[1].value
    username = inputs[0].value
    text = document.querySelector('#comments form textarea').value

    let comments = document.querySelectorAll('article .comment')

    if (comments.length > 0) {
        comment_id = comments[comments.length -1].childNodes[1].textContent
    }

    console.log(username,'\n',news_id,'\n',comment_id,'\n',text)


    let request = new XMLHttpRequest()
    request.addEventListener("load", receiveComments)

    request.open("post", "api_add_comment.php", async)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.send(encodeForAjax({news_id : news_id, comment_id:comment_id, username:username, text:text}))
}

function receiveComments() {
    console.log('here')
}

function encodeForAjax(data) {
    return Object.keys(data).map(function(k){
      return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&')
  }