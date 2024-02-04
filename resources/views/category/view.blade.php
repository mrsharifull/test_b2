<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Category Details</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto mt-5">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4>Category Details</h4>
                    <a href="{{route('category.list')}}" class="btn btn-sm btn-primary">Back</a>
                  </div>
                  <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>:</th>
                                    <td>{{$cat->name}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>:</th>
                                    <td>
                                        <span class="badge {{($cat->status == 1) ? 'bg-success' : 'bg-warning'}}">
                                            {{($cat->status == 1) ? 'Active' : 'Deactive'}}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <th>:</th>
                                    <td>{{date('d M, Y', strtotime($cat->created_at))}}</td>
                                </tr>
                                <tr>
                                    <th>Updated Date</th>
                                    <th>:</th>
                                    <td>{{date('d M, Y', strtotime($cat->updated_at))}}</td>
                                </tr>
                               
                            </tbody>
                        </table>
                  </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>