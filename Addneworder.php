<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main_home.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="logo"><a href=""><img src="images/logo-admin.png"></a></div>
                </div>

                <div class="col-md-6 text-right">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <img src="images/img_avatar.png" width="20" class="img-circle">Mai Minh Nhật
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Quản lý modules</a></li>
                            <li><a href="login.html">Đăng xuất</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- Header -->
    <!-- main -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="search">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="menu">
                        <ul class="list-group">
                            <li class="list-group-item"> <a href="Addneworder.html">Add New Order</a> </li>
                            <li class="list-group-item"><a href="listproduct.html">View list of product</a></li>
                            <li class="list-group-item"><a href="listorder.html">List of Order</a> </li>
                            
                        </ul>
                    </div>
                </div>







                <div class="col-md-9">
                    <div class="content">
                        <h2>Add new order</h2>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Order ID:</label>
                                <div class="col-sm-10">
                                    <input type="product" class="form-control" id="orderid" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Customer ID:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cusid" name="cusid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Agency ID:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="agencyid" name="agencyid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Order Date:</label>
                                <div class="col-sm-10">
                                    <input type="date" name="bday">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Order Total</label>
                                <div class="col-sm-10">
                                   <input type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="listorder.html"><button type="submit" class="btn btn-default">Thêm</button></a>
                                    <button type="exit" class="btn btn-default">Thoát</button>
                                </div>


                            </div>

                    </div>
                </div>
            </div>

    </section>
    <!-- main -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

</body>

</html>