// отработка показа доп карточек в галерее
let showbutton = document.getElementById('showMore');
let cont = document.getElementById('showContent');
let textId = document.getElementsByClassName('itemId');

showbutton.onclick = (event) => {
    event.preventDefault();
        jQuery.ajax({   //$.ajax
            // url: '../controllers/C_Catalog.php',
        url: '../models/showNext.php',
        method: 'GET',
        dataType: 'html',
        data: "next=" + textId[textId.length - 1].innerText,
        success: function(html){
            if (html){
                cont.innerHTML += html;
            } else {
                showbutton.innerText = 'Все товары загружены';
                showbutton.style.color = 'red';
                showbutton.onclick = null;
            }
        }
    })
}

// показ инфо в админке
let admButGoods = document.getElementById('admGoods');
let admContGoods = document.getElementById('showGoods');
admButGoods.onclick = (event) => {
    event.preventDefault();
    $.ajax({
        url: '../models/adminGoods.php',
        method: 'GET',
        dataType: 'html',
        data: "next=1",
        success: function(html){
            if (html){
                admContGoods.innerHTML += html;
            } else {
                admContGoods.innerText = 'Ошибка загрузки';
            }
        }
    })
}

// let userCont = document.getElementById('existUser');
// document.getElementById('signForm').onsubmit = (e) => {
//     e.preventDefault();
//     $.ajax({
//         url: "../controllers/register.php",
//         method: 'POST',
//         dataType: 'html',
//         data: $(this).serialize(),
//         success: function(resp){
//             console.log(resp);/*Пустая строка...*/
//             if(resp) {
//                 userCont.innerText = resp;
//             } else {
//                 userCont.innerText = 'Error';
//             }
//         }
//     })
// }