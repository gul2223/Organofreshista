function added(id){
    var addedBtn= document.getElementById(id);
    console.log(addedBtn.children[1].value);
    if(addedBtn.children[1].value < 1){
        alert("Please enter the Quantity.");
        addedBtn.children[1].focus();
    }else{
        addedBtn.children[2].innerHTML='<i class="far fa-check-circle fa-lg"></i> &nbsp; ITEM ADDED';
    }
    
}

function increase(obj){
    
}

