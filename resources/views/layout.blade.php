<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   
    <nav class="text-center bg-blue-500 text-white p-4 flex " >
        <ul class="flex  space-x-4 ">
            <li><a href="home">home</a></li>
            <li><a href="about">about</a></li>
            <li><a href="contact">contact</a></li>
            
            
        </ul>
    </nav>

    <h1 class="text-center text-3xl font-bold mt-4">
        @yield('titre')
    </h1>
    <p> 
        @yield('content')
    </p>
</body>
</html>