<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }
    include 'db_connect.php';
    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'];
        
    }
    include 'header.php'
?>
  <head>
    <link rel="stylesheet" href="ucss/login_style.css">
    <style>
.main-footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#007bff;
  color: white;
  /* text-align: center; */
}
a{
  color:white;
}

body {
  background-color:light blue;
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
      }
      #header {
        background-color: #0277bd;
        color: #ffffff;
        padding: 10px;
        text-align: center;
      }
      #services {
        margin: 20px;
      }
      #services h2 {
        color: #0277bd;
        font-size: 24px;
        font-weight: 700;
        margin-top: 40px;
       }
      #services ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display:flex;
        flex-direction:column;
      
      }
      #services li {
        margin-bottom: 10px;
         
      }
      
</style>
  </head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php include 'topbar.php' ?> 
  <?php include 'sidebar.php' ?>
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div><br></div>

            <div id="header">
      <h1>Welcome to ExpressHub</h1>
    </div>
    <div id="services">
      <p>We provide fast, reliable, and affordable courier services to businesses and individuals across the country. With our online courier management system, you can book and track packages from the comfort of your own home or office.</p>
      <h2>Our services include:</h2>
      <ul>
        <li>Same-day delivery</li>
        <li>Next-day delivery</li>
        <li>Express delivery</li>
        <li>International delivery</li>
      </ul>
    </div>
            

          


<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://www.expresshub.com">expresshub.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b><?php echo "ExpressHub" ?></b>
    </div>
  </footer>
</div>
<!-- <?php include 'footer.php' ?> -->
</body>
</html>