function _class(name){
    return document.getElementsByClassName(name);
}

let tabPanes = _class("listsss")[0].getElementsByTagName("p");

for(let i=0;i<tabPanes.length;i++){
    tabPanes[i].addEventListener("click",function(){
        _class("listsss")[0].getElementsByClassName("onn")[0].classList.remove("onn");
            tabPanes[i].classList.add("onn");


            _class("listsss-content")[0].getElementsByClassName("onn")[0].classList.remove("onn");
            _class("listsss-content")[0].getElementsByTagName("div")[i].classList.add("onn");
    });
}



