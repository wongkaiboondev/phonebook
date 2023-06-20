<?php 

include './header.php';
include './validation.php';

if(isset($_SESSION['first_name']) == "" OR isset($_SESSION['last_name']) == "" OR isset($_SESSION['phone_number']) == "" OR isset($_SESSION['phone_type']) == ""){
    header ('Location: ./dashboard.php');
}

?>

<body id="body" class="container">
  <h3 class="title"> Update Contact </h3>
  <div class="container text-center">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row">
      <input type="hidden" class="pb-pg" id="pb-pg" name="update" value="update">
      <div class="col-5">
          <label for="last_name" class="form-label"> Last Name: </label>
        </div>
        <div class="col-7" style="text-align: left">
          <input type="text" class="form-control text-left" id="last_name" name="last_name" placeholder="Exp: John" value="<?php echo $_SESSION["last_name"]?>">
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
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Exp: Smith" value="<?php echo $_SESSION["first_name"]?>">
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
          <input type="text" class="form-control" class="phone_number" name="phone_number" placeholder="Exp: 0123456789" value="<?php echo $_SESSION["phone_number"]?>">
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
            <option value="" disabled>Please Select your Phone Type</option>
            <option value="H" <?php if($_SESSION["phone_type"] == "Home"){ echo "selected"; }?>>Home</option>
            <option value="W" <?php if($_SESSION["phone_type"] == "Work"){ echo "selected"; }?>>Work</option>
            <option value="C" <?php if($_SESSION["phone_type"] == "Cellular"){ echo "selected"; }?>>Cellular</option>
            <option value="O" <?php if($_SESSION["phone_type"] == "Other"){ echo "selected"; }?>>Other</option>
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
  include './footer.php'; 
?>