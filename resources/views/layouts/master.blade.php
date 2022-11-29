<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- Fontawesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <body class="bg-secondary">

    {{-- nav start --}}
    <nav class="container">
        <div class="mt-3 row">
            <div class="col-10">
                <div class="d-flex justify-content-between align-items-center bg-dark rounded-1">
                    <h2 class="text-white px-5 text-muted">U Mya Kyaing</h2>
                    <a href="{{route('home')}}" class="text-decoration-none btn btn-dark text-white">
                        <h3 class="mx-5">Home</h3>
                    </a>
                    <a href="{{route('orderPage')}}" class="text-decoration-none btn btn-dark text-white">
                        <h3 class="mx-5">Order</h3>
                    </a>
                </div>
            </div>
            <div class="col-2">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn bg-dark text-white col-10 offset-1" type="submit">
                        <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
    {{-- nav end --}}

    {{-- body start --}}
    <div class="container">
        <div class="form-control">
        @yield('content')
        </div>
    </div>
    {{-- body end --}}

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 </body>
 </html>

