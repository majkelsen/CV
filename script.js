// const arrow = document.querySelector(".arrow");
// const footer = document.querySelector(".footer");

// arrow.addEventListener("click", function () {
//     arrow.classList.toggle("active");
//     footer.classList.toggle("active");
// })

document.querySelector('.contact .popup').addEventListener("click", function () {
    document.querySelector('.modal-wrap').classList.add('active');
    document.querySelector('main').classList.add('blur');
})

// document.querySelector('.contact .popup2').addEventListener("click", function () {
//     document.querySelector('.modal-wrap').classList.add('active');
//     document.querySelector('.responsive').classList.add('blur');
// })

document.querySelector('span.hide').addEventListener("click", function () {
    document.querySelector('.modal-wrap').classList.remove('active');
    document.querySelector('main').classList.remove('blur');
    // document.querySelector('.responsive').classList.remove('blur');
})