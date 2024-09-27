@props(['styles'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Troy</title>
    <meta name="author" content="troy">
    <meta name="description" content="portfolio">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body {{ $styles ?? '' }}>
    {{ $slot }}
</body>

</html>
