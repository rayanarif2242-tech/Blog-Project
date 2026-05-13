<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   @include('admin.css')
   <style type="text/css">
    .title_deg
    {
 font-size: 30px;
font-weight: bold;
color: white;
padding: 30px;
text-align: center;
    }
    .table_deg
     {
       border: 1px solid white;
width: 80%;
text-align: center;
margin-left: 30px;
    }
    .th_deg
    {
       background-color:skyblue;

    }

     .img_deg
     {
          height: 100px;
          width: 150px;
          padding: 10px;
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
    @if(session()->has('message'))
    <div class="alert alert-danger">
      <button type="button"class="close" data-dismiss="alert"aria-hidden="true">x</button>
      {{session()->get('message')}}



    </div>
    @endif
      <h1 class="title_deg">All Post</h1>
      <table class="table_deg">
        <tr class="th_deg">
            <th>Post title</th>
            <th>Description</th>
            <th>Post  by </th>
            <th>Post status</th>
            <th>UserType </th>
            <th>Image </th>
            <th>Delete </th>
            <th>Edit </th>
             <th>Status Accept </th>
              <th>Status Reject </th>
        </tr>
        @foreach($post as $post )
        <tr>
            <td>{{ $post->title}}</td>
<td>{!! $post->description !!}</td>
              <td>{{ $post->name}}</td>
               <td>{{ $post->post_staus}}</td>
                <td>{{ $post->usertype}}</td>
                 <td>
                    <img class="img_deg" src="postimage/{{$post->image}}" >
                 </td>
                 <td>
                    <a href="{{ url('delete_post', $post->uuid) }}"class="btn btn-danger"onclick=" confirmation(event)"> Delete</a>
                 </td>
                  <td>
                    <a href="{{ url('edit_page', $post->uuid) }}"class="btn btn-success"> Edit</a>
                 </td>
                 <td>
                  <a onclick="return confirm( 'Are you sure to accept Post' )" href="{{url('accept_post',$post->uuid)}}" class="btn btn-outline-secondary">Accept</a>
                 </td>
                  <td>
                  <a onclick="return confirm( 'Are you sure to Reject Post' )" href="{{url('reject_post',$post->uuid)}}" class="btn btn-primary">Reject</a>
                 </td>

        </tr>
        @endforeach
      </table>
      
     </div>
   

     
         <script type="text/javascript">
function confirmation(ev)
{
    ev.preventDefault();

    var urlToRedirect = ev.currentTarget.getAttribute('href');
    console.log(urlToRedirect);

    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this delete!",
        icon: "warning",
        buttons: ["Cancel", "Yes, Delete"],
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location.href = urlToRedirect;
        }
        // else → do nothing (Cancel works)
    });
}
</script>
  </body>
</html>