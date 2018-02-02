<!DOCTYPE html>
<html>
  <head>
    @include('includes.head')
  </head>
  <body>
    <div class="container">

      <header class="row">
        @include('includes.header')
      </header>

      <div class="main" class="row">

        {{-- Sidebar content --}}
        <div class="sidebar col-md-4">
          @include('includes.sidebar')
        </div>

        {{-- Main content --}}
        <div class="content col-md-8">
            @yeild('content')
        </div>
        
      </div>

      <footer class="row">
        @include('includes.footer')
      </footer>
    </div>
  </body>
</html>
