<!DOCTYPE html>
<html lang="en">
   @include('front.head')
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('front/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include('front.header')
      <!-- end header inner -->
      <!-- end header -->
      
      <!-- content -->
       @yield('content')
       <!-- end content -->
      

      <!--  footer -->
      @include('front.footer')
      <!-- end footer -->
      @include('front.js')
   </body>
</html>