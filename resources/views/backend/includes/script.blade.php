
<script src="{{asset('backeend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backeend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('backeend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backeend/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backeend/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('backeend/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backeend/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('backeend/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('backeend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backeend/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backeend/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backeend/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('backeend/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backeend/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('backeend/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
    <script src="{{asset('backeend/lib/gmaps/gmaps.min.js')}}"></script>

    <script src="{{asset('backeend/js/bracket.js')}}"></script>
    <script src="{{asset('backeend/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('backeend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backeend/js/custom.js')}}"></script>
    <script src="{{asset('backeend/js/dashboard.js')}}"></script>backeend/
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>