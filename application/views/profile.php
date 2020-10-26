<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Alumni </title>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>


<body>


    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('page2/show_index') ?>">SE-NPRU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('page2/index') ?>">ลงทะเบียนศิษย์เก่า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('page2/showall') ?>">รายชื่อศิษย์เก่าที่ลงทะเบียน</a>
                </li>
            </ul>

            <form class="form-inline" action="<?php echo site_url('Page2/search'); ?>" method="POST">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>

            <?php if ($this->session->userdata('stu_id')) { ?>

                <!--Dropdown primary-->
                <div class="dropdown">
                    <!--Trigger-->
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1-1" data-toggle="dropdown">
                        <?php echo $this->session->userdata('stu_id'); ?>
                    </button>

                    <!--Menu-->
                    <div class="dropdown-menu dropdown-primary" id="your-custom-id">
                        <a class="dropdown-item" href="<?php echo site_url('page2/profile') ?>">ตั้งค่าบัญชีส่วนตัว</a>
                        <a class="dropdown-item" href="<?php echo site_url('page2/logout') ?>">ออกจากระบบ</a>
                    </div>
                </div>
                <!--/Dropdown primary-->

            <?php } else { ?> <a class="nav-link" style="color: white;" href="<?php echo site_url('page2/show_login') ?>">Login</a>
            <?php } ?>
        </div>


    </nav>
    <!--/.Navbar -->

    <!-------------------------------------------------------------------------------------------------------------------------->
    <br><br><br>
    <div class="container">
        <div class="card">
            <!-- Default form register -->
            <form class="text-center  border-dark p-5" action="<?php echo site_url('Page2/editprofile'); ?>" method="POST" align="center">




                <h1>ข้อมูลส่วนตัว</h1>
                <br>
                <u>
                    <h4 align="left">ข้อมูลส่วนตัว</h4>
                </u>
                <br>
                <div class="modal-body" align="left">
                    <div class="form-row">
                        <div class="col">
                            <!-- E-mail -->
                            <b> ชื่อ</b><br>
                            <?php echo $this->session->userdata('name'); ?>

                        </div>
                        <div class="col">
                            <!-- password -->
                            <b> นามสกุล</b><br>
                            <?php echo $this->session->userdata('lastname'); ?>
                        </div>
                    </div>
                    <p></p>

                    <div class="form-row">
                        <div class="col">
                            <b>เพศ </b><br>
                            <?php echo $this->session->userdata('gender'); ?>
                        </div>
                        <div class="col">
                            <!-- password -->
                            <b>เลขประจำประชาชน</b><br>
                            <?php echo $this->session->userdata('p_num'); ?>
                        </div>
                    </div>
                    <p></p>

                    <div class="form-row">
                        <div class="col-6">
                            <!-- E-mail -->
                            <b>วัน / เดือน / ปีเกิด</b><br>
                            <?php echo $this->session->userdata('date'); ?>
                        </div>

                    </div>
                    <p></p>

                    <u>
                        <h5 align="left">ข้อมูลการศึกษา</h5>
                    </u>
                    <br>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- password -->
                            <b> ปีที่จบการศึกษา </b><br>
                            <?php echo $this->session->userdata('s_pe'); ?>
                        </div>
                        <div class="col">
                            <!-- E-mail -->
                            <b> รหัสนักศึกษา </b><br>
                            <?php echo $this->session->userdata('session'); ?>
                        </div>
                        <div class="col">
                            <!-- E-mail -->
                            <b> รหัสนักศึกษา </b><br>
                            <?php echo $this->session->userdata('stu_id'); ?>
                        </div>
                        <div class="col">
                            <!-- E-mail -->
                            <b> รหัสล็อคอิน </b><br>
                            <?php echo $this->session->userdata('password'); ?>
                        </div>
                    </div>
                    <br>
                    <?php foreach ($query->result_array() as $data) { ?>

                        <p></p>
                        <br>
                        <u>
                            <h5 align="left">ที่อยู่ตามทะเบียนบ้าน</h5>
                        </u>
                        <br>


                        <div class="form-row mb-4">
                            <div class="col ">
                                <!-- E-mail -->
                                <b> บ้านเลขที่ </b><br>
                                <?php echo $data['h_number'] ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <b> หมู่ที่ </b><br>
                                <?php echo $data['swine'] ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- E-mail -->
                                <b> ตำบล </b><br>
                                <?php echo $data['h_dis'] ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <b> อำเภอ </b><br>
                                <?php echo $data['h_per'] ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row mb-4">
                            <div class="col-6">
                                <!-- E-mail -->
                                <b> จังหวัด </b><br>
                                <?php echo $data['hpro'] ?>
                            </div>
                            <div class="col-6">
                                <!-- E-mail -->
                                <b> รหัสไปรษณีย์ </b><br>
                                <?php echo $data['h_code'] ?>
                            </div>
                        </div>

                </div>

                <br>
                <u>
                    <h4 align="left">ข้อมูลการติดต่อ</h4>
                </u>
                <br>
                <div class="modal-body" align="left">
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- E-mail -->
                            <b> E-mail </b><br>
                            <?php echo $data['email'] ?>
                        </div>
                        <div class="col">
                            <!-- password -->
                            <b> เบอร์โทรศัพท์ </b><br>
                            <?php echo $data['phone'] ?>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- E-mail -->
                            <b> Facebook </b><br>
                            <?php echo $data['facebook'] ?>
                        </div>
                        <div class="col">
                            <!-- password -->
                            <b> ID Line </b><br>
                            <?php echo $data['line'] ?>
                        </div>
                    </div>
                    <p></p>


                </div>
                <p></p>

                <br>
                <u>
                    <h4 align="left">ข้อมูลการทำงาน</h4>
                </u>
                <br>
                <div class="modal-body" align="left">
                    <div class="form-row mb-4">
                        <div class="col">
                            <b> ตำแหน่งการทำงาน </b><br>
                            <?php echo $data['w_name'] ?>
                        </div>
                        <div class="col">
                            <b> สถานที่ทำงาน </b><br>
                            <?php echo $data['w_code'] ?>
                        </div>

                    </div>
                    <p></p>
                    <br>
                    <u>
                        <h5 align="left">ที่ติดต่อที่ทำงาน</h5>
                    </u>
                    <br>

                    <div class="form-row mb-4">
                        <div class="col ">
                            <!-- E-mail -->
                            <b> บ้านเลขที่ </b><br>
                            <?php echo $data['w_mu'] ?>
                        </div>
                        <div class="col">
                            <!-- password -->
                            <b> หมู่ที่ </b><br>
                            <?php echo $data['w_tum'] ?>
                        </div>
                    </div>
                    <p></p>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- E-mail -->
                            <b> ตำบล </b><br>
                            <?php echo $data['w_per'] ?>
                        </div>
                        <div class="col">
                            <!-- password -->
                            <b> อำเภอ </b><br>
                            <?php echo $data['w_por'] ?>
                        </div>
                    </div>
                    <p></p>

                    <div class="form-row mb-4">
                        <div class="col-6">
                            <!-- E-mail -->
                            <b> จังหวัด </b><br>
                            <?php echo $data['w_pai'] ?>
                        </div>
                        <div class="col-6">
                            <!-- E-mail -->
                            <b> รหัสไปรษณีย์ </b><br>
                            <?php echo $data['w_ps'] ?>
                        </div>

                    </div>
                    <p></p>
                </div>
                <br><br>


                <div class="b1" align="right">
                    <a href="<?php echo site_url('page2/editprofile') ?>"><button type="button" class="btn peach-gradient ">แก้ไขข้อมูล</button></a>
                </div>
            <?php } ?>

            </form>
        </div>





        <!-- Default form register -->
    </div>

    <br><br><br><br>



</body>

</html>