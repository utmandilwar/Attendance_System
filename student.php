<html>

<head>
  <link rel="stylesheet" href="css/style.css" />
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
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
        <a class="navbar-brand" href="index.php" style="font-size:28px;font-family: Google Sans"><br>Sapthagiri College of Engineering</a><br />
        <a class="navbar-brand" href="index.php" style="font-family:Sans-Serif; padding-LEFT:70px;"><i>~An Online Attendance taking platform</i></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="teacher.php">Dashboard</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li class="active"><a href="student.php">Students</a></li>
          <li><a href="statistics.php">Statistics</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav></br></br></br></br></br></br></br></br></br>
  <div class="container">
    <div id="output"></div>
    <form id="getAttendance">
      <div class="form-group">
        <label>Year of course</label>
        <select name="year" class="form-control">
          <?php foreach (range(date('Y', time()), 1983) as $r) echo '<option>' . $r . '</option>'; ?>
        </select>
      </div>
      <div class="form-group">
        <label>Year</label>
        <select name="section" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="form-group">
        <label>Subject Code of Course</label>
        <input type="text" class="form-control" name="code" placeholder="For eg:- ISE-051">
        <span class="help-block">DDD-NNN where D : Department , N : Number</span>
      </div>
      <div class="form-group">
        <label>University Seat Number</label>
        <input type="text" class="form-control" name="roll" placeholder="Eg - 052/IS/18">
        <span class="help-block">N/DD/YY where N : Number, D : Department , Y : Year</span>
      </div>
      <button class="btn btn-primary">Get Results</button>
    </form>
  </div>
  </div><!-- /.container -->
  <br><br>



  <!-- FOOTER -->
  <footer style="background:; height:;" style:"margin-top:50px;">
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p> &reg; 2019 SCE &middot; Developed by <a href="https://www.linkedin.com/in/utkarsh-mandilwar-967546183?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BkT4IrfHdT76YrRMSg2tlcA%3D%3D">Utkarsh Mandilwar&trade; </a><a href="http://localhost/ShouryaDBMS&trade/">Privacy</a> &middot; <a href="http://localhost/Attendance/">Terms</a></p>
  </footer>


</body>

</html>