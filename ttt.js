console.log("checking");

var restart = document.querySelector("#restart");

var squares= document.querySelectorAll('td');

function clearAllSquares(){
    for (var i=0; i<squares.length; i++){
        squares[i].textContent="";
    }
}
restart.addEventListener("click", clearAllSquares);

function checkMarker(){
    if(this.textContent == ""){
        this.textContent="X";
    }
    else if(this.textContent == "X"){
        this.textContent="O";
    }
    else{
        this.textContent= "";
    }

}

for (var i=0; i<squares.length; i++){
    squares.addEventListener("click", checkMarker)
}