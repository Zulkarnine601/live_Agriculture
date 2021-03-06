
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('name')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('public/final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/final_eagri/vendor/bootstrap/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('public/final_eagri/css/farmer-style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-3">
        <a class="navbar-brand ml-4" href="#">E-Agriculture</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('f_home')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">Crops</a>
                    <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                         <a class="nav-link" href="{{route('crop_import')}}">Import crop</a>
                        <a class="nav-link" href="{{route('crop_manage')}}">Manage crop</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user_manage')}}">Customer_Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('farm_bid_messages')}}">Messages</a>
                </li>
               
                 @if (session()->has('f_username'))
                
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        <i class="fa fa-user" style="font-size: 20px;">{{Session()->get('f_username')}}</i>
                    </a>
                    <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                        {{--<form class="form-inline" action="" method="post" enctype="multipart/form-data">--}}
                        <a class="nav-link" href="{{route('f_profile',['f_username'=>Session()->get('f_username')])}}">profile</a>
                        <a class="nav-link" href="{{route('f_settings')}}">setting</a>
                        <a class="nav-link" href="{{route('logout',['name'=>'f_username'])}}">logout</a>
                    </div>
                </li>
                @endif

            </ul>
            <form class="form-inline my-2 my-lg-0 mr-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fa fa-search" style="font-size:28px;color:green"></i>
                </button>
            </form>

        </div>

    </nav>
</div>

<!-- Page Content -->
{{--<div class="container">--}}

<div class="row justify-content-sm-center mx-3 my-5 content">


    <!-- /.col-lg-3 -->
    <div class="col-lg-12 mt-lg-0">

        @yield('body')

    </div>


</div>
<!-- /.row -->
{{--<div  class="mr-auto">--}}
{{--<span>top</span>--}}
{{--</div>--}}

<!-- Footer -->
<footer class="py-5 bg-dark">

    <div class="row nav text-light mx-auto">
        <div class="col-lg-3">
            <h2 class="text-center">Our website</h2>
            <h5 class=" text-left text-justify" style="font-size: 20px" >At e_agriculture,
                Innovation and simplicity makes us happy: our goal is to remove any technical or financial
                barriers that can prevent crops sell and buy. We're excited to
                help you on your journey!?</h5>
        </div>

        <div class="col-lg-3">
            <h2 class="text-center">Quick Menu</h2>
            <li class="nav-item"><a class="nav-link text-center" href="">Home</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">About</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Services</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Message Us</a></li>
        </div>



        <div class="col-lg-3 text-left">
            <h2 class="text-center">News</h2>
            <li class="nav-item"><a class="nav-link text-center" href="">kharif crop</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">rabi crop</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">zerind crop</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Guest Post</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="">Live Support</a></li>
        </div>



        <div class="col-lg-3 text-center">
            <h2 class="">Social Links</h2>
            <li class="nav-item" style="font-size: 22px">
                <a class="fa fa-facebook" href=""></a>
                <a class="fa fa-instagram ml-2" href=""></a>
                <a class="fa fa-youtube ml-2" href=""></a>
                <a class="fa fa-github ml-2" href=""></a>
            </li>

        </div>
    </div>

    <p class="m-0 text-center text-white">Copyright &copy; E_agriculture 2020</p>
    <!-- Message -->
    <button class="fixed-bottom btn btn-success float-right " data-toggle="modal" data-target="#messageModal">Message us</button>


    <!-- Message Modal -->
    <div class="modal" id="messageModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message us</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" name="phone" type="tel" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="5" name="message" placeholder="Message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-warning">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="{{url('public/final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('public/final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
