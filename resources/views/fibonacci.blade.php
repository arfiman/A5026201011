<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Fibonacci Generator</title>
</head>

<body class="bg-light">
    <?php
        $nNumber = $_GET["nNumber"];

        function generate($nNumber){
            $ans = "";
            $firstNumber = 0;
            $secondNumber = 1;
            if ($nNumber >= 1) {
                $ans = $ans . $firstNumber;
            }
            if ($nNumber >= 2) {
                $ans = $ans . ", " . $secondNumber;
            }
            for ($i = 3; $i <= $nNumber; $i++) {
                $temp = $firstNumber+$secondNumber;
                $ans = $ans . ", " . $temp;
                $firstNumber = $secondNumber;
                $secondNumber = $temp;
            }
            return $ans;
        }
    ?>
    <div class="container-fluid p-5">
        <div class="mt-5 mb-5">
            <h1>
            <?php
                if($nNumber == 1){
                    echo "The First Fibonacci Number";
                } else {
                    echo "The First $nNumber Fibonacci Number";
                }
            ?>
            </h1>
        </div>
        <div>
            <p>
            <?php
                $fibo = generate($nNumber);
                echo generate($nNumber);
            ?>
            </p>
        </div>
    </div>
</body>

</html>
