<!DOCTYPE html>
<html>
    <head>
      @include('admin.partials.css')
      <style type="text/css">
      input[type='text']{
        margin: 10px;
        width:400px;
        height: 40px;
      }
      .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
    </head>
    <body>
        @include('admin.partials.header')
        <div class="d-flex align-items-stretch">
            <!-- Sidebar Navigation-->
           @include('admin.partials.sidebar')
            <!-- Sidebar Navigation end-->
            <div class="page-content">
                <h1 class="text-white mt-2 mx-4">Add Category</h1>
                <div class="div_deg">
                <form action="{{url('add_category')}}" method="POST">
                    @csrf
                    <div>
                        <input type="text" name="category" placeholder="category">
                        <input type="submit" class="btn btn-primary" value="Add Category">
                    </div>
                </form>
                @include('admin.partials.footer')
            </div>
            </div>
        </div>
        <!-- JavaScript files-->
        @include('admin.partials.js')
    </body>
</html>
