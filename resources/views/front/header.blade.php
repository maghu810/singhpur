{{-- <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ route('home') }}"><img src="{{asset('front/images/singhpurlg.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item1 active">
                                 <a class="nav-link1" href="{{ route('home') }}">Home</a>
                              </li>
                              <li class="nav-item1">
                                 <a class="nav-link1" href="{{ route('allapp') }}">Application/Letter</a>
                              </li>

                              @if(Auth::check())
                                 <li class="nav-item1 d_none login_btn">
                                   <form method="POST" action="{{ route('logout') }}">
                                @csrf
                              
                                <button type="submit" class="nav-link1">Logout</button>
                            </form>
                              </li>
                              @else
                              <li class="nav-item1 d_none login_btn">
                                 <a class="nav-link1" href="#">Login</a>
                              </li>
                              <li class="nav-item1 d_none">
                                 <a class="nav-link1" href="#">Register</a>
                              </li>
                              @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header> --}}
      <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
      <style type="text/css">
         .headernav{
            padding: 0;
            margin: o;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
         }
         .navheight{
            height: 100px;
            width: 100%;
            background: #03cafc;
         }
         nav{
           background: #0082e6;
           height: 80px;
           width: 100%;
         }
         label.logo{
           color: white;
           width: 400px;
           font-size: 35px;
           line-height: 100px;
           padding: 0 100px;
           font-weight: bold;
         }
         nav ul{
           float: right;
           margin-right: 20px;
         }
         nav ul li{
           display: inline-block;
           line-height: 100px;
           margin: 0 5px;
         }
         nav ul li a{
           color: white;
           font-size: 17px;
           padding: 7px 13px;
           border-radius: 3px;
           text-transform: uppercase;
         }
         a.active,a:hover{
           background: #1b9bff;
           transition: .5s;
         }
         .checkbtn{
           font-size: 30px;
           color: white;
           float: right;
           line-height: 80px;
           margin-right: 40px;
           cursor: pointer;
           display: none;
         }
         #check{
           display: none;
         }
         @media (max-width: 952px){
           label.logo{
             font-size: 30px;
             padding-left: 50px;
           }
           nav ul li a{
             font-size: 16px;
           }
         }
         @media (max-width: 858px){
           .checkbtn{
             display: block;
           }
           ul{
             position: fixed;
             width: 100%;
             height: 100vh;
             background: #2c3e50;
             top: 80px;
             left: -100%;
             text-align: center;
             transition: all .5s;
             z-index: 10000;
           }
           nav ul li{
             display: block;
             margin: 50px 0;
             line-height: 30px;
           }
           nav ul li a{
             font-size: 20px;
           }
           a:hover,a.active{
             background: none;
             color: #0082e6;
           }
           #check:checked ~ ul{
             left: 0;
           }
         }
      </style>
      <nav class="navheight">
         <input type="checkbox" id="check">
         <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
         </label>
         <label class="logo"><img width="100%" src="{{asset('front/images/singhpurlg.png')}}" alt="#" style="a:hover: none;" /></label>
         <ul class="headernav ul">
            <li ><a href="{{ route('home') }}">Home</a></li>
            
            @if(Auth::check())
            <li ><a href="{{ route('allapp') }}">Application/Letter</a></li>
            <li >
             <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-primary" type="submit">Logout</button>
             </form>
          </li>
          @else
          <li >
            <a class="nav-link1" href="{{ route('login') }}">Login</a>
         </li>
         <li>
            <a class="nav-link1" href="{{ route('register') }}">Register</a>
         </li>
         @endif
         </ul>
      </nav>