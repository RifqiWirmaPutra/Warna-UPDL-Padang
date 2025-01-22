document.addEventListener('DOMContentLoaded', function () {
    let slide = document.getElementById('slide');
    let lists = document.querySelectorAll('.item');
    
    // Pindahkan UPDL Padang (misalnya dengan nama "PLN UPDL Padang") ke urutan pertama
    lists.forEach((item) => {
        if (item.querySelector('.name').innerText === "PLN UPDL Padang") {
            slide.prepend(item);
        }
    });
});
document.getElementById('next').onclick = function(){
    let lists = document.querySelectorAll('.item');
    document.getElementById('slide').appendChild(lists[0]);
}
document.getElementById('prev').onclick = function(){
    let lists = document.querySelectorAll('.item');
    document.getElementById('slide').prepend(lists[lists.length - 1]);
}
