<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>Inventory Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <h1>Inventory</h1>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>