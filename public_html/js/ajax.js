let button = document.getElementById('showMore');
let cont = document.getElementById('showContent');
let textId = document.getElementsByClassName('itemId');

button.onclick = (event) => {
    event.preventDefault();
        $.ajax({
        url: '../controllers/shownext.php',
        method: 'GET',
        dataType: 'html',
        data: "next=" + textId[textId.length - 1].innerText,
        success: function(html){
            if (html){
                cont.innerHTML += html;
            } else {
                button.innerText = 'Все товары загружены';
                button.onclick = null;
            }
        }
    })
}