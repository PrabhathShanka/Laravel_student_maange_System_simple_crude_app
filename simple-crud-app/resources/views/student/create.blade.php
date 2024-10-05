<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">

    <form action="{{ route('student.store') }}" method="POST">

        @csrf
        @if($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>


        @endif

        <div class="form-group mt-5">
          <label for="exampleInputEmail1">Student fist name</label>
          <input type="text" class="form-control" name="fist_name"  aria-describedby="emailHelp" placeholder="Enater fist name">
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Student last name</label>
            <input type="txet" class="form-control" name="last_name"  aria-describedby="emailHelp" placeholder="Enater last name">
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Student contact number</label>
            <input type="number" class="form-control" name="contact_number"  aria-describedby="emailHelp" placeholder="Enater contact number">
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Student Address</label>
            <input type="text" class="form-control" name="address"  aria-describedby="emailHelp" placeholder="Enater Address">
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">Student Birth day</label>
            <input type="text" class="form-control" name="brthday"  aria-describedby="emailHelp" placeholder="Enater birth day">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

