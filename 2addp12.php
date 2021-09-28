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
            if(sessionStorage.count>6){
            if (sessionStorage.value6 !=undefined)
               { document.getElementById('change6').innerHTML = sessionStorage.value6;
                sessionStorage.nbp2 = parseInt(document.getElementById('nbp2').value) + parseInt(document.getElementById('change6').value);
            }
            if (sessionStorage.value7 !=undefined)
                { document.getElementById('chnage7').innerHTML = sessionStorage.value7;
                sessionStorage.nbp2 = parseInt(document.getElementById('nbp2').value) + parseInt(document.getElementById('change7').value);}
            if (sessionStorage.value8 !=undefined)
                {document.getElementById('change8').innerHTML = sessionStorage.value8;
                sessionStorage.nbp2 = parseInt(document.getElementById('nbp2').value) + parseInt(document.getElementById('change8').value);}
            if (sessionStorage.value9 !=undefined)
               { document.getElementById('change9').innerHTML = sessionStorage.value9;
                sessionStorage.nbp2 = parseInt(document.getElementById('nbp2').value) + parseInt(document.getElementById('change9').value);}
            }
            document.getElementById('change5').innerHTML = sessionStorage.value52;
            document.getElementById('change4').innerHTML = sessionStorage.value42;
            document.getElementById('change3').innerHTML = sessionStorage.value32;
            document.getElementById('change2').innerHTML= sessionStorage.value22;
            document.getElementById('change1').innerHTML = sessionStorage.value12;
            
            
            if(sessionStorage.quan!=undefined)
            sessionStorage.nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value)+ parseInt(document.getElementById('quantity').value);
            if(sessionStorage.quan2!=undefined)
            sessionStorage.nbp2 =  parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value)+ parseInt(document.getElementById('quantity2').value);
            if(sessionStorage.quan!=undefined && sessionStorage.quan2!=undefined)
            sessionStorage.nbp2 = parseInt(document.getElementById('change1').value) + parseInt(document.getElementById('change2').value) + parseInt(document.getElementById('change3').value) + parseInt(document.getElementById('change4').value)
                + parseInt(document.getElementById('change5').value)+ parseInt(document.getElementById('quantity').value) + parseInt(document.getElementById('quantity2').value);
            
            
            document.getElementById('nbp2').innerHTML = sessionStorage.nbp2;
            if(sessionStorage.product02 != undefined)
            {
                let list = document.getElementById('list');
                let list1 = '<tr> <td id="product02">'+sessionStorage.product02 + '</td> <td><b id="qauntity" disabled = "disabled">' + sessionStorage.x62+' </b> </td> </tr>'
                list.innerHTML += list1;
            }
            if(sessionStorage.product22 != undefined)
            {
                let list = document.getElementById('list');
                let list1 = '<tr> <td id="product22">'+sessionStorage.product22 + '</td> <td><b id="qauntity2" disabled = "disabled">' + sessionStorage.x72+' </b> </td> </tr>'
                list.innerHTML += list1;
            }
        }
        function productadd(){
        <?php if(isset($_POST['product02'] )) {
            print 'let product02 = "'. $_POST["product02"] .'";
            let quan = "'. $_POST["quantity"] .'";
                var x;
                var tp;
                tp = sessionStorage.nbp2;
                x = quan;
                tp = parseInt(tp) + parseInt(x);
                sessionStorage.nbp2 = parseInt(tp); 
                sessionStorage.x62 = parseInt(x);
                sessionStorage.product02 = product02;';
                $_SESSION["product02"] = print 'sessionStorage.product02';
                $_SESSION["x62"] = print 'x62';
        }?>
        <?php if(isset($_POST['product22'] )) {
            print '
            let product22 ="'. $_POST["product22"] .'";
            let quan2 = "'. $_POST["quantity2"] .'";
                var x;
                var tp;
                tp = sessionStorage.nbp2;
                x = quan2;
                tp = parseInt(tp) + parseInt(x);
                sessionStorage.nbp2 = parseInt(tp); 
                sessionStorage.x72 = parseInt(x);
                sessionStorage.product22 = product22;';
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
        <form action="2addp12.php" method="POST">

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
                <script> if(sessionStorage.product02 == undefined){
                <?php 
                 if(isset($_POST['product02'] )) {
                    if(isset($_POST['quantity'] ))
                   print ' <tr> <td id="product02">'.$_POST['product02'].'</td> <td><b id="qauntity" disabled = "disabled">'.$_POST['quantity'].' </b> </td> </tr>';
                   else {
                       print 'alert("Please enter the quantity")';
                   }
                }
                ?>}
                if(sessionStorage.product22 == undefined){
                <?php if(isset($_POST['product22'] )) {
                    if(isset($_POST['quantity2'] ))
                   print ' <tr> <td id="product22">'.$_POST['product22'].'</td> <td><b id="qauntity2" disabled = "disabled">'.$_POST['quantity2'].' </b> </td> </tr>';
                   else {
                       print 'alert("Please enter the quantity")';
                   }
                }
                ?>}</script>
             </table>
                
                <label for="nbp2">Number of Products</label>
                <span id="nbp2" name="productnb">0</span>
           <ol> <li> <input type="text"  name= "product02" placeholder="Product name" /> <input type="number" min=0 max=5 id = "quan" size="3" name= "quantity"/> </li>
           <li> <input type="text"  name= "product22" placeholder="Product name" /> <input type="number" min=0 max=5 id = "quan" size="3"  name= "quantity2"/></li> </ol>
           <button type="submit" value="Add Product" id="add" >Add Product<br /> <button type="button" id="save" onclick="productadd()"> Save </button>
        </form>
    </main>
</body>

</html>