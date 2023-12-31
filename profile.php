<?php
session_start();
$isIndex = 0;
if (!(array_key_exists('teacher_id', $_SESSION) && isset($_SESSION['teacher_id']))) {
  session_destroy();
  if (!$isIndex) header('Location: index.php');
}
?>
<?php include 'php/node_class.php'; ?>
<html>

<head>
  <link rel="stylesheet" href="css/style.css" />
  <title>Profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/profile.js"></script>



  <!-- Custom styles for this template -->
  <link href="navbar-fixed-top.css" rel="stylesheet">
</head>

<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="font-size:28px; font-family: Brush Script MT"><br>Sapthagiri College of Engineering</a><br />
        <a class="navbar-brand" href="index.php" style="font-family:Trajan Pro; padding-LEFT:70px;"><i>~An Online Attendance taking platform</i></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="teacher.php">Dashboard</a></li>
          <li class="active"><a href="profile.php">Profile</a></li>
          <li><a href="student.php">Students</a></li>
          <li><a href="statistics.php">Statistics</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav></br></br></br></br>

  <div class="container">
    <?php
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $classes = $_SESSION['classes'];
    $teacher_id = $_SESSION['teacher_id'];
    echo '<br><br><h3 style="font-family:Sans; margin-left:100px">Welcome, ' . $name . '. Edit your profile here.</h3><br>';
    ?>
    <div class="wrapper">
      <dl class="dl-horizontal">
        <dt style="margin-top:8px;">Name : </dt>
        <dd>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input class="form-control" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
          </div>
        </dd>
        <dt style="margin-top:7px">Phone : </dt>
        <dd>
          <script type="text/javascript">
            $(function() {
              $("#num").keypress(function(e) {
                var keyCode = e.keyCode || e.which;

                $("#lblError").html("");

                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[0-9]+$/;

                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                  $("#lblError").html("Only Numbers are allowed for Phone.");
                }

                return isValid;
              });
            });
          </script>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
            <input class="form-control" placeholder="Phone" type="text" id="num" name="phone" maxlength="10" value="<?php echo $phone; ?>" required>
          </div>
        </dd>
        <dt style="margin-top: 7px;">Email : </dt>
        <dd>
          <div class="input-group"  >
            <span class="input-group-addon">@</span>
            <input class="form-control"  name="email" placeholder="Enter your email address!" value="<?php echo $email; ?>">
          </div>
        </dd>
        <dt style="margin-top: 7px;">Classes : </dt>
        <dd style="margin-top: 13px; margin-right: 100px"><?php echo $classes == 0 ? 0 : count($classes); ?></dd>
      </dl>
      <button class="btn btn-success update-profile">Save</button>
    </div>
  </div>
</body>

</html>