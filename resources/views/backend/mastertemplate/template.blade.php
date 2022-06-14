
<!DOCTYPE html>
<html lang="en">
  <head>
    <!----------- head ----------->
      @include('backend.includes.head')

    <!----------- css ----------->
     @include('backend.includes.css')

    
  </head>

  <body>
    <!----------- leftbar ----------->
    @include('backend.includes.leftbar')

    <!----------- topbar ----------->
    @include('backend.includes.topbar')


    <!----------- rightbar ----------->
    @include('backend.includes.rightbar')
    

    

   

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        @yield('contant')

      </div><!-- br-pagebody -->
      <!-- ------footer---------- -->
    @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- ---script---- -->

    @include('backend.includes.script')

    
  </body>
</html>
