

<?php

if (isset($_GET["firstNumber"]) && isset($_GET["secondNumber"])) {
    if ($_GET["radio"] == "sum") {
        echo $_GET["firstNumber"] + $_GET["secondNumber"];
    }

    if ($_GET["radio"] == "min") {
        echo $_GET["firstNumber"] - $_GET["secondNumber"];
    }

    if ($_GET["radio"] == "dau") {
        if ($_GET["firstNumber"] ==0 || $_GET["firstNumber"] ==0) {
            echo "daugyba is nulio negalima";
        } else {
            echo $_GET["firstNumber"] * $_GET["secondNumber"];
        }

    }

    if ($_GET["radio"] == "dal") {
        if ($_GET["firstNumber"] ==0 || $_GET["firstNumber"] ==0) {
            echo "dalyba is nulio negalima";
        } else {
            echo $_GET["firstNumber"] / $_GET["secondNumber"];
        }
    }
    echo "<br><br>";
}

?>


<form action="test.php">
    First number:<br>
    <input type="text" name="firstNumber" value="">
      <br>
    Second number:<br>
    <input type="text" name="secondNumber" value="">
      <br><br>
    <input type="radio" name="radio" value="sum">Sum<br>
    <input type="radio" name="radio" value="min">Substract<br>
    <input type="radio" name="radio" value="dau">Multiply<br>
    <input type="radio" name="radio" value="dal">Divide<br>
      <br>
      <input type="submit" value="Submit">
</form>