
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Current Posts </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="posts/create"> Create New Product</a>
            </div>
        </div>
    </div>
<br>

    <table class="table table-bordered" >
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($posts ?? '' as $post)
        <tr>
            <td>{{ $post->name }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</body>
</html>
