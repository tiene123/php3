<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" cont="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Sua Book</h1>
        <form action="{{ route('book.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$book->id}}">
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control"  value="{{ $book->title }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Url Thumbnail</label>
                <input type="text" name="thumbnail" class="form-control"  value="{{ $book->thumbnail }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <input type="text" name="author" class="form-control"  value="{{ $book->author }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pulisher</label>
                <input type="text" name="publisher" class="form-control"  value="{{ $book->publisher }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pulication_Date</label>
                <input type="date" name="publication_date" class="form-control"  value="{{ $book->publication_date }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" step="0.1" class="form-control"  value="{{ $book->price }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control"  value="{{ $book->quantity }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category Name</label>
                <select name="category_id" class="form-control" >
                    @foreach ($categories as $cate )
                        <option value="{{$cate->id}}"
                            @if ($cate->id === $book->category_id)
                                selected
                            @endif
                            >
                            {{$cate->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Sua</button>
                <a href="{{route('book.index')}}" class="btn btn-success">List</a>
            </div>
        </form>
    </div>
  </body>
</html>

