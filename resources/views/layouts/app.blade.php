<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Task List App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg bg-gray-100">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6',
            });
        </script>
    @endif

    <h1 class=" text-3xl text-center my-4 ">@yield('title')</h1>
    <div class="p-4">
        @yield('content')
    </div>
    <footer>
        <div class="text-center">
            <p class="text-gray-500 text-sm">Laravel 10 Task List App &copy; {{ date('Y') }}</p>
        </div>
    </footer>

</body>

</html>
