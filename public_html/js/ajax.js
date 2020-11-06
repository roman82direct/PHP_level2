let button = document.getElementById('showMore');
let cont = document.getElementById('showContent');
let textId = document.getElementsByClassName('itemId');

button.onclick = (event) => {
    event.preventDefault();
        jQuery.ajax({                   //$.ajax
        url: '../controllers/shownext.php',
        method: 'GET',
        dataType: 'html',
        data: "next=" + textId[textId.length - 1].innerText,
        success: function(html){
            if (html){
                cont.innerHTML += html;
            } else {
                button.innerText = 'Все товары загружены';
                button.style.color = 'red';
                button.onclick = null;
            }
        }
    })
}

document.getElementById('signForm').onsubmit(function (){
    $.ajax({
        type: "POST",
        url: "../controllers/register.php",
        data: $(this).serialize(),
        success: function(html){
            $("#existUser").html(html);
        }
    });
    return false;
});