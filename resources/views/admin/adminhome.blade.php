<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

   <style type="text/css">

    .post_title
    {
        font-size:30px;
        font-weight:bold;
        text-align:center;
        padding:30px;
        color:white;
    }

   </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
        <div class="page-content">
             <h1 class="post_title">Add Post</h1>
         </div>
      @include('admin.footer')
  </body>
</html>