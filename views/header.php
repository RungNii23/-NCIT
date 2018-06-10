<?php  
	if((isset($_SESSION['result']))&&($_SESSION['result']=='true')){
		echo '<script>alert("เข้าสู่ระบบสำเร็จ");</script>' ;
	}
	
	else if(isset($_SESSION['result'])) {
		echo '<script>alert("เข้าสู่ระบบผิดพลาด โปรดลองอีกครั้ง!!!");</script>' ;
	}
?>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
 
    <title>NCIT 2560</title>
    <link rel="shortcut icon" href="http://favicon.htmlkit.com/favicon/download/temp-n4fgu7s7ot3l6c30s0ge2a8tm4/pic1_out_i32c256.png?nocache=48fc47e39a43769288ec1570791f1c9e">

    
    
  </head>
  
  <body >
    <div  ><img style="width:100%;height:60%;" src="https://scontent-hkg3-1.xx.fbcdn.net/v/t1.0-9/13260054_1186723514706225_2535799402928725036_n.jpg?oh=512fa024d70403fdb45109c0e1c51fb4&oe=57C4D120"
            class="center-block img-responsive img-thumbnail">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><span>
		  <?php 
		  		if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
					echo 'ยินดีต้อนรับ คุณ'.$_SESSION['name'];
				}
				else{
					echo 'งานประชุมวิชาการระดับชาติ NCIT 2560';
;				}
		  
		   ?></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="http://localhost/teamB/">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-expanded="false">การเข้าร่วมประชุม<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="http://localhost/teamB/index.php/menu/m1_1">ขอบเขตงาน</a>
                </li>
                <?php 
		  		if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
					
				}
				else{
					echo '<li>';
                  	echo '<a href="http://localhost/teamB/index.php/menu/m1_2">การลงทะเบียน</a>';
                	echo '</li>';
;				}
		  
		   ?>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-expanded="false">กำหนดการประชุม<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="http://localhost/teamB/index.php/menu/m2_1">กำหนดการ</a>
                </li>
                <li>
                  <a href="http://localhost/teamB/index.php/menu/m2_2">รางวัล Best Paper Award</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-expanded="false">สถานที่การจัดประชุม<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="http://localhost/teamB/index.php/menu/m3_2">ข้อมูลสถานที่ แผนที่</a>
                </li>
                <li>
                  <a href="http://localhost/teamB/index.php/menu/m3_1">ข้อมูลโปรแกรมการท่องเที่ยว</a>
                </li>
                <li>
                  <a href="http://localhost/teamB/index.php/menu/m3_3">Google Map</a>
                </li>
              </ul>
            </li>
            <?php 
            if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
				
				   echo ' <li class="dropdown"> 
					   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
					  aria-expanded="false">จัดการข้อมูล<i class="fa fa-caret-down"></i></a>
					  <ul class="dropdown-menu" role="menu">
						<li>
						  <a href="http://localhost/teamB/index.php/user/update">แก้ไขข้อมูล</a>
						</li>
						<li>
						  <a href="http://localhost/teamB/index.php/user/confirm_payment">ยืนยันการจ่ายเงิน</a>
						</li>
					  </ul>
					</li> ';
				}
            ?>
            
            <li>
              <?php 
			  	//var_dump($_SESSION);
			  	if((isset($_SESSION['username']))&&($_SESSION['sys_login']==TRUE)){
					echo '<a href="http://localhost/teamB/index.php/db/logout">ออกจากระบบ</a>';
				}
				else{
					echo '<a href="http://localhost/teamB/index.php/db/login">เข้าสู่ระบบ</a>';
				}
			  
			   ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>

</html>