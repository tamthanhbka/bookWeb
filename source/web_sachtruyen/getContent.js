let content="";
let pElms = document.querySelector("#__layout > div > div > div.page-content > div.chapter-detail-page.pb-15 > div.container.mx-auto.px-57-5 > div.container.mx-auto > div > div > div.bg-white.rounded-xl.mb-18px > div.px-30px > div").getElementsByTagName("p");
pElms.forEach(p=>{
    console.log(p.innerText);
    content+=p.innerText+"\n";
});
