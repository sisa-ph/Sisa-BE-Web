<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Translator App</title>
</head>

<body>
    <div class="query-form">
        <form action="{{ route('translate.query') }}" method="GET">
            <input type="text" name="query" id="query" value=" {{$query }}" required>
            <button type="submit" >Translate</button>
        </form>

    </div>

    <div class="bicol-form">
        <form action="">
            <input type="text" value="@forelse($translates as $translate)
            {{ $translate->bicol }}
            @empty
            Not found
        @endforelse" placeholder="bicol" name="bicol" id="bicol" >
        </form>

    </div>

</body>
</html>
