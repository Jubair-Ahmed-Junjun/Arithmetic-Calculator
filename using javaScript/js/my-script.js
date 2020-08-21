                                  /* Calculator Function*/

var add =  document.getElementById('addition');
add.onclick = function () {
    var firstNumber = Number(document.getElementById('firstNumber').value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var sum = firstNumber+secondNumber;
    document.getElementById('result').value = sum;
};


var b =  document.getElementById('subtraction');
b.onclick = function () {
    var firstNumber = Number(document.getElementById('firstNumber').value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var sub = firstNumber-secondNumber;
    document.getElementById('result').value = sub;
};

var c =  document.getElementById('multiplication');
c.onclick = function () {
    var firstNumber = Number(document.getElementById('firstNumber').value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var mul = firstNumber*secondNumber;
    document.getElementById('result').value = mul;
};

var d =  document.getElementById('division');
d.onclick = function () {
    var firstNumber = Number(document.getElementById('firstNumber').value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var div = firstNumber/secondNumber;
    document.getElementById('result').value = div;
};

var e =  document.getElementById('reminder');
e.onclick = function () {
    var firstNumber = Number(document.getElementById('firstNumber').value);
    var secondNumber = Number(document.getElementById('secondNumber').value);
    var rem = firstNumber%secondNumber;
    document.getElementById('result').value = rem;
};