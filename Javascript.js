var subtotal = 0.00;

var listItems = ['li1', 'li2', 'li3', 'li4', 'li5', 'li6', 'li7', 'li8', 'li9', 'li10'];
var counter = 0;

//Finds Size
function sizeType() {
    var e = document.getElementById("size");
    var strUser = e.options[e.selectedIndex].value;
}
/* //Finds Crust
function crustType() { 
    document.getElementsByName('crust')
        .forEach(radio => { 
            if (radio.checked == true) { 
                document.getElementById('price2').innerHTML = this.options[this.selectedIndex].text;
            }
        })
} */

//Crust Selection
function crustType2() { 
    var radios = document.getElementsByName('crust');

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            // do whatever you want with the checked radio
            document.getElementById('price2').innerHTML = (radios[i].id);

            // only one radio can be logically checked, don't check the rest
            break;
        }
        else { 
            continue;
        }
    }
}

//Sauce Selection
function sauceType() {
    var radios = document.getElementsByName('sauce');

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            // do whatever you want with the checked radio
            document.getElementById('price3').innerHTML = (radios[i].id);
            // only one radio can be logically checked, don't check the rest
            break;
        }
        else { 
            continue;
        }
    }
}

//Cheese Selection
function cheeseType(){ 
    var radios = document.getElementsByName('cheese');

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            // do whatever you want with the checked radio
            document.getElementById(listItems[0]).innerHTML = (radios[i].id);
            document.getElementById(listItems[0]).style.visibility = "visible";
            // only one radio can be logically checked, don't check the rest
            break;
        }
    }
}

//Vegeate
/* function vegType() { 
    var veggies = document.getElementsByClassName('veggies');

    for (var i = 0; 2 <= 6; i++ ) { 
        if (veggies[i].checked) {
            document.getElementById(listItems[i]).innerHTML = veggies[i].value;
            document.getElementById(listItems[i]).style.visibility = "visible";
            break;
        }
        else { 
            continue;
        }
    }
} */
function veggies() {
    const checkedUl = document.getElementById('checkedUl');
    let count = 1;

    //Equal to all checkboxes
    let vegCheckboxes = document.querySelectorAll('.vegCheckbox');

    for (let checkbox of vegCheckboxes) {
        checkbox.addEventListener('change', function(e) {
            //if change is checking
            if (e.target.checked) { 
                const li = document.createElement('li');
                li.textContent = e.target.checked;
                li.id = 'li' + e.target.value;
                checkedUl.appendChild(li);
                console.log(li.id);
                document.getElementById(listItems[count]).style.visibility = "visible";
                //document.getElementById(listItems[count]).innerHTML = li.id;
                count++;
            }
            //if the change is unchecking
            else {
                const correspLiId = 'li' + e.target.value; // id of corresponding li
                const correspLi = document.getElementById(correspLiId);
                checkedUl.removeChild(correspLi);
            }
        });
    }
} 

function meatType() {
    const checkedUl = document.getElementById('checkedUl');
    let count = 1;

    //Equal to all checkboxes
    let meatCheckboxes = document.querySelectorAll('.meatCheckBox');

    for (let checkbox of meatCheckboxes) {
        checkbox.addEventListener('change', function (e) {
            //if change is checking
            if (e.target.checked) {
                const li = document.createElement('li');
                li.textContent = e.target.checked;
                li.id = 'li' + e.target.value;
                checkedUl.appendChild(li);
                console.log(li.id);
                document.getElementById(listItems[count]).style.visibility = "visible";
                //document.getElementById(listItems[count]).innerHTML = li.id;
                count++;
            }
            //if the change is unchecking
            else {
                const correspLiId = 'li' + e.target.value; // id of corresponding li
                const correspLi = document.getElementById(correspLiId);
                checkedUl.removeChild(correspLi);
            }
        });
    }
}

//Order is Ready  
document.getElementById('Ready').onclick = function(){ 
    var today = new Date();
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date + ' ' + time;
    document.getElementById("ready").innerHTML = dateTime;
}

//Order is Cooked
function cooked() { 
    var today = new Date();
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date + ' ' + time;
    document.getElementById("picked").innerHTML = dateTime;
}

/* function meatType() { 
    var meat = document.getElementsByClassName('meat');
    for (var i = 0; i <= meat.length; i++) {
        if (meat[i].checked = true) {
            document.getElementById(listItems[1]).style.visibility = "visible";
            document.getElementById(listItems[1]).innerHTML = "Hello World";
            document.getElementById('li7').style.visibility = "visible";
            document.getElementById('li7').innerHTML = "Hello Everyone"
            counter++;
        }
        else { 
            continue;
        }
    }
} */

