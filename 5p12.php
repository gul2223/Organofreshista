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
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product05!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.value15 = value;
            document.getElementById('change1').value = sessionStorage.value15;
            
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
        }
        function vult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product05!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.value25 = value;
            document.getElementById('change2').value = sessionStorage.value25;
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
        }
        function bult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product05!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.value35 = value;
            document.getElementById('change3').value = sessionStorage.value35;
            
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
        }
        function tult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product05!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.value45 = value;
            document.getElementById('change4').value = sessionStorage.value45;
            
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
        }
        function sult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            if(sessionStorage.product05!==undefined)
            {
                y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            }
            else
            {
                tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value);
            }
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.value55 = value;
            document.getElementById('change5').value = sessionStorage.value55;
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
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
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.x65 = value;
            document.getElementById('change6').value = sessionStorage.x65;
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
        }
        function pult(value) {
            var value;
            var x1;
            var x2;
            var x3;
            var x4;
            var x5;
            var tp;
            var nbp5;
            x1 = document.getElementById('change1').value * 2;
            x2 = document.getElementById('change2').value * 11.57;
            x3 = document.getElementById('change3').value * 7.49;
            x4 = document.getElementById('change4').value * 1.20;
            x5 = document.getElementById('change5').value * 3.99;
            y6 = document.getElementById('change6').value;
            y7 = document.getElementById('change7').value;
            tp = (parseFloat(x1) + parseFloat(x2) + parseFloat(x3) + parseFloat(x4) + parseFloat(x5)).toFixed(2);
            nbp5 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value) + parseInt(y6) + parseInt(y7);
            sessionStorage.nbp5 = nbp5;
            sessionStorage.tp = tp;
            sessionStorage.x75 = value;
            document.getElementById('change7').value = sessionStorage.x75;
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
        }
        let count = 6;
        //Defining a listener for our button, specifically, an onclick handler
        // function productadd() {
        //     //First things first, we need our text:
        //     var text = document.getElementById("idea").value; //.value gets input values

        //     if (text == "") {
        //         alert("Please enter the product05 name");
        //     }
        //     else{
        //         let product05 = document.getElementById('idea').value;
        //         let list = document.getElementById('list');
        //         list.innerHTML += '<li>'+product05+' <input type="number" min="0" max="5" id="change'+count+'" onchange="jult(this.value)"  placeholder=1 /> <button onclick="adreitem'+count+'()"> Change Quantity </button> </li>';
        //         alert(text + " is added to order.");}
        window.onload = function () {
            if (sessionStorage.tp === undefined)
                sessionStorage.tp = 78.66;
            if (sessionStorage.value15 === undefined)
                sessionStorage.value15 = 2;
            if (sessionStorage.value25 === undefined)
                sessionStorage.value25 = 3;
            if (sessionStorage.value35 ===undefined)
                sessionStorage.value35 = 4;
            if (sessionStorage.value45 ===undefined)
                sessionStorage.value45 = 5;
            if (sessionStorage.value55 ===undefined)
                sessionStorage.value55 = 1;
            if (sessionStorage.nbp5 ===undefined)
                sessionStorage.nbp5 = 15;
            document.getElementById('change5').value = sessionStorage.value55;
            document.getElementById('change4').value = sessionStorage.value45;
            document.getElementById('change3').value = sessionStorage.value35;
            document.getElementById('change2').value = sessionStorage.value25;
            document.getElementById('change1').value = sessionStorage.value15;
            document.getElementById('nbp5').innerHTML = sessionStorage.nbp5;
            if(sessionStorage.product05 != undefined)
            {
                var o =sessionStorage.x65;
                document.getElementById("change6").value =  o;
            }
            if(sessionStorage.product25 != undefined)
            {
               document.getElementById('change7').value = sessionStorage.x75;
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
                    if(sessionStorage.product05!=undefined)
                   document.write('<li>' + sessionStorage.product05 +'<input type="number" min="0" max="5" id="change6" onchange="dult(this.value)" /> <button onclick="adreitem6()"> Change Quantity</button></li>')
                </script>
                <script>
                    if(sessionStorage.product25!=undefined)
                   document.write('<li>' + sessionStorage.product25 +'<input type="number" min="0" max="5" id="change7" onchange="pult(this.value)" /> <button onclick="adreitem6()"> Change Quantity</button></li>')
                </script>
                <label for="nbp5">Number of Products</label>
                <span id="nbp5" name="productnb">0</span>
            </ol>
            
            <button type="submit" id="save" onclick="confirm('Would you like to save your changes?')"> Save </button>
        </form>
    </main>
</body>

</html>