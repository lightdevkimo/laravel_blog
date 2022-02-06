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
    <h1 class="text-center">Blogs</h1>

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
            <th scope="col">des</th>
            <th scope="col">category_id</th>
            <th scope="col">created_at</th>
            <th scope="col">Last_update</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($show_products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product-> name }}</td>
                <td>{{ $product-> des }}</td>
                <td>{{ $product-> category_id }}</td>
                <td>{{ $product-> created_at }}</td>
                <td>{{ $product-> updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
