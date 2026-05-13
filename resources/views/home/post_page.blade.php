


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
       <base href="/public">
      @include('home.homecss')
      <style type="text/css">
        .div_deg
        {
             text-align: center;
             background-color:black;
        }
        .img_deg
       {
            height: 100px;
            width: 200px;
            margin: auto;
       }
         label
             {
            
            display: inline-block;
            width:200px;
            color:white;
            font-size:18px;
            font-weight:bold;
            
        }
         .input_deg
        {
            padding:20px;
        }
        .title_deg
        {
            font-size:30px;
            font-weight:bold;
            color:white;
             padding:20px;
        }
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
       <div class="div_deg">

          @if(session()->has('message'))
         <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
            {{session()->get('message')}}

         </div>
        @endif

        <h1 class="title_deg">Update Post</h1>
        <form action="{{url('update_post_data',$data->uuid)}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="input_deg">
                <label>Title</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>
             <div  class="input_deg">
                <label>Description</label>
                <textarea name="description">{{$data->description}}</textarea>
            </div>
             <div  class="input_deg">
                <label>Current Image</label>
               <img class="img_deg" src="/postimage/{{$data->image}}" >
            </div>
             <div  class="input_deg">
            <label> Change Current Image</label>
             <input type="file" name="image">
            </div>
             <div  class="input_deg">
                
               <input type="submit" class="btn btn-secondary" value="Update">
            </div>
        </form>
       </div>
        
      </div>
     
     @include('home.footer')
   </body>
</html>