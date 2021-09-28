<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fuggles&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: repeat(10, 1fr);
            width: 100vw;
            height: 100vh;
        }

        nav {
            flex: 1;
            /* background-color: lightblue;
            border: 1px solid black; */
            border-right: solid;
        }


        main {
            display: flex;
            grid-row: 2 / 13;
        }

        header {
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
            text-align: center;
            font-size: 3em;
            grid-column: 1 / 14;
            padding: 20px;
            font-family: 'Fuggles', cursive;
            font-weight: 600;
        }

        ul li {
            padding: 1.2em;
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
            margin-top: 1.2em;

        }

        ol li {
            line-height: 4em;
        }

        a {
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
            text-decoration-line: none;
        }

        form {
            margin: 30px;
            flex: 10;
        }



        #delet {
            margin-top: 20px;
        }

        span {
            font-size: 1.5em;
            font-weight: bold;
            color: rgb(3, 0, 44);
        }

        body {
            /* background-image: url(https://images.unsplash.com/photo-1621091211034-53136cc1eb32?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fHNreSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60); */
            background-size: 2000px 800px;
            background-color: #99d0d0a1;
        }

        button {
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
            border-color: teal;
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
        }

        #add {
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
            border-color: teal;
            background-color: rgb(3, 0, 44);
            color: rgb(255, 115, 0);
        }

        #save {
            float: left;
            padding: 0px 10px 0px 10px;
            margin-top: 10px;
        }

        input {
            padding: 5px;
        }
    </style>
    <script>
        function mult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product02!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.value12 = value;
            document.getElementById('change1').value = sessionStorage.value12;
            
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        function vult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product02!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.value22 = value;
            document.getElementById('change2').value = sessionStorage.value22;
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        function bult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product02!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.value32 = value;
            document.getElementById('change3').value = sessionStorage.value32;
            
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        function tult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product02!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.value42 = value;
            document.getElementById('change4').value = sessionStorage.value42;
            
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        function sult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product02!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.value52 = value;
            document.getElementById('change5').value = sessionStorage.value52;
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        function dult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var y6;
            var y7;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.x62 = value;
            document.getElementById('change6').value = sessionStorage.x62;
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        function pult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp2;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            sessionStorage.nbp2 = nbp2;
            sessionStorage.tp = tp;
            sessionStorage.x72 = value;
            document.getElementById('change7').value = sessionStorage.x72;
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
        }
        let count = 6;
        //Defining a listener for our button, specifically, an onclick handler
        // function productadd() {
        //     //First things first, we need our text:
        //     var text = document.getElementById("idea").value; //.value gets input values

        //     if (text == "") {
        //         alert("Please enter the product02 name");
        //     }
        //     else{
        //         let product02 = document.getElementById('idea').value;
        //         let list = document.getElementById('list');
        //         list.innerHTML += '<li>'+product02+' <input type="number" min="0" max="5" id="change'+count+'" onchange="jult(this.value)"  placeholder=1 /> <button onclick="adreitem'+count+'()"> Change Quantity </button> </li>';
        //         alert(text + " is added to order.");}
        window.onload = function () {
            if (sessionStorage.tp === undefined)
                sessionStorage.tp = 78.66;
            if (sessionStorage.value12 === undefined)
                sessionStorage.value12 = 2;
            if (sessionStorage.value22 === undefined)
                sessionStorage.value22 = 3;
            if (sessionStorage.value32 ===undefined)
                sessionStorage.value32 = 4;
            if (sessionStorage.value42 ===undefined)
                sessionStorage.value42 = 5;
            if (sessionStorage.value52 ===undefined)
                sessionStorage.value52 = 1;
            if (sessionStorage.nbp2 ===undefined)
                sessionStorage.nbp2 = 15;
            document.getElementById('change5').value = sessionStorage.value52;
            document.getElementById('change4').value = sessionStorage.value42;
            document.getElementById('change3').value = sessionStorage.value32;
            document.getElementById('change2').value = sessionStorage.value22;
            document.getElementById('change1').value = sessionStorage.value12;
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
            if(sessionStorage.product02 != undefined)
            {
                var o =sessionStorage.x62;
                document.getElementById("change6").value =  o;
            }
            if(sessionStorage.product22 != undefined)
            {
               document.getElementById('change7').value = sessionStorage.x72;
            }
        }
        function adreitem1() {
            var num = document.getElementById("change1").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order");
        }
        function adreitem2() {
            var num = document.getElementById("change2").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function adreitem3() {
            var num = document.getElementById("change3").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function adreitem4() {
            var num = document.getElementById("change4").value;
            if (num == 0) {
                //     var td = event.target.parentNode; 
                //   var tr = td.parentNode; // the row to be removed
                //   tr.parentNode.removeChild(tr);
                alert("Please enter the quantity!")
            }
            else
                alert(num + " products are added to your order.");
        }
        function adreitem5() {
            var num = document.getElementById("change5").value;
            if (num == 0) {
                alert("Please enter the quantity!");
                // alert("This is removed from the order!")
            }
            else
                alert(num + " products are added to your order.");
        }
    </script>
    <link rel="icon"
        href="https://www.freelogoservices.com/api/main/images/1j+ojVVCOMkX9Wyrexe4hGfWzKHR8khU7lyYlGYyKXQY41NunTZx36Zm...f49Kh4H5FUOlVFRK4d43Sl6V4IThRph...zeEL9odBCA3k3VBFOQG">
    <title>Organo Freshista</title>

</head>

<body>
    <header> Organo Freshista </header>
    <main>
        <nav>
            <ul>
                <a href="index.html">
                    <li>HOME</li>
                </a>
                <a href="p9.html">
                    <li> MANAGE ACCOUNTS</li>
                </a>
                <a href="p11.php">
                    <li> BACK</li>
                </a>
            </ul>
        </nav>
        <form action="p11.php" method="POST">

            <span>Order List</span>
            <ol id="list">
                <li> Apple <input type="number" min="0" max="5" id="change1" onchange="mult(this.value)"
                         /> <button onclick="adreitem1()"> Change Quantity</button></li>
                <li> Beef <input type="number" min="0" max="5" id="change2" onchange="vult(this.value)"
                         /> <button onclick="adreitem2()"> Change Quantity</button> </li>
                <li> Milk <input type="number" min="0" max="5" id="change3" onchange="bult(this.value)"
                        /> <button onclick="adreitem3()"> Change Quantity</button> </li>
                <li> Orange<input type="number" min="0" max="5" id="change4" onchange="tult(this.value)"
                         /> <button onclick="adreitem4()"> Change Quantity</button> </li>
                <li> Bagels <input type="number" min="0" max="5" id="change5" onchange="sult(this.value)"
                         /> <button onclick="adreitem5()"> Change Quantity</button> </li>
                <script>
                    if(sessionStorage.product02!=undefined)
                   document.write('<li>' + sessionStorage.product02 +'<input type="number" min="0" max="5" id="change6" onchange="dult(this.value)" /> <button onclick="adreitem6()"> Change Quantity</button></li>')
                </script>
                <script>
                    if(sessionStorage.product22!=undefined)
                   document.write('<li>' + sessionStorage.product22 +'<input type="number" min="0" max="5" id="change7" onchange="pult(this.value)" /> <button onclick="adreitem6()"> Change Quantity</button></li>')
                </script>
                <label for="nbp2">Number of Products</label>
                <span id="nbp2" name="productnb">0</span>
            </ol>
            <button type="submit" id="save" onclick="confirm('Would you like to save your changes?')"> Save </button>
        </form>
    </main>
</body>

</html>