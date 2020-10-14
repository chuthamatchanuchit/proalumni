<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Alumni </title>

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
                    <a class="nav-link" href="<?php echo site_url('page2/show') ?>">รายชื่อข้อมูลคนที่ลงทะเบียน</a>
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
                        <a class="dropdown-item" href="<?php echo site_url('page2/logout') ?>">ออกจากระบบ</a>
                    </div>
                </div>
                <!--/Dropdown primary-->

            <?php } else { ?> <a class="nav-link" style="color: white;" href="<?php echo site_url('page2/show_login') ?>">Login</a>
            <?php } ?>
        </div>
    </nav>
    <!--/.Navbar -->


    <br><br><br>

    <!-- -------------------------------------------------------------------------------------------------------- -->
    <div class="container ">

        <div class="container  " align="center">
            <div class="card shadow" style="padding:20px;">
                <p></p>
                <h3><b><strong> ข้อมูลคนที่ลงทะเบียน </strong></b></h3>
                <br>
                <table border="1" id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
                    <thead class="thead" style="background-color: #00CCCC ; color :white">
                        <tr>
                            <th>

                                <div align="center">รหัสนักศึกษา</div>

                            </th>
                            <th>
                                <div align="center">ชื่อ</div>
                            </th>
                            <th>
                                <div align="center">นามสกุล</div>
                            </th>

                        </tr>
                    </thead>

                    <?php foreach ($query as $rs) { ?>
                        <tr align="center">
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo $rs->stu_id; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo $rs->name; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo $rs->lastname; ?>

                                    </div>
                                </z>
                            </td>
                        </tr>
                    <?php } ?>
                </table>


            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------------------------------------------------------- -->

</body>

</html>


<br><br>