<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smile</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="navBar">
        <x-nav-bar-detail />
    </div>
    <div class="body">
        <x-body-detail/>
    </div>
    <div class="footer">
        <x-footer />
    </div>
</body>
</html>