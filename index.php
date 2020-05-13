<?php
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="pizzaShop.css">
    <script type="text/javascript" src="Javascript.js"></script>
    <link rel="shortcut icon" href="">
</head>
<body> 
    <div id="mainDiv">

        <!--Start of Form-->
        <form action="currentOrders.php" method="$_GET">
            
        <!--Div #1 Contains Checkout Items-->
            <div id="pictureDiv" style="display: inline-block; height : 500px;border: 1px solid black">
                <!--Cart Logo-->
                <div>
                    <p class="header" style="margin: 5 auto; text-align: center;font-size: 40px;color:goldenrod"><em>Cart</em></p>
                </div>
                <!--Displays Current Items-->
                <div id="checkedUl" style="background-color : whitesmoke;opacity: 0.8; height : 350px">
                    <p id="price1"></p>
                    <p id="price2"></p>
                    <p id="price3"></p>
                    <!--Contains Adds-Ons-->
                    <ul id="checkedUl" style="visibility: hidden">
                        <li id="li1"></li>
                        <!-- <ul id="checkedUl"></ul>-->
                        <li id="li2"></li>
                        <li id="li3"></li>
                        <li id="li4"></li>
                        <li id="li5"></li>
                        <li id="li6"></li>
                        <li id="li7"></li>
                        <li id="li8"></li>
                        <li id="li9"></li>
                        <li id="li10"></li>
                        <li id="li11"></li>
                        <li id="li12"></li>
                        <li id="li13"></li>
                        <li id="li14"></li>
                    </ul>
                </div>

                <!--Displays Subtotal: $0.00-->
                <div id="subTotal" style=" font-size : 20px; margin-bottom: -25px">
                </div>

                <!--Checkout Button-->
                <div id="buttonDiv" style="width: 100px; margin-top: 40px">
                    <button type="submit" name="insert" style="border-radius: 30px; font-size: 25px;position: relative;text-align: center;display: inline-block;">Checkout</button>
                </div>
            </div>

            <!--Logo Phrase-->
            <div id="logo" style="margin-left: 520px; display: inline-block; height: 450px; width: 450px;position: absolute">
                <p id="phrase">&emsp;Best Pizzeria &emsp;&nbsp;in America</p>
            </div>

            <!--Div #2 Holds Base-->
            <div id="baseDiv" style="width:450px; display: inline-block;margin: 20px;margin-top:-10px; opacity: 0.9">
                <h2 style="margin: 170 ;font-size:40px; display: inline; color:goldenrod"><em>Menu</em></h2>
                <p class="header" style="font-size: 30px; text-decoration : underline"><em>Base</em></p>

                <!--Size Selection-->
                <select name="sizes" id="sizeOf" style="font-size: 20px" onchange="document.getElementById('price1').innerHTML = (this.options[this.selectedIndex].text)">
                    <option id=" small" value="Small" onclick="sizeType()">Small (+$7.99)</option>
                    <option id="medium" value="Medium">Medium (+$9.99)</option>
                    <option id="large" value="Large">Large (+$12.99)</option>
                    <option id="exlarge" value="Extra Large">Extra Large (+$14.99)</option>
                </select>

                <!--Crust Selection-->
                <p class="steps" class="crust"><em>Step 2 (Crust)</em></p>
                <input type="radio" id="Original Crust (+$0.00)" name="crust" value="Original" onclick='crustType2()'>Original
                <br><input type="radio" id="Thin Crust (+$0.00)" name="crust" value="Thin" onclick="crustType2()">Thin
                <br><input type="radio" id="Pan Crust (+$1.00)" name="crust" value="Pan" onclick="crustType2()"> Pan (+1.00)
                <br><input type="radio" id="Stuffed Crust (+$2.00)" name="crust" value="Stuffed Crust" onclick="crustType2()">Stuffed Crust (+$2.00)
                <br><input type="radio" id="Gluten-Free Crust (+$1.50)" name="crust" value="Gluten Free" onclick="crustType2()">Gluten Free (+$1.50)

                <!--Sauce Selection-->
                <p class="steps"><em>Step 3 (Sauce)</em></p>
                <input type="radio" name="sauce" id="Marinara Sauce (+0.00)" onclick="sauceType()" value="Marinara">Marinara (+$0.00)
                <br><input type="radio" name="sauce" id="Barbeque Sauce (+$2.00)" onclick="sauceType()" value="BBQ"> BBQ Sauce (+$2.00)
                <br><input type="radio" name="sauce" id="Buffalo Sauce (+$1.50)" onclick="sauceType()" value="Buffalo"> Buffalo Sauce(+1.50)
                <br><input type="radio" name="sauce" id="Ranch Dressing (+1.50)" onclick="sauceType()" value="Ranch"> Ranch Sauce(+1.50)
            </div>

            <!--Div #3 Holds Add-ons-->
            <div style="background-color: grey; width:450px; opacity: 0.9; margin: 20px; margin-top: -25px">
                <p class="header" style="font-size: 30px; text-decoration : underline"><em>Add-Ons</em></p>

                <!--Cheese Selection-->
                <p class="steps"><em>Cheese</em></p>
                <input type="radio" name="cheese" id="No Cheese" value="N/A" onclick="cheeseType()">No Cheese
                <input type="radio" name="cheese" id="Normal" value="Normal Cheese" onclick="cheeseType()">Normal
                <input type="radio" name="cheese" id="Light Cheese" value="Light Cheese" onclick="cheeseType()">Light Cheese
                <input type="radio" name="cheese" id="Extra Cheese" value="Extra Cheese" onclick="cheeseType()">Extra Cheese (+$1.50)

                <!--Veggie Selection-->
                <p class="steps"><em>Veggies</em></p>
                        <input type="checkbox" class="vegCheckbox" id="Green Peppers" value="Green Peppers" onclick="veggies()">Green Peppers ($0.50) <input type="checkbox" class="vegCheckbox" id="Mushrooms" value="Mushrooms" onclick="veggies()">Mushrooms ($0.50)
                <br><br><input type="checkbox" class="vegCheckbox" id="Red Peppers" value="Red Peppers" onclick="veggies()">Red Peppers ($0.50) <input type="checkbox" class="vegCheckbox" id="Grilled Onions" value="Grilled Onions">Grilled Onions ($0.75)
                <br><br><input type="checkbox" class="vegCheckbox" id="Banana Peppers" value="Banana Peppers">Bannana Peppers ($0.50) <input type="checkbox" class="vegCheckbox" id="Spinach" value="Spinach">Spinach ($0.50)

                <!--Meat Selection-->
                <p class="steps"><em>Meats</em></p>
                        <input type="checkbox" class="meatCheckBox" value="Pepporoni" onclick="meatType()">Pepporoni ($1.00) <input type="checkbox" class="meat" value="Sausage" onclick="meatType()">Sausage ($1.00)
                <br><br><input type="checkbox" class="meatCheckBox" value="Beef" onclick="meatType()">Beef ($1.00) <input type="checkbox" class="meat" value="Ham" onclick="meatType()">Ham ($1.00)
                <br><br><input type="checkbox" class="meatCheckBox" value="Bacon" onclick="meatType()">Bacon ($1.50) <input type="checkbox" class="meat" class="Chicken" onclick="meatType()">Chicken ($1.50)
                <br><br><input type="checkbox" class="meatCheckBox" value="Steak" onclick="meatType()">Steak ($2.00)
            </div>
        </form>
    </div>
</body>

</html>