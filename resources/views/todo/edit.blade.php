<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Update Todo</h1>
        <form action="{{ route('todo.update', $todo->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label> 
                <input type="text" value="{{ $todo->title }}" name="title" id="title" class="form-control" placeholder="Title">
                @error('title')
                    <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description">{{ $todo->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="completed" class="form-label">Completed</label>
                <select name="completed" id="completed" class="form-control">
                    <option value="1" {{ $todo->completed == 1 ? 'selected' : '' }}>Completed</option>
                    <option value="0" {{ $todo->completed == 0 ? 'selected' : '' }}>Not Completed</option>
                </select>
                @error('completed')
                    <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>