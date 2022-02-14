<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hispanic</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/jquery.multiselect.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{url('css/mdb.min.css')}}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <style type="text/css">
    .dropdown-large{ padding:1rem; }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-large{min-width:1000px;}
    }	
    /* ============ desktop view .end// ============ */
</style>
    
   
</head>
<body>
    
    {{-- header --}}
    <header class="main-color">
        <div class="container-fluid ">
           {{--  --}}
           <div class="row m-0">
               {{-- logo --}}
            <div class="col-md-3 d-flex align-items-center">
                <p class="m-0 p-0 font-weight-bold white-text">
                    Logo
                </p>
                {{-- <img src="{{asset('svg/')}}" alt=""> --}}
            </div>
            {{-- search/login --}}
            <div class="col-md-9 text-right">
                <ul class="list-inline m-0 p-0">
                    <li class="list-inline-item pr-2">
                        <a href="{{route('search')}}">
                            <span class="badge mt-1 shadow-none btn-custom">
                                <i class="fa fa-search  p-1 black-text" aria-hidden="true" style="font-size: 15px;"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item pr-2">
                        <a href="" class="white-text text-14">How Do I Post ?</a>
                    </li>
                    <li class="list-inline-item  pr-2">
                       <!-- Basic dropdown -->
                       <span class="badge  black-text px-4 py-2 mb-1 btn-custom  shadow-none dropdown-toggle" type="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" >English</span>
                    

                        <div class="dropdown-menu">
                        <a class="dropdown-item text-14" href="#">Action</a>
                        <a class="dropdown-item text-14" href="#">Another action</a>
                        <a class="dropdown-item text-14" href="#">Something else here</a>
                      
                        </div>
                        <!-- Basic dropdown -->
                    </li>
                    <li class="list-inline-item pr-2 ">
                        <a href="{{route('Signup')}}" class="white-text  text-14">Create Account</a>
                    </li>
                    <li class="list-inline-item  pr-2">
                        <a href="{{url('login')}}" class="white-text  text-14">Login</a>
                    </li>
                </ul>
               
            </div>
        </div>  
        </div>
    </header>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-md navbar-light my-0 search shadow-none py-1">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav   m-0 p-0 ">
                <li class="nav-item ">
                    <a class="nav-link m-0 p-0"  href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link m-0 p-0" href="#">Wanted</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link m-0 p-0" href="{{ route('sell.long.form')}}">Sell/Buy</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link m-0 p-0" href="#">Classified</a>
                </li>
                <li class="nav-item dropdown pl-3">
                    <a class="nav-link dropdown-toggle m-0 p-0  " href="#" data-bs-toggle="dropdown" aria-expanded="true"> Events  </a>
                    <div class="dropdown-menu dropdown-large " data-bs-popper="none">
                        <div class="row ">
                            <div class="col-3">
                                <h6 class="title text-16 font-weight-bold">Category</h6>
                                <ul class="list-unstyled text-14">
                                    <li><a href="{{ route('event.long.form')}}" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                </ul>
                            </div><!-- end col-3 -->
                            <div class="col-3">
                                <h6 class="title text-16 font-weight-bold">Category1</h6>
                                <ul class="list-unstyled text-14">
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                </ul>
                            </div><!-- end col-3 -->
                            <!-- end col-3 -->
                            <div class="col-3">
                                <h6 class="title text-16 font-weight-bold">Category2</h6>
                                <ul class="list-unstyled text-14">
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                </ul>
                            </div><!-- end col-3 -->
                            <!-- end col-3 -->
                            <div class="col-3">
                                <h6 class="title text-16 font-weight-bold">Category3</h6>
                                <ul class="list-unstyled ">
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                    <li><a href="#" class="text-14">Submenu item </a></li>
                                </ul>
                            </div><!-- end col-3 -->
                        </div><!-- end row -->
                    </div> <!-- dropdown-large.// -->
                </li>
               
                <li class="nav-item pl-3">
                    <a class="nav-link m-0 p-0" href="{{ route('yellow.long')}}">Yello Pages</a>
                </li>
                
            </ul>
            
        </div>
    </nav>



    @yield('content')
     <!-- Copyright -->
  <div class="footer-copyright main-color white-text  text-center py-2">© 2020 Copyright:
    <a href="" class=" white-text"> .com</a>
  </div>
  <!-- Copyright -->
    
  <!-- jQuery -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <script src="{{asset('js/jquery.multiselect.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'editor1' );
</script>
<script>
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    document.getElementById("output").style.display="block";
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
   

  };
</script>
<script>
    $('document').ready(function(){
  
  var $file = $('#file-input'),
      $label = $file.next('label'),
      $labelText = $label.find('span'),
      $labelRemove = $('i.remove'),
      labelDefault = $labelText.text();
  
  // on file change
  $file.on('change', function(event){
    var fileName = $file.val().split( '\\' ).pop();
		if( fileName ){
      console.log($file)
			$labelText.text(fileName);
      $labelRemove.show();
    }else{
			$labelText.text(labelDefault);
      $labelRemove.hide();
    }
  });
  
  // Remove file   
  $labelRemove.on('click', function(event){
    $file.val("");
    $labelText.text(labelDefault);
    $labelRemove.hide();
    console.log($file)
  });
})

    </script>

</body>
</html>