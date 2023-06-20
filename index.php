<?php 

include './src/header.php';
include './src/validation.php';

?>

<body id="body" class="container">
  <h3 class="title"> Create New Contact </h3>
  <div class="container text-center">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row">
      <input type="hidden" class="pb-pg" id="pb-pg" name="create" value="create">
      <div class="col-5">
          <label for="last_name" class="form-label"> Last Name: </label>
        </div>
        <div class="col-7" style="text-align: left">
          <input type="text" class="form-control text-left" id="last_name" name="last_name" placeholder="Exp: John">
          <?php if(!empty($last_name_msg)) {
            echo "<div class=\"alert alert-danger\">". $last_name_msg ."</div>";
          }
          ?>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col-5">
          <label for="first_name"> First Name: </label>
        </div>
        <div class="col-7">
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Exp: Smith">
          <?php 
          if(!empty($first_name_msg)) {
            echo "<div class=\"alert alert-danger\">". $first_name_msg ."</div>";
          }
          ?>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col-5">
          <label for="phone_number"> Phone Number: </label>
        </div>
        <div class="col-7">
          <input type="text" class="form-control" class="phone_number" name="phone_number" placeholder="Exp: 0123456789">
          <?php if(!empty($phone_number_msg)) {
            echo "<div class=\"alert alert-danger\">". $phone_number_msg ."</div>";
          }
          ?>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col-5">
          <label for="phone_type"> Phone type: </label>
        </div>
        <div class="col-7 dropdown">
          <select class="form-control" id="phone_type" name="phone_type">
            <option value="" disabled selected>Please Select your Phone Type</option>
            <option value="H">Home</option>
            <option value="W">Work</option>
            <option value="C">Cellular</option>
            <option value="O">Other</option>
          </select>
          <?php 
            if(!empty($phone_type_msg)) {
            echo "<div class=\"alert alert-danger\">". $phone_type_msg ."</div>";
          }
          ?>
        </div>
        <br><br>
      </div>
      <input id = "submit_btn" class="btn btn-secondary" type="Submit" value="Submit">
    </form>
  </body>

<?php 
  include './src/footer.php'; 
?>