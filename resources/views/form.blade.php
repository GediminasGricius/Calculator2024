<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        VAT calculator
                    </div>
                    <div class="card-body">
                        <form action="result" method="post">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label">Please enter a price:</label>
                                <input name="price" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Calculate</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Results</div>
                    <div class="card-body">
                        {{ $text }}
                    </div>
                </div>

            </div>
        </div>
    </div>





</body>
</html>

