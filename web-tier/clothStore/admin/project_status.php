<?php
include 'inc/connection.php';
$result = $con->query("select DISTINCT  tbl_customers.name,tbl_orders.customer_id from tbl_orders inner join tbl_customers on tbl_orders.customer_id=tbl_customers.id ");
if(isset($_REQUEST["submit"]))
{
    $status_get = $_REQUEST["status_get"];
    $date_get   = $_REQUEST["date_get"];
    $con->query("update tbl_orders set status='$status_get' where customer_id='$date_get'");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include './inc/header1.php';?>
        <div id="page-wrapper">
        <div class="graphs">
       <div class="xs">
           <h4>Order Update</h4>
               <br/>
             <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post">
                <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Select Category</label>
                  <div class="col-sm-6">
                    <select name="date_get" id="cat" class="form-control1">
                      <option value="">Select Customer</option>
                       <?php
                        while($row= $result->fetch_object())
                        {                          
                        ?>
                          <option value="<?php echo $row->customer_id;?>"><?php echo $row->name;?></option>
                       <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post">
                <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">Update Category</label>
                  <div class="col-sm-6">
                    <select name="status_get" id="cat" class="form-control1">
                      <option value="">Update Status</option>
                      <option value="pending">Pending</option>
                      <option value="completed">Completed</option>
                      
                    </select>
                  </div>
                </div>             
             <br/>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit" name="submit">Update</button>
        
                            <button class="btn-inverse btn" type="reset">Reset</button>
      </div>
    </div>

              </form>
            </div>
          </div>
          
          
  
  
  </div>
            
          
  </div>
            
            
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

  