let getTributes = document.getElementsByTagName("label")
let getChecked = document.getElementsByClassName("checked")
for(let tribute of getTributes){
    tribute.addEventListener("click",()=>{
        if(getChecked.length>0){
            putBoxShadow();
        }
        tribute.classList.add("checked")
    })
}

function putBoxShadow(){
    
    let getChecked = document.getElementsByClassName("checked")
    for(let checked of getChecked){
        checked.classList.remove("checked")
    }
}