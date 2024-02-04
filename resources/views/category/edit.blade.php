<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Category Edit</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto mt-5">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Create</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" value="{{$category->name}}">
                          @if($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                      </div>
                      <button type="submit" class="btn btn-sm btn-outline-primary"> Submit</button>
                  </form>
                  </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>