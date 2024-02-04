<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite('resources/js/app.js')
    </head>

    <body>
        <p>
            <b>Trade:- </b> <span id="trade-data"></span>
        </p>


        <script type="module">
            Echo.channel('trades').listen('NewTrade', (data) => {
                document.getElementById('trade-data').innerHTML = data.trade;
            });
        </script>
    </body>

</html>
