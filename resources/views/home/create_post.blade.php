


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
          <style  type="text/css">

    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body
    {
        background: linear-gradient(135deg,#0f172a,#111827,#1e293b);
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
    }

    /* NAVBAR FIX */

    .header_section
    {
        background: transparent !important;
    }

    nav,
    .navbar,
    header
    {
        background: rgba(15,23,42,0.95) !important;
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255,255,255,0.08);
    }

    nav a,
    .navbar a,
    header a
    {
        color: #f8fafc !important;
        font-weight: 500;
    }

    /* PAGE TITLE */

    .page-title
    {
        text-align: center;
        padding-top: 60px;
        margin-bottom: 55px;
    }

    .page-title h1
    {
        font-size: 55px;
        color: #ffffff;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .page-title p
    {
        color: #94a3b8;
        font-size: 18px;
        margin-top: 12px;
    }

    /* POSTS GRID */

    .posts-container
    {
        width: 92%;
        margin: auto;

        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(340px,1fr));
        gap: 35px;

        padding-bottom: 60px;
    }

    /* POST CARD */

    .post-card
    {
        background: rgba(30,41,59,0.75);
        border-radius: 24px;
        overflow: hidden;

        border: 1px solid rgba(255,255,255,0.08);

        backdrop-filter: blur(14px);

        box-shadow:
        0 10px 35px rgba(0,0,0,0.35);

        transition: 0.4s ease;
    }

    .post-card:hover
    {
        transform: translateY(-12px);

        box-shadow:
        0 20px 45px rgba(59,130,246,0.25);
    }

    /* IMAGE */

    .image-box
    {
        width: 100%;
        height: 240px;
        overflow: hidden;
        position: relative;
    }

    .image-box::after
    {
        content: '';
        position: absolute;
        inset: 0;

        background: linear-gradient(to top,
        rgba(15,23,42,0.7),
        transparent);
    }

    .img_deg
    {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s ease;
    }

    .post-card:hover .img_deg
    {
        transform: scale(1.08);
    }

    /* CONTENT */

    .post-content
    {
        padding: 28px;
    }

    .title_deg
    {
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 16px;
        text-transform: capitalize;
    }

    .des_deg
    {
        color: #cbd5e1;
        font-size: 16px;
        line-height: 29px;
        margin-bottom: 28px;
    }

    /* BUTTONS */

    .btn-group
    {
        display: flex;
        gap: 14px;
    }

    .btn-custom
    {
        flex: 1;
        text-align: center;
        padding: 13px;
        border-radius: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s ease;
        font-size: 15px;
    }

    .btn-delete
    {
        background: rgba(239,68,68,0.15);
        color: #f87171;
        border: 1px solid rgba(248,113,113,0.3);
    }

    .btn-delete:hover
    {
        background: #ef4444;
        color: white;
        text-decoration: none;
    }

    .btn-update
    {
        background: linear-gradient(to right,#3b82f6,#8b5cf6);
        color: white;
        border: none;
    }

    .btn-update:hover
    {
        transform: scale(1.04);
        color: white;
        text-decoration: none;

        box-shadow:
        0 10px 25px rgba(139,92,246,0.35);
    }

    /* ALERT */

    .alert
    {
        width: 80%;
        margin: auto;
        border-radius: 12px;
    }

    /* EMPTY */

    .empty-post
    {
        text-align: center;
        color: white;
        font-size: 25px;
        padding: 80px 20px;
    }

    /* RESPONSIVE */

    @media(max-width:768px)
    {
        .page-title h1
        {
            font-size: 40px;
        }

        .posts-container
        {
            width: 95%;
        }
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