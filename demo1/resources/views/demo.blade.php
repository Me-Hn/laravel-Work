<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

.card{
    height: 300px;
    width: 300px;
    border: none;
}

.card img{
    height: 300px;
    width: 300px;
    background-color: silver; 
    border-radius: 50%;
}
    </style>

</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Insert Data into demo1</h2>
        <form action="{{ url('add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="f_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="f_name" name="f_name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="std_id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="std_id" name="std_id" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>

            <label>
                <input type="radio" name="gender" value="Male" required> Male
            </label>
            <label>
                <input type="radio" name="gender" value="Female"> Female
            </label>
            <label>
                <input type="radio" name="gender" value="Other"> Other
            </label>

            <br><br> <!-- Add some space between radio buttons and dropdown -->

            <label for="course">Select Course:</label>
            <select name="course" id="course" required>
                <option value="">--Please choose an option--</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile Application">Mobile Application</option>
                <option value="Python">Python</option>
                <option value="React js">React js</option>
                <!-- Add more courses as needed -->
            </select>

            <br><br> <!-- Add some space before the submit button -->

            <!-- <label for="course">Add Your Image :</label>
            <input type="file" name="Image"> -->
           
                <h1>Image Uploaded</h1>
                <div class="card">
                    <img src="profile.png" alt="" id="profile-pic">
                </div>
                <input type="file" id="imageUplode" accept="image/*" name="Image">

            <br><br>
            <button type="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
            <a href="plays" value="submit" class="btn btn-primary">VIEW DATA</a>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script>
    const a = document.getElementById('profile-pic');
    const b = document.getElementById('imageUplode');
 
    b.onchange = function() {
        a.src = URL.createObjectURL(b.files[0]);
    }

    let submit = document.getElementById('submit');

    if(submit){
        alert('data submited');
    }else{
        alert('data NOT submited');
    }
 </script>