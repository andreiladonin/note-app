<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Notes</title>
</head>
<body>
    <header class=" py-8 bg-amber-500">
        <div class="container mx-auto">
            <nav class="w-full flex justify-end">
                @auth
                    <a href="{{route('signOut')}}" class="p-2 rounded border-black bg-red-600 text-white">Log Out</a>     
                @endauth
                
            </nav>
        </div>
    </header>
    <div class="container mx-auto">
        {{$slot}}
    </div>
    @vite('resources/js/index.js')
</body>
</html>