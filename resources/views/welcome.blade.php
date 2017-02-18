<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="//cdn.bootcss.com/bulma/0.3.1/css/bulma.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <div class="columns">
        <div class="column is-4">
            @component('panel')
                @slot('heading')
                    Hello World
                @endslot

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>,
            tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
            gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>,
            in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id
            porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
            @endcomponent

        </div>

        <div class="column is-4">
            @component('panel')

            dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>,
            tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
            gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>,
            in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id
            porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
            @endcomponent

        </div>
    </div>
</div>

</body>
</html>
