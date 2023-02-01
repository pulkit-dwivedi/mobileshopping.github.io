let sam_slide = document.getElementsByClassName("sam_slide");
let sam_left = document.getElementById("sam_prev");
let sam_right = document.getElementById("sam_next");
var sam_flag = 0;
function samsung_controller(sam_x) {
    sam_flag = sam_flag + sam_x;
    samsung_slideshow(sam_flag);
}
samsung_slideshow(sam_flag);
function samsung_slideshow(sam_num) {

    if (sam_num == sam_slide.length) {
        sam_flag = 0;
        sam_num = 0;
    }
    if (sam_num < 0) {
        sam_flag = sam_slide.length - 1;
        sam_num = sam_slide.length - 1;
    }
    for (let y of sam_slide) {
        y.style.display = "none";
    }
    sam_slide[sam_num].style.display = "block";
}