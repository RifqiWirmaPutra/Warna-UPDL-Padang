document.addEventListener("DOMContentLoaded", function () {
    var itemsContainer = document.getElementById('itemsContainer'),
        trigger = document.getElementById('trigger'),
        label = trigger.querySelector('#label'),
        items = Snap(itemsContainer),
        originalTransform = itemsContainer.getAttribute("transform"),
        open = true;

    // attach listener
    trigger.addEventListener('click', toggleMenu, false);

    window.setTimeout(function () {
        open = !open;
        items.animate({
            transform: "s0,0,250,250",
            opacity: 0
        }, 400, mina.backin);
        label.innerHTML = "+";
    }, 2000);

    // handle click
    function toggleMenu(e) {
        open = !open;
        if (!e) var e = window.event;

        e.stopPropagation();
        if (!open) {
            items.animate({
                transform: "s0,0,250,250",
                opacity: 0
            }, 400, mina.backin);
            label.innerHTML = "+";
        } else {
            items.animate({
                transform: originalTransform,
                opacity: 1
            }, 1000, mina.bounce);
            label.innerHTML = "-";
        }
    }
});