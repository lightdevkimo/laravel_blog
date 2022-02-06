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
            <h1 class="text-center">Categories</h1>

            <h1 class="text-center">
                <a href="/" class="btn btn-warning">Home</a>
                <a href="/addblog" class="btn btn-primary">Add Blogs</a>
                <a href="/addcategory" class="btn btn-danger">Add Categroy</a>
            </h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">created_at</th>
                    <th scope="col">Last_update</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category-> name }}</td>
                        <td>{{ $category-> created_at }}</td>
                        <td>{{ $category-> updated_at }}</td>
                        <td><a href="{{ route('fetch_category',['id'=>$category['id']]) }}" class="btn btn-secondary">Edit</a></td>
                        <td><a href="{{ route('delete_category',['id'=>$category['id']]) }}"  class="btn btn-danger">Delete Category With it Own Blogs</a></td>
                        <td><a href="{{ route('show_category',['slug'=>$category['id']]) }}" class="btn btn-warning">Blogs Of {{ $category-> name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <hr>
        <br>
        <br>
        <hr>
        <div class="container">
            <h1 class="text-center">Blogs</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">des</th>
                    <th scope="col">category</th>
                    <th scope="col">created_at</th>
                    <th scope="col">Last_update</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $blog->id }}</th>
                        <td>{{ $blog-> name }}</td>
                        <td>{{ $blog-> des }}</td>
                        <td>{{ $blog-> category_id }}</td>
                        <td>{{ $blog-> created_at }}</td>
                        <td>{{ $blog-> updated_at }}</td>
                        <td><a href="{{ route('fetch_blog',['id'=>$blog->id]) }}" class="btn btn-secondary">Edit</a></td>
                        <td><a href="{{ route('delete_blog',['id'=>$blog->id]) }}"  class="btn btn-danger">Delete Blog</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
