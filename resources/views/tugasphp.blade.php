<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
    <title>Fibonacci Generator</title>
</head>

<body class="bg-light">
    <div class="container-fluid p-5 center">
        <div class="text-center mb-4">
            <h1>Fibonacci Generator</h1>
        </div>
        <form action="generatefibo">
            <div>
                <label for="nNumber" class="col-form-label">How many fibonacci number?</label>
                <input type="number" name="nNumber" id="nNumber" class="form-control" placeholder="Any positive number">
                <div id="numberwarning" class="form-text text-warning collapse">Number can't be zero or negative</div>
            </div>
            <button class="btn btn-primary mt-3" onclick="fiboGenerate();" id="generatebtn">Generate</button>
        </form>
    </div>
</body>

</html>
