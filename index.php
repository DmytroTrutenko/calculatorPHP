<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>calculatorPHP</title>
    <link rel="stylesheet" href='css/style.css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Calculator on PHP</h1>


    <h2>Result:</h2>
    <div class="calc">

        <p><b>Attempts done: <?php  ?></b></p>

        <label for="first">First number:</label>
        <input type="number" id="first" class="numbers" autofocus>

        <div class="radio">

            <input type="radio" name="radio" id="r1" class="rr">
            <label for="r1"><span></span>Addition</label>
            <input type="radio" name="radio" id="r2" class="rr">
            <label for="r2"><span></span>Subtraction </label>
            <input type="radio" name="radio" id="r3" class="rr">
            <label for="r3"><span></span>Multiplication</label>
            <input type="radio" name="radio" id="r4" class="rr">
            <label for="r4"><span></span>Division</label>

        </div>

        <label for="second">Second number:</label>
        <input type="number" id="second" class="numbers">

        <p><button type="submit" class="result">RESULT</button></p>


    </div>





</body>

</html>