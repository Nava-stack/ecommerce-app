<!DOCTYPE html>
<html>
    <head>
      @include('admin.partials.css')
    </head>
    <body>
        @include('admin.partials.header')
        <div class="d-flex align-items-stretch">
            <!-- Sidebar Navigation-->
           @include('admin.partials.sidebar')
            <!-- Sidebar Navigation end-->
            <div class="page-content">
                @include('admin.partials.content')
                @include('admin.partials.footer')
            </div>
        </div>
        <!-- JavaScript files-->
        @include('admin.partials.js')
    </body>
</html>
