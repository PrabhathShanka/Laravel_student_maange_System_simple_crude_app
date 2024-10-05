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

    {{--  <a href="{{ route('student.create') }}"  class="btn btn-primary mt-5">Create</a>  --}}

    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Address</th>
            <th scope="col">Birth Day</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            {{--  @foreach ($students as $student)  --}}


          <tr>
            {{--  <th scope="row">{{ $student ->id }}</th>
            <td scope="row">{{ $student ->fist_name }}</td>
            <td scope="row">{{ $student ->last_name }}</td>
            <td scope="row">{{ $student ->contact_no }}</td>
            <td scope="row">{{ $student ->address }}</td>
            <td scope="row">{{ $student ->birthday }}</td>  --}}
            {{--  <td><a href="{{ route('student.edit',$student ->id) }}" class="btn btn-primary mt-1">EDIT</a></td>
            <td><a href="{{ route('student.delete',$student ->id) }}" class="btn btn-primary mt-1">DELETE</a></td>  --}}
          </tr>

          {{--  @endforeach  --}}
        </tbody>
      </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
