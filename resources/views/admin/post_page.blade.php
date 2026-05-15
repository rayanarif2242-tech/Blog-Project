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

        .div_center {
            text-align: center;
            padding: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>

<body>
@include('admin.header')

<div class="d-flex align-items-stretch">

    @include('admin.sidebar')

    <div class="page-content">

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
        @endif

        <h1 class="post_title">Add Post</h1>

        <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- TITLE -->
            <div class="div_center">
                <label>Post Title</label>
                <input type="text" name="title" required>
            </div>

            <!-- DESCRIPTION -->
            <div class="div_center">
                <label>Post Description</label>
                <textarea name="description" id="description"></textarea>
            </div>

            <!-- IMAGE -->
            <div class="div_center">
                <label>Add Image</label>
                <input type="file" name="image" required>
            </div>

            <!-- SUBMIT -->
            <div class="div_center">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>

        </form>

    </div>
</div>

<!-- CKEditor (IMPORTANT: put at bottom) -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>

</body>
</html>