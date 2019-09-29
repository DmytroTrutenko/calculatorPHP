<?php

$numTries = 0;



if (isset($_POST['first']) && isset($_POST['second']) && isset($_POST['radio'])) {


    $GLOBALS['$first'] = $_POST['first'];
    $GLOBALS['second'] = $_POST['second'];
    $GLOBALS['$result'] = 0 ;




    switch ($_POST['radio']) {
        case '+':
            $GLOBALS['$result'] = $GLOBALS['$first']  + $GLOBALS['second'];
            break;
        case '-':

            $GLOBALS['$result'] = $GLOBALS['$first'] - $GLOBALS['second'];
            break;

        case '*':
            $GLOBALS['$result'] = $GLOBALS['$first'] * $GLOBALS['second'];
            break;

        case '/':
            $GLOBALS['$result'] = $GLOBALS['$first'] / $GLOBALS['second'];
            break;
    }


    $numTries = (int) $_POST['numTries'];
    $result = (float) $_POST['result'];
}





?>


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

            <p><b>Attempts done: <?php echo $numTries++; ?></b></p>


            <!-- добавил отправку данных в пхп через метод пост -->
            <form method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">


                <label for="first">First number:</label>
                <input type="number" id="first" class="numbers" name="first" autofocus>

                <div class="radio">

                    <input type="radio" name="radio" id="r1" class="rr" value="+">
                    <label for="r1"><span></span>Addition</label>
                    <input type="radio" name="radio" id="r2" class="rr" value="-">
                    <label for="r2"><span></span>Subtraction </label>
                    <input type="radio" name="radio" id="r3" class="rr" value="*">
                    <label for="r3"><span></span>Multiplication</label>
                    <input type="radio" name="radio" id="r4" class="rr" value="/">
                    <label for="r4"><span></span>Division</label>

                </div>

                <label for="second">Second number:</label>
                <input type="number" id="second" class="numbers" name="second">

                <p><button type="submit" class="result" name="result">RESULT</button></p>

                <h1>Answer: <?php 
                if(isset($GLOBALS['$result'])){ 
                echo $GLOBALS['$result'];
                }
                ?> </h1>
                <input type="hidden" name="numTries" value=<?php echo $numTries; ?> />
            </form>

        </div>





    </body>

    </html>