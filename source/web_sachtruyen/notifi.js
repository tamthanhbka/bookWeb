
class Notifi {
    messElement;
    element;
    susseccIcon;
    constructor() {
        this.element = document.querySelector(".notifi");
        this.messElement = document.querySelector(".mess");
        this.susseccIcon = document.getElementById("sussecc");
    }
    show(mess, sussecc = true, sec = 4) {
        this.messElement.innerText = mess;
        this.element.style.right = "15px";
        this.element.style.opacity = "1";
        let element = this.element;
        let susseccIcon = this.susseccIcon;
        clearTimeout(
            setTimeout(() => {
                element.style.right = "-200px";
                this.element.style.opacity = "0";
            }, sec * 1000) - 1);
        if (sussecc) {
            susseccIcon.classList.remove("bi-info-circle");
            susseccIcon.classList.add("bi-check-lg");
            susseccIcon.style.color = "#6fc13c";
        } else {
            susseccIcon.classList.remove("bi-check-lg");
            susseccIcon.classList.add("bi-info-circle");
            susseccIcon.style.color = "orange";
        }
    }
}
const call = (url) => {
    return fetch(url).then((response) => response.status).then((status) => {
        if (status !== 200)
            return false;
        return true;
    });
}
let submitBtns = document.querySelectorAll(".submit-btn");
submitBtns.forEach(btn => {
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        let url = e.target.getAttribute("href");
        call(url).then(bool => {
            if (bool)
                new Notifi().show(e.target.getAttribute("alt")+" thành công!");
            else {
                new Notifi().show(e.target.getAttribute("alt")+" thất bại!", false);
            }
        })
    })
})
