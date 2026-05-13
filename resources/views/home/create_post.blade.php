


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
       <style type="text/css">
     .div_deg
        {
              text-align: center;
        }
        .title_deg
        {
            font-size:30px;
            font-weight:bold;
            color:white;
             padding:20px;
        }
        label
             {
            
            display: inline-block;
            width:200px;
            color:white;
            font-size:18px;
            font-weight:bold;
            
        }
        .field_deg
        {
            padding:20px;
        }
        
       </style>
      @include('home.homecss')
   </head>
   <body>
    @include('sweetalert::alert')

   <!-- header section start -->
   <div class="header_section">
      @include('home.header')
   
   <!-- header section end -->

   <!-- form section -->
  <div class="div_deg">
   <h3 class="title_deg">Add Post</h3>

   <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="field_deg">
         <label>Title</label>
         <input type="text" name="title" class="form-control w-50 mx-auto" required>
      </div>

      <div class="field_deg">
         <label>Description</label>
         <textarea name="description" id="description" class="form-control w-50 mx-auto"></textarea>
      </div>

      <div class="field_deg">
         <label>Add Image</label>
         <input type="file" name="image" class="form-control w-50 mx-auto">
      </div>

      <div class="field_deg">
         <input type="submit" value="Add Post" class="btn btn-primary px-4">
      </div>

   </form>
</div>
   @include('home.footer')


   <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

   <script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>

</body>