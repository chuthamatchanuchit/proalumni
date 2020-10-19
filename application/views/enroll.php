<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Alumni </title>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>

    <link rel="stylesheet" href="public/style.css">

    <style>

    </style>
    <script>
        $('#your-custom-id').mdbDropSearch();
    </script>

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
                    <a class="nav-link" href="<?php echo site_url('page2/show') ?>">รายชื่อศิษย์เก่าที่ลงทะเบียน</a>
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
    <br><br>
    <div class="container">
        <!-- Default form register -->
        <form class="text-center  border-dark p-5" action="<?php echo site_url('Page2/enroll'); ?>" method="POST">

            <h1>ลงทะเบียน</h1>

            <br>
            <u>
                <h4 align="left">ข้อมูลส่วนตัว</h4>
            </u>
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> คำนำหน้า </label>
                        <select class="custom-select">
                            <option selected disabled>เลือก...</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                            <option value="นาย">นาย</option>
                        </select>
                    </div>
                    <div class="col">
                        <!-- E-mail -->
                        <label> ชื่อ</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="xxxxxxxx">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> นามสกุล </label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="xxxxx">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">

                    <div class="col">
                        <label> เพศ </label>
                        <select class="custom-select" id="gender" name="gender">
                            <option selected disabled>เลือก...</option>
                            <option value="หญิง">หญิง</option>
                            <option value="ชาย">ชาย</option>
                        </select>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label>เลขประจำประชาชน</label>
                        <input type="text" id="p_num" name="p_num" class="form-control" placeholder="0-0000-00000-00-0" required>
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        <!-- E-mail -->
                        <label>วัน / เดือน / ปีเกิด</label>
                        <input type="date" id="date" name="date" class="form-control" placeholder="xxxxxxxx">
                    </div>
                </div>
                <br>
                <u>
                    <h5 align="left">ข้อมูลการศึกษา</h5>
                </u>
                <br>
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- password -->
                        <label> ปีที่จบการศึกษา </label>
                        <input type="text" class="form-control" name="s_pe" id="s_pe">
                    </div>
                    <div class="col">
                        <!-- E-mail -->
                        <label> รหัสนักศึกษา </label>
                        <input type="text" class="form-control" name="stu_id" id="stu_id" required>
                    </div>
                    <div class="col">
                        <!-- E-mail -->
                        <label> รหัสล็อคอิน </label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <p></p>

                <p></p>
                <br>
                <u>
                    <h5 align="left">ที่อยู่ตามทะเบียนบ้าน</h5>
                </u>
                <br>

                <div class="form-row mb-4">
                    <div class="col ">
                        <!-- E-mail -->
                        <label> บ้านเลขที่ </label>
                        <input type="text" id="h_number" name="h_number" class="form-control" placeholder="00/00">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> หมู่ที่ </label>
                        <input type="text" id="swine" name="swine" class="form-control" placeholder="0">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> ตำบล </label>
                        <input type="text" id="h_dis" name="h_dis" class="form-control" placeholder="xxxxxx">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> อำเภอ </label>
                        <input type="text" id="h_per" name="h_per" class="form-control" placeholder="xxxxx">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> จังหวัด </label>
                        <input type="text" class="form-control" name="hpro" id="hpro" placeholder="xxxxx">
                    </div>
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> รหัสไปรษณีย์ </label>
                        <input type="text" id="h_code" name="h_code" class="form-control" placeholder="00000">
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
                        <label> E-mail </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="xxxxxx@gmail.com" required>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> เบอร์โทรศัพท์ </label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="000-000-0000">
                    </div>
                </div>
                <p></p>
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> Facebook </label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="xxxxxx xxxxx" required>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> ID Line </label>
                        <input type="text" name="line" id="line" class="form-control" placeholder="xxxxx" required>
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
                        <label> ตำแหน่งการทำงาน </label>
                        <input type="text" id="w_ps" name="w_ps" class="form-control" placeholder="xxxxxxxxxxx" required>
                    </div>
                    <div class="col">
                        <label> สถานที่ทำงาน </label>
                        <input type="text" id="w_name" name="w_name" class="form-control" placeholder="xxxxxxxxxxx">
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
                        <label> บ้านเลขที่ </label>
                        <input type="text" id="w_code" name="w_code" class="form-control" placeholder="00/00">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> หมู่ที่ </label>
                        <input type="text" id="w_mu" name="w_mu" class="form-control" placeholder="0">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> ตำบล </label>
                        <input type="text" id="w_tum" name="w_tum" class="form-control" placeholder="xxxxxx">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> อำเภอ </label>
                        <input type="text" id="w_per" name="w_per" class="form-control" placeholder="xxxxx">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> จังหวัด </label>
                        <input type="text" class="form-control" name="w_por" id="w_por" placeholder="xxxxx">
                    </div>
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> รหัสไปรษณีย์ </label>
                        <input type="text" id="w_pai" name="w_pai" class="form-control" placeholder="00000">
                    </div>

                </div>
                <p></p>
            </div>
            <br><br>

            <div class="btn1" align="right">
                <!-- Sign up button -->


                <button type="submit" class="btn btn-default btn-block">ตกลง</button>
            </div>
            <br>
            <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
            </div>
            <p></p>
            <!-- Social register -->
            <p>or sign up with:</p>



            <a href="https://web.facebook.com/" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
            <a href="https://www.instagram.com/?hl=th" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
            <hr>

            <!-- Terms of service -->
            <p>

        </form>
        <!-- Default form register -->
        <br>
        <br>
    </div>





</body>

</html>