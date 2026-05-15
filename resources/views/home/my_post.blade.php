<!DOCTYPE html>
<html lang="en">
<head>

    @include('home.homecss')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style type="text/css">

    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body
    {
        background: #081b29;
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
    }

    /* MATCH YOUR HERO THEME */

    .main-section
    {
        width: 100%;
        min-height: 100vh;

        background:
        linear-gradient(rgba(4,17,29,0.88),
        rgba(4,17,29,0.92)),
        url('/images/banner-bg.png');

        background-size: cover;
        background-position: center;
        background-attachment: fixed;

        padding-bottom: 80px;
    }

    /* TITLE */

    .page-title
    {
        text-align: center;
        padding-top: 80px;
        margin-bottom: 60px;
    }

    .page-title h1
    {
        color: #ffffff;
        font-size: 60px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;

        text-shadow:
        0 0 10px rgba(0,255,255,0.3);
    }

    .page-title p
    {
        color: #b6cbe0;
        font-size: 18px;
        margin-top: 12px;
        letter-spacing: 1px;
    }

    /* POSTS */

    .posts-container
    {
        width: 92%;
        margin: auto;

        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(340px,1fr));
        gap: 35px;
    }

    /* CARD */

    .post-card{    background: #0d2436;    border-radius: 24px;    overflow: hidden;    border: 1px solid rgba(0,198,255,0.15);    transition: 0.4s ease;    box-shadow:    0 10px 30px rgba(0,0,0,0.40);}.post-card:hover{    transform: translateY(-10px);    border: 1px solid rgba(0,198,255,0.45);    box-shadow:    0 15px 35px rgba(0,198,255,0.18);}

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

        background:
        linear-gradient(to top,
        rgba(8,27,41,0.9),
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
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 15px;
        text-transform: capitalize;
    }

    .des_deg
    {
        color: #b8d4e8;
        font-size: 16px;
        line-height: 30px;
        margin-bottom: 28px;
    }

    /* BUTTONS */

    .btn-group
    {
        display: flex;
        gap: 15px;
    }

    .btn-custom
    {
        flex: 1;
        text-align: center;
        padding: 13px;
        border-radius: 14px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s ease;
        font-size: 15px;
    }

    /* DELETE */

    .btn-delete
    {
        background: rgba(255,77,109,0.12);
        color: #ff4d6d;

        border: 1px solid rgba(255,77,109,0.35);
    }

    .btn-delete:hover
    {
        background: #ff4d6d;
        color: white;
        text-decoration: none;
    }

    /* UPDATE */

    .btn-update
    {
        background:
        linear-gradient(to right,
        #00c6ff,
        #0072ff);

        color: white;

        border: none;
    }

    .btn-update:hover
    {
        transform: scale(1.04);

        color: white;
        text-decoration: none;

        box-shadow:
        0 10px 25px rgba(0,198,255,0.35);
    }

    /* ALERT */

    .alert
    {
        width: 80%;
        margin: auto;
        margin-top: 20px;

        border-radius: 12px;
    }

    /* EMPTY */

    .empty-post
    {
        text-align: center;
        color: white;
        font-size: 28px;
        padding: 100px 20px;
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

</head>

<body>

<div class="main-section">

    @include('home.header')

    <!-- SUCCESS MESSAGE -->

    @if(session()->has('message'))

    <div class="alert alert-success">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-hidden="true">
            ×
        </button>

        {{session()->get('message')}}
    </div>

    @endif

    <!-- TITLE -->

    <div class="page-title">

        <h1>My Posts</h1>

        <p>Elegant and modern post management dashboard</p>

    </div>

    <!-- POSTS -->

    @if(count($data) > 0)

    <div class="posts-container">

        @foreach($data as $post)

        <div class="post-card">

            <div class="image-box">

                <img class="img_deg"
                     src="/postimage/{{$post->image}}">

            </div>

            <div class="post-content">

                <h2 class="title_deg">
                    {{$post->title}}
                </h2>

                <p class="des_deg">
                    {{$post->description}}
                </p>

                <div class="btn-group">

                    <a onclick="return confirm('Are you sure to delete this post?')"
                       href="{{url('my_post_del',$post->uuid)}}"
                       class="btn-custom btn-delete">

                        Delete

                    </a>

                    <a href="{{url('post_update_page',$post->uuid)}}"
                       class="btn-custom btn-update">

                        Update

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    @else

    <div class="empty-post">

        No Posts Available

    </div>

    @endif

</div>

@include('home.footer')

</body>
</html>