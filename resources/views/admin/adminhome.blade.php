<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

   <style type="text/css">
    .post_title {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
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
          
          <!-- Your form content goes here -->

          <!-- FIX 1: Move footer inside page-content -->
          @include('admin.footer')
      </div> <!-- This closes page-content -->

    </div> <!-- This closes d-flex -->
    
  </body>
</html>