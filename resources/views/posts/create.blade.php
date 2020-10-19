<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row" >
 <div class="col-sm-8 offset-sm-2">
  <br>
 <h1>Add New Post</h1>
      <form method="post" action="/posts">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" required="required" />
          </div>                  
          <br>
          <button type="submit" class="btn btn-success">Add post</button>
      </form>
  </div>
</div>
</div>
</body>
</html>




