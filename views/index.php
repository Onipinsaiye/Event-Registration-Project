<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".">
    <title>Tech.com</title>
</head>
<body>
    <div class="greeting" id="greeting">

    </div>
    <div class="header" id="header">
        <h2><em>Scientific Calculator</em></h2>
    </div>
    <h3><em>This is a scientific Calculator designed by Victor Onipinsaiye</em></h3>
    <h3><em>Please note that this scientific Calculator can only perform the functions listed below</em></h3>
    <ul>
        <li>Addition</li>
        <li>Substraction</li>
        <li>Division</li>
        <li>Multiplication</li>
    </ul>
    <form action="/" method="post">
        <label for="firstNumber">First Number</label>
        <input type="number" name="num1" id="firstNumber" placeholder="enter first number here" step="0.01"> <br> <br>
        <label for="operator">Operator Sign</label>
        <input type="text" name="operator" placeholder="enter operator sign here"> <br> <br>
        <label for="secondNumber">Second Number</label>
        <input type="number" name="num2" placeholder="enter second number here" step="0.01"> <br> <br>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form> <br>

    <footer>
        <span>&copy; Victor Onipinsaiye, <span id="year"></span>. All rights reserved</span>
    </footer>
    
</body> 
<script>
    const today = new Date()

    const year = today.getFullYear()

    var footerYear = document.getElementById("year")

    footerYear.innerHTML = year

    const hour = today.getHours()

    const timeOfDay = document.getElementById("greeting")

    if(hour < 12 ){
        timeOfDay.innerHTML = "<h2><em>Good Morning Victor!</em></h2>"
    } else if(hour >= 12 && hour < 16){
        timeOfDay.innerHTML = "<h2><em>Good Afternoon Victor!</em></h2>"
    }else if(hour >= 16  && hour < 23 ){
        timeOfDay.innerHTML = "<h2><em>Good Evening Victor!</em></h2>"
    }

</script>
</html>