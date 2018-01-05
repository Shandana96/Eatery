<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    
  </head>
  
  <body>

    <!--some navigation issues with nav bar
    Fix later 
    OR just put the nav bar directly here and make the code super ugly. What choice do I really have? --> 
     
      
    <div class="container">
 
  @include('partials._messages')
 
   
 
      @yield('content')

      @include('partials._footer')

    </div> <!-- end of .container --> 

        @include('partials._javascript')

        @yield('scripts')

  </body>
</html>