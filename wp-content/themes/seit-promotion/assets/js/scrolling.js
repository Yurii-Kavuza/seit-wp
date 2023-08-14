const getMoreBtn = document.querySelector(".btn--get-more");
const whatWeDo = document.querySelector(".what-we-do");

getMoreBtn.addEventListener("click", function(e) {
    e.preventDefault();
    const offset = whatWeDo.getBoundingClientRect();
    window.scroll({ top: offset.top, left: 0, behavior: 'smooth' });
});