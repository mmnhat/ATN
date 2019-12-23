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
                        <h2>List Of Order</h2>
                        <a href="Addneworder.html"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add order</button></a>
                        <br><br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>customer ID</th>
                                    <th>Agency ID</th>
                        
                                    <th>Order Date</th>
                                    <th>Order Total</th>

                                </tr>
                            </thead>
                            <tbody id="result">
                                <tr id="myTableRow">
                                    <td>1</td>
                                    <td>101</td>
                                    <td>111222</td>
                                    <td>12/2/2010</td>
                                    <td><a href=""><i class="fa fa-edit"></i>Sửa</a>
                                     &nbsp; &nbsp; &nbsp;<a href="javascript:;"><i class="fa fa-trash"></i>Xóa</a></td>
                                </tr>
                                <tr id="myTableRow">
                                    <td>2</td>
                                    <td>102</td>
                                    <td>1222</td>
                                    <td>12/2/2010</td>
                                    <td><a href=""><i class="fa fa-edit"></i>Sửa</a>
                                     &nbsp; &nbsp; &nbsp;<a href="javascript:;"><i class="fa fa-trash"></i>Xóa</a></td>
                                </tr>
                                <tr id="myTableRow">
                                    <td>3</td>
                                    <td>103</td>
                                    <td>111222</td>
                                    <td>12/2/2010</td>
                                    <td><a href=""><i class="fa fa-edit"></i>Sửa</a>
                                     &nbsp; &nbsp; &nbsp;<a href="javascript:;"><i class="fa fa-trash"></i>Xóa</a></td>
                                </tr>


                            </tbody>


                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>

                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>

                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- main -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        $('#result tr').click(function(){
               $(this).remove();
               return false;
           })
            </script>
   
        </scrip>
          
</body>

</html>