<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wonen Kay & Cathy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Hallo welkom op de site van Kay & Cathy.</h1>
                        <p>Hier zullen wij onze wensen en benodigedheden bijhouden.</p>
                    </div>
                    <div class="row">
                    <form name="items" id="items" method="post" action="/items">
                        <p>Heb je dit gekocht? Zo ja kies ja en druk op verstuur.</p>
                    @foreach($items as $item)
                            <div class="col-md-4" style="margin-bottom: 1rem;">
                                <div class="list-item-wonen">{{$item->listitem}}
                                    <div class="form-group">
                                        <label class="container-label" for="true">Ja
                                            <input type="radio" id="true" name="status" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container-label" for="html">Nee
                                            <input checked="checked" type="radio" id="false" name="status" value="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                        <button type="submit" class="btn btn-primary">Verstuur</button>
                    </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>




