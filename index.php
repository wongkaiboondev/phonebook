<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Import Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Phone Book Sign Up</title>
    <script>

    </script>
  </head>

<!-- php include '/src/header.php' ?> -->
  <body id = "body" class="container">
    <h3> Please fill in the detail </h3>
    <div class="container text-center">
    <form method = "post" action = "src/create.php">
      <div class = "row">
        <div class = "col-6">
          <label for="last_name" class="form-label" Placeholder="Your Last Name"> Last Name: </label>
        </div>
        <div class = "col-6">
          <input type="text" class="form-control" id="last_name" name="last_name"><br><br>
        </div>
      </div>
      <div class = "row">
        <div class = "col-6">
          <label for="first_name"> First Name: </label>
        </div>
        <div class = "col-6">
          <input type="text" class="form-control" id="first_name" name="first_name"><br><br>
        </div>
      </div>
      <div class = "row">
        <div class = "col-6">
          <label for="phone_number"> Phone Number: </label>
        </div>
        <div class = "col-6">
          <input type="text" class="form-control" id="phone_number" name="phone_number"><br><br>
        </div>
      </div>
      <div class = "row">
        <div class = "col-6">
          <label for="phone_type"> Phone type: </label>
        </div>
        <div class = "col-6 dropdown">
          <!-- <label for="phone_type" class="form-lablel">Please Select your Phone Type</label>
          <input class="form-control" list="datalistOptions" id="phone_type" placeholder="Type to sea" -->
          <!-- <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Centered dropdown
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Action two</a></li>
            <li><a class="dropdown-item" href="#">Action three</a></li>
          </ul>
        </div> -->
          <select class="form-control" id="phone_type" name="phone_type">
            <option value=" " disabled selected>Please Select your Phone Type</option>
            <option value="H">Homes</option>  
            <option value="W">Work</option>  
            <option value="C">Cellular</option>  
            <option value="O">Other</option>  
          <br><br>
      </div>
      <br><br>
      <input class="btn btn-secondary" type="Submit" value="Submit">
    </form>
  </body>
  <footer>
  </footer>
</html>