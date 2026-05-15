

<!DOCTYPE html>
<html>
<head>

    @include('admin.css')

    <style>

        body{
            background: #0f172a;
            font-family: Arial, sans-serif;
        }

        .page_wrapper{
            display: flex;
        }

        .content_area{
            width: 100%;
            padding: 40px;
        }

        .post_card{
            background: #1f2937;
            max-width: 800px;
            margin: auto;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.4);
        }

        .post_title{
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        label{
            display: block;
            color: #e5e7eb;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .field{
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="file"],
        textarea{
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            outline: none;
            background: #111827;
            color: white;
        }

        .btn_submit{
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn_submit:hover{
            transform: scale(1.03);
        }

        /* CKEditor fix */
        .ck-editor__editable{
            min-height: 200px;
            background: white !important;
            color: black !important;
            border-radius: 10px;
        }

        .alert{
            max-width: 800px;
            margin: auto;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

@include('admin.header')

<div class="d-flex align-items-stretch">

    @include('admin.sidebar')

    <div class="content_area">

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="post_card">

            <h1 class="post_title">Add New Post</h1>

            <form action="{{ url('add_post') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- TITLE -->
                <div class="field">
                    <label>Post Title</label>
                    <input type="text" name="title" required>
                </div>

                <!-- DESCRIPTION -->
                <div class="field">
                    <label>Post Description</label>
                    <textarea name="description" id="description"></textarea>
                </div>

                <!-- IMAGE -->
                <div class="field">
                    <label>Upload Image</label>
                    <input type="file" name="image" required>
                </div>

                <!-- SUBMIT -->
                <button type="submit" class="btn_submit">
                    Publish Post
                </button>

            </form>

        </div>

    </div>

</div>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#description'))
    .catch(error => console.error(error));
</script>

</body>
</html>