<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Layout</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
   {{$slot}}
   
   <h2>Second Layout</h2>
    @livewireScripts
</body>
</html>