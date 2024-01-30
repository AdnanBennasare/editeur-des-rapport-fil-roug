<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css"> --}}
   {{-- <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> --}}

{{-- 
   <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
   {{-- <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css"/> --}}



    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simplemde.css') }}">

    
    @vite(['resources/css/app.css'])

</head>
<body>
    <div class="wrapper">

        @include('layouts.navbar')
        @include('layouts.sidebar')

            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Prototype</b>
                </div>
                <strong>Copyright 2023 & 2024 <a href="https://solicode.co"> Solicoders</a>.</strong>All rights
                reserved.
            </footer>
      
        </div>

    @vite(['resources/js/app.js'])
      

   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>