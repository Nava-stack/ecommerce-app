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
      .table_deg{
        text-align: center;
        margin: auto;
        border: 2px solid white;
        border-radius: 3px;
      }
      th{
        background-color: skyblue;
        color: white;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
      }
      td{
        padding: 15px;
        color: white;
        border: 1px solid skyblue;

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
                </div>
                <div>
                    <table class="table_deg">
                        <tr>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $category )
                            <tr>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <a href="{{url('edit_category',$category->id)}}" class="btn">Edit</a>
                                    <a href="{{url('delete_category',$category->id)}}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            @include('admin.partials.footer')
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="text/javascript">
            function confirmation(e){

                e.preventDefault();
                var redirectUrl = e.currentTarget.getAttribute('href');

                console.log(redirectUrl);
                Swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    buttons:true,
                    dangerMode:true,
                    // showCancelButton: true,
                    // confirmButtonColor: '#3085d6',
                    // cancelButtonColor: '#d33',
                    // confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result) {
                        window.location.href = redirectUrl;
                    }
                })
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @include('admin.partials.js')
    </body>
</html>
