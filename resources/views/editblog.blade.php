<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1 class="text-center">Add New Blog</h1>

    <h1 class="text-center">
        <a href="/" class="btn btn-warning">Home</a>
        <a href="/addblog" class="btn btn-primary">Add Blogs</a>
        <a href="/addcategory" class="btn btn-danger">Add Categroy</a>
    </h1>
    <form method="POST" action="{{  route('update_blog') }}">
        @csrf

        <input type="hidden" name="id" value="{{$blog['id']}}" id="id" >
        <div class="mb-3">
            <label for="name" class="form-label">Blog Name</label>
            <input type="text" class="form-control" name="name" value="{{$blog['name']}}" id="name" >
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Blog slug</label>
            <input type="text" class="form-control" name="slug" value="{{$blog['slug']}}" id="slug" >
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select type="text" class="form-control" name="category_id" id="category_id" >

                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="des" class="form-label">Blog Description</label>
            <input type="text" row="5" class="form-control" name="des" value="{{$blog['des']}}" id="des" >
        </div>
        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-primary" id="submit">
        </div>
    </form>
</div>
</body>
</html>
