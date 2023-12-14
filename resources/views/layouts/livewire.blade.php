<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiveWire</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
<x-navbar />
   {{$slot}}
   
    @livewire('create-post')
    @livewireScripts
</body>
</html>