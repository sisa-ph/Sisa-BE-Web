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
            <textarea  name="query" id="query" rows="4" cols="50" maxlength="200" required >
                    {{$query }}
            </textarea>

            <button type="submit" >Translate</button>
        </form>

    </div>

    <div class="bicol-form">
        <form action="">
            <textarea placeholder="bicol" name="bicol" id="bicol" crows="4" cols="50" maxlength="200" >
                    @foreach ($translates as $translate)
                        {{ $translate->bicol }}
                    @endforeach
            </textarea>
        </form>

    </div>

</body>
</html>
