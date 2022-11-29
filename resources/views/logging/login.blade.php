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
 <body>

    <div class="row">
        <div class="col-6 offset-3 mt-5 bg-secondary rounded-3">
            <div class="login-form d-flex align-items-center justify-content-center">
                <div class="form-group form-control text-center bg-dark my-2">
                    <h3 class="text-white"><span class="h5">Welcome</span> Yee Mon Oo</h3>
                    <p class="text-white">Here is your page to do list for your sale.<br>Please login.</p>
                </div>
                <form action="{{route('login')}}" method="post">
                    @csrf

                        <div class="form-group form-control text-center bg-dark my-2 mx-2">
                            <label class="text-white">Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group form-control text-center bg-dark my-2 mx-2">
                            <label class="text-white">Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                        </div>

                        <div class="text-center">
                            <button class="btn bg-dark text-white col-10 offset-1 my-2" type="submit">Login</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 </body>
 </html>

