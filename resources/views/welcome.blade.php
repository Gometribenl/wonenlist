<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    @foreach($items as $item)
                            @if($item->status == 1)
                                <div class="col-md-4" style="margin-bottom: 1rem;">
                                    <div class="list-item-wonen">{{$item->listitem}}
                                        <p>Dit product is gekocht!</p>
                                    </div>
                                </div>
                            @else
                                <form name="items" id="items" method="POST" action="{{ route('items.update', ['item' => $item]) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-4" style="margin-bottom: 1rem;">
                                        <div class="list-item-wonen">{{$item->listitem}}
                                            <p style="font-size: 16px;">Link:<a href="{{$item->url}}">{{$item->url}}</a></p>
                                            <input type="hidden" value="1" name="status">
                                            <p style="font-size: 16px;">Wil jij dit kopen druk dan op ja!</p>
                                        <button type="submit" class="btn btn-primary">Ja!</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </main>
    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>




