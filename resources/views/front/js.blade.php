<!-- Javascript files-->{{-- {{ asset('front/css/vendor/bootstrap.min.css')}} --}}
      <script src="{{ asset('front/js/jquery.min.js') }}"></script>
      <script src="{{ asset('front/js/popper.min.js') }}"></script>
      <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('front/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('front/js/custom.js') }}"></script>
      <script src = "{{ asset('front/menu/js/bootstrap.bundle.min.js')}}"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 21.681392, lng: 85.266809},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 21.681392, lng: 85.266809},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANzEI8rHykx8EqO3_czGt85g7HNHc_rEc"></script>
      <!-- end google map js --> 