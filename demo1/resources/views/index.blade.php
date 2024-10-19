<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table Example</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">Bootstrap Table Example</h2>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>STD-ID</th>
                    <th>NAME</th>
                    <th>FATHER NAME</th>
                    <th>EMAIL</th>
                    <th>GR-NO</th>
                    <th>GENDER</th>
                    <th>COURSE</th>
                    <th>EDIT | DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plays as $Std)
                    <tr>
                        <td>{{$Std->id}}</td>
                        <td>{{$Std->name}}</td>
                        <td>{{$Std->f_name}}</td>
                        <td>{{$Std->email}}</td>
                        <td>{{$Std->std_id}}</td>
                        <td>{{$Std->gender}}</td>
                        <td>{{$Std->course}}</td>

                        <td>
                            <a href="{{url('editdata/' . $Std->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{url('deletedata/' . $Std->id)}}"
                                onclick="return confirm('Are you sure you want to delete this record?');"
                                class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>