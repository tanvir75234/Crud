<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>COUNTRY LIST</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <a href="countries/create" class="btn btn-primary mt-3 mb-3">Create List</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Country Name</th>
                    <th>Capital Name</th>
                    <th>Currency Name</th>
                    <th>Population</th>
                    <th>Updated_at</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </thead>

            @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td> 
                    <a href="countries/{{$data->id}}"> {{$data->name}} </a>
                </td>
                <td>{{$data->capital}}</td>
                <td>{{$data->currency}}</td>
                <td>{{$data->population}}</td>
                <td>{{$data->updated_at}}</td>
                <td>{{$data->created_at}}</td>
                <td>
                    <a href="countries/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> | <a href="countries/edit/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a> 
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>