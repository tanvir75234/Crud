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
        <h1>COUNTRY</h1>
    </div>
    <div class="container">
        <div class="form-group">
            <form method="post" action="{{ url('countries/create')}}">
                @csrf
                <label for="" class="fs-4 mt-5 text-primary">Country Name</label>
                <input type="text" name="name" class="form-control">

                <label for="" class="fs-4 mt-5 text-primary">Capital Name</label>
                <input type="text" name="capital" class="form-control">

                <label for="" class="fs-4 mt-5 text-primary">Currency Name</label>
                <input type="text" name="currency" class="form-control">

                <label for="" class="fs-4 mt-5 text-primary">Population</label>
                <input type="number" name="population" class="form-control">

                <button type="submit" href="" class="btn btn-primary btn sm mt-5">SUBMIT</button>
            </form>
        </div>
    </div>
    
 








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>