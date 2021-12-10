<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creer list items</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    Maak hier nieuwe list items aan.
                </div>
                <div class="card-body">
                    <form name="items" id="items" method="post" action="/items">
                        @csrf
                        <div class="form-group">
                            <label for="listitem">Item</label>
                            <input type="text" id="listitem" name="listitem" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <p>Al bemachtiged?</p>
                            <input type="radio" id="false" name="status" value="0">
                            <label for="html">Nee</label><br>
                            <input type="radio" id="true" name="status" value="1">
                            <label for="true">Ja</label><br>
                        </div>
                        <button type="submit" class="btn btn-primary">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
