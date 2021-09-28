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
        div{
            display : flex;
        }
        div input{
            margin-left : 20px;
        }
        #idea{
            display: inline;
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
            display: flex;

        }
        #quan{
            width: 30px;
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
            padding: 0px 10px 0px 10px;
            margin-top: 10px;
        }

        #save {
            
            padding: 0px 10px 0px 10px;
            margin-top: 10px;
        }


        input {
            padding: 5px;
        }
        tr td{
            padding: 10px;
        }
        tr th{
            padding: 10px;
        }
    </style>
    <script>
        window.onload = function () {

            if (sessionStorage.tp === undefined)
                sessionStorage.tp = 78.66;
            if (sessionStorage.value13 === undefined)
                sessionStorage.value13 = 2;
            if (sessionStorage.value23 === undefined)
                sessionStorage.value23 = 3;
            if (sessionStorage.value33 ===undefined)
                sessionStorage.value33 = 4;
            if (sessionStorage.value43 ===undefined)
                sessionStorage.value43 = 5;
            if (sessionStorage.value53 ===undefined)
                sessionStorage.value53 = 1;
            if (sessionStorage.nbp3 ===undefined)
                sessionStorage.nbp3 = 15;
            if(sessionStorage.count>6){
            if (sessionStorage.value6 !=undefined)
               { document.getElementById('change6').innerHTML = sessionStorage.value6;
                sessionStorage.nbp3 = parseInt(document.getElementById('nbp3').value) + parseInt(document.getElementById('change6').value);
            }
            if (sessionStorage.value7 !=undefined)
                { document.getElementById('chnage7').innerHTML = sessionStorage.value7;
                sessionStorage.nbp3 = parseInt(document.getElementById('nbp3').value) + parseInt(document.getElementById('change7').value);}
            if (sessionStorage.value8 !=undefined)
                {document.getElementById('change8').innerHTML = sessionStorage.value8;
                sessionStorage.nbp3 = parseInt(document.getElementById('nbp3').value) + parseInt(document.getElementById('change8').value);}
            if (sessionStorage.value9 !=undefined)
               { document.getElementById('change9').innerHTML = sessionStorage.value9;
                sessionStorage.nbp3 = parseInt(document.getElementById('nbp3').value) + parseInt(document.getElementById('change9').value);}
            }
            document.getElementById('change5').innerHTML = sessionStorage.value53;
            document.getElementById('change4').innerHTML = sessionStorage.value43;
            document.getElementById('change3').innerHTML = sessionStorage.value33;
            document.getElementById('change2').innerHTML= sessionStorage.value23;
            document.getElementById('change1').innerHTML = sessionStorage.value13;
            
            
            if(sessionStorage.quan!=undefined)
            sessionStorage.nbp3 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value)+ parseInt(document.getElementById('quantity').value);
            if(sessionStorage.quan2!=undefined)
            sessionStorage.nbp3 =  parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value)+ parseInt(document.getElementById('quantity2').value);
            if(sessionStorage.quan!=undefined && sessionStorage.quan2!=undefined)
            sessionStorage.nbp3 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value)+ parseInt(document.getElementById('quantity').value) + parseInt(document.getElementById('quantity2').value);
            
            
            document.getElementById('nbp3').innerHTML = sessionStorage.nbp3;
            if(sessionStorage.product03 != undefined)
            {
                let list = document.getElementById('list');
                let list1 = '<tr> <td id="product03">'+sessionStorage.product03 + '</td> <td><b id="qauntity" disabled = "disabled">' + sessionStorage.x63+' </b> </td> </tr>'
                list.innerHTML += list1;
            }
            if(sessionStorage.product23 != undefined)
            {
                let list = document.getElementById('list');
                let list1 = '<tr> <td id="product23">'+sessionStorage.product23 + '</td> <td><b id="qauntity2" disabled = "disabled">' + sessionStorage.x73+' </b> </td> </tr>'
                list.innerHTML += list1;
            }
        }
        function productadd(){
        <?php if(isset($_POST['product03'] )) {
            print 'let product03 = "'. $_POST["product03"] .'";
            let quan = "'. $_POST["quantity"] .'";
                var x;
                var tp;
                tp = sessionStorage.nbp3;
                x = quan;
                tp = parseInt(tp) + parseInt(x);
                sessionStorage.nbp3 = parseInt(tp); 
                sessionStorage.x63 = parseInt(x);
                sessionStorage.product03 = product03;';
                $_SESSION["product03"] = print 'sessionStorage.product03';
                $_SESSION["x63"] = print 'x63';
        }?>
        <?php if(isset($_POST['product23'] )) {
            print '
            let product23 ="'. $_POST["product23"] .'";
            let quan2 = "'. $_POST["quantity2"] .'";
                var x;
                var tp;
                tp = sessionStorage.nbp3;
                x = quan2;
                tp = parseInt(tp) + parseInt(x);
                sessionStorage.nbp3 = parseInt(tp); 
                sessionStorage.x73 = parseInt(x);
                sessionStorage.product23 = product23;';
        }?>}
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
        function save()
        {
            var conf = confirm("Would you like to save changes?");
            if(conf)
            {

            }
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
        <form action="3addp12.php" method="POST">

            <span>Order List</span>
            <table id="list" border=1 cellpadding="2">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>Apple </td>
                    <td><b id="change1" onchange="mult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Beef </td>
                    <td><b id="change2" onchange="vult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Milk </td>
                    <td><b id="change3" onchange="bult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Orange </td>
                    <td><b id="change4" onchange="tult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <tr>
                    <td>Bagels </td>
                    <td><b id="change5" onchange="mult(this.value)"
                        disabled = "disabled"> </b>
                    </td>
                </tr>
                <script> if(sessionStorage.product03 == undefined){
                <?php 
                 if(isset($_POST['product03'] )) {
                    if(isset($_POST['quantity'] ))
                   print ' <tr> <td id="product03">'.$_POST['product03'].'</td> <td><b id="qauntity" disabled = "disabled">'.$_POST['quantity'].' </b> </td> </tr>';
                   else {
                       print 'alert("Please enter the quantity")';
                   }
                }
                ?>}
                if(sessionStorage.product23 == undefined){
                <?php if(isset($_POST['product23'] )) {
                    if(isset($_POST['quantity2'] ))
                   print ' <tr> <td id="product23">'.$_POST['product23'].'</td> <td><b id="qauntity2" disabled = "disabled">'.$_POST['quantity2'].' </b> </td> </tr>';
                   else {
                       print 'alert("Please enter the quantity")';
                   }
                }
                ?>}</script>
             </table>
                
                <label for="nbp3">Number of Products</label>
                <span id="nbp3" name="productnb">0</span>
                <ol> <li> <input type="text"  name= "product03" placeholder="Product name" /> <input type="number" min=0 max=5 id = "quan" size="3" name= "quantity"/> </li>
                <li> <input type="text"  name= "product23" placeholder="Product name" /> <input type="number" min=0 max=5 id = "quan" size="3"  name= "quantity2"/></li> </ol>
                <button type="submit" value="Add product" id="add" >Add Product<br /> <button type="button" id="save" onclick="productadd()"> Save </button>
        </form>
    </main>
</body>

</html>