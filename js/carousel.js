var intervalTrue = true;
var currentSlide = 1;
function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    return isVisible;
}
setInterval(() => {
    if (intervalTrue && isScrolledIntoView(document.getElementById('carousel'))) {
        document.querySelectorAll('.slide-btn').forEach(element => {
            num = element.innerHTML;
            element.className = `slide-btn btn btn-xs btn-${Number(num) == currentSlide ? "secondary": "primary"}`;
        });
        document.getElementById('carousel').querySelector('#slide' + currentSlide).scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
        currentSlide = currentSlide == 3 ? 1 : ++currentSlide;
    }
}, 5000);
function scrollCarousel(el) {
    intervalTrue = false;
    document.querySelectorAll('.slide-btn').forEach(element => {
    num = element.innerHTML;
    element.className = `slide-btn btn btn-xs btn-${num == el.slice(-1) ? "secondary" : "primary"}`;
    });
    document.getElementById('carousel').querySelector(el).scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
}