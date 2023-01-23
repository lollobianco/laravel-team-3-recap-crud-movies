<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- Styles -->

</head>

<body>

    <div class="d-flex flex-wrap justify-content-between">

        @foreach ($movies as $element)
            <div class="card col-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $element->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $element->original_title }}</h6>
                    <p class="card-text">{{ $element->nationality }}</p>
                    <p class="card-text">{{ $element->date }}</p>
                    <p class="card-text">{{ $element->vote }}</p>
                </div>
            </div>
        @endforeach

    </div>
    <a href="{{route('movies.create')}}">
      <button type="button" class="btn btn-outline-primary">Primary</button>
    </a>

    




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

</body>

</html>
