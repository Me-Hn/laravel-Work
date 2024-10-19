<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Insert Data into demo1</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" value="{{$Std->name}}" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="f_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" value="{{$Std->f_name}}" id="f_name" name="f_name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{$Std->email}}" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="std_id" class="form-label">Student ID</label>
                <input type="text" class="form-control" value="{{$Std->std_id}}" id="std_id" name="std_id" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" value="{{$Std->pass}}" id="pass" name="pass" required>
            </div>

            <label> 
                <input type="radio" name="gender" value="Male" {{ $Std->gender === 'Male' ? 'checked' : '' }} required>
                Male
            </label>
            <label>
                <input type="radio" name="gender" value="Female" {{ $Std->gender === 'Female' ? 'checked' : '' }}> Female
            </label>
            <label>
                <input type="radio" name="gender" value="Other" {{ $Std->gender === 'Other' ? 'checked' : '' }}> Other
            </label>


            <br><br> <!-- Add some space between radio buttons and dropdown -->

            <label for="course">Select Course:</label>
            <select name="course" id="course" required>
                <option value="{{$Std->course}}">--Please choose an option--</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile Application">Mobile Application</option>
                <option value="Python">Python</option>
                <option value="React js">React js</option>
                <!-- Add more courses as needed -->
            </select>

            <br><br> <!-- Add some space before the submit button -->


            <button type="submit" value="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>