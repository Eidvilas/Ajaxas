<html>
<head>
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<div id="res"></div>
<div id="result"></div>
<div id="error"></div>

<form method="POST" id="idForm">
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
<script type="text/javascript">

    $("#idForm").submit(function(event) {
        alert("jaskjdfhaskhdf");
        event.preventDefault();
        console.log ($("#idForm").serialize());
        $.ajax({
            type: "POST",
            url: "test3.php",
            data: $("#idForm").serialize(),
            success: function(data)
            {
                console.log(data);
                if (data.status == 'success') {
                    $('#result').append(data.result);
                    console.log ('result');
                }
                if (data.status == 'error') {
                    $('#error').append(data.message);
                    console.log ('message');
                }
            }
        });


    });

    console.log ('data');
</script>
</body>
</html>