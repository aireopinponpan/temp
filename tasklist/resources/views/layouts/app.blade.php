<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <tltle>tasklist</tltle>
        <meta name="Viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    
    <body>
        @include('commons.navbar')
        <div class="container">
            @yield('content')
        </div>
        
        <script src="https://code.jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstarp.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>