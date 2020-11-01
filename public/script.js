
var modal = document.getElementsByClassName('modal');
var href = document.getElementsByClassName('a_img');
var span = document.getElementsByClassName('close_modal_window');

for (let i = 0; i < modal.length; i++) {
    href[i].onclick = function () {
        modal[i].style.display = "block";
    }
    span[i].onclick = function () {
        modal[i].style.display = "none";
    }
    window.onclick = function (e){
        for (let i = 0; i <= modal.length+1; i++) {
            let modal = document.getElementById(`modal_${i}`)
            if (e.target == modal) {
                modal.style.display = 'none';
            }
        }
    }
}