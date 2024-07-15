<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" cont="width=device-width, initial-scale=1">
    <title>ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Them Moi Book</h1>
        <form action="{{ route('book.store') }}" method="POST">
                @csrf
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Url Thumbnail</label>
                <input type="text" name="thumbnail" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <input type="text" name="author" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pulisher</label>
                <input type="text" name="publisher" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pulication_Date</label>
                <input type="date" name="publication_date" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" step="0.1" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category Name</label>
                <select name="category_id" class="form-control" id="">
                    @foreach ($categories as $cate )
                        <option value="{{$cate->id}}">
                            {{$cate->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Them</button>
                <a href="{{route('book.index')}}" class="btn btn-success">List</a>
            </div>
        </form>
    </div>
  </body>
</html>

