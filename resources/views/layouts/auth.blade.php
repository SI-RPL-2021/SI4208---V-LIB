<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- css -->
    <style>
        body{
            background-color: #fafafa;
        }
        
    </style>

    <!-- Favicon -->
    <link href="{{ asset('img/vlib.png') }}" rel="icon" type="image/png">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <ul class="navbar-nav">
            <li style="margin-left: 0px;" class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li style="margin-right: 30px; margin-left: 770px;" class="nav-item">
                <a class="nav-link" href="/catalog">Catalog</a>
            </li>
            <li style="margin-right: 30px;" class="nav-item">
                <a class="nav-link" href="#">Publication</a>
            </li>
            <li style="margin-right: 30px;" class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li style="margin-right: 30px;" class="nav-item">
                <form class="form-inline" action="">
                    <a style="border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;"  href="" class="btn btn-success btn-user btn-block">Login</a>
                </form>
            </li>
        </ul>
    </nav>
    
    @yield('content')

    <!-- Footer -->
    <div class="jumbotron" style="background-color: #1cc88a; margin-bottom:0; margin-top:100px;">
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-10">
                <h4><a href="" class="text-white">Home</a></h4>
                <h4><a href="" class="text-white">About Us</a></h4>
            </div>
            <div class="col-sm-2">
                <center><td colspan="3"><h4 class="text-white">Contact</h4></td>
                        <table>
                        <tr>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="{{asset('img/igc.png')}}"></a></td>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="{{asset('img/tw.png')}}"></a></td>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="{{asset('img/fb.png')}}"></a></td>
                        </tr>
                        </table>
                </center>
            </div>
        </div>
        <hr style="border: 2px solid #fafafa; border-radius: 5px;">
        <div class="row">
            <div class="col-sm-9">
                <h6 class="text-white">© Virtual Library</h6>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <a style="text-align: right;" class="text-white" href="">Privacy Policy</a>
                    </div>
                    <div class="col-sm-6">
                        <a style="text-align: right;" class="text-white" href="">Terms & Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>