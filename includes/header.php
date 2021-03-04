 
    <div class="wrap">
        <header id="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.php"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">หน้าเเรก</a></li>

                                <li><a href="packages.php">แพคเกจ</a></li>

                                <li><a href="blog.php">บล็อค</a></li>

                                <li>
                                    <a href="#">เกี่ยวกับฉัน </a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php"><span class="glyphicon glyphicon-tree-deciduous"></span> เกี่ยวกับฉัน</a></li> 
                                        <li><a href="testimonials.php"><span class="glyphicon glyphicon-picture"></span> แกลเลอรี</a></li>
                                        <li><a href="terms.php"><span class="glyphicon glyphicon-user"></span> ทีมของเรา</a></li>
                                    </ul>
                                </li>

                                <li><a href="contact.php">ช่องทางติอต่อ</a></li>
                                <li>
                                    <a href="#myModal" data-toggle="modal"><button class="btn btn-primary btn-rounded waves-effect"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</button></a>
                                </li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
  
    <?php include('login-user.php');?>