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
                        <h2>List of Product</h2>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Chức năng</th>

                                </tr>
                            </thead>
                            <tbody id="result">
                                <tr id="myTableRow">
                                    <td>1</td>
                                    <td>HG Gundam Barbatos</td>
                                    <td>200$</td>
                                    <td><a href=""><i class="fa fa-edit"></i>Sửa</a>
                                     &nbsp; &nbsp; &nbsp;<a href="javascript:;"><i class="fa fa-trash"></i>Xóa</a></td>
                                </tr>
                                <tr id="myTableRow">
                                    <td>2</td>
                                    <td>HG Gundam Vidar</td>
                                    <td>200$</td>
                                    <td><a href=""><i class="fa fa-edit"></i>Sửa</a>
                                     &nbsp; &nbsp; &nbsp;<a href="javascript:;"><i class="fa fa-trash"></i>Xóa</a></td>
                                </tr>
                                <tr id="myTableRow">
                                    <td>3</td>
                                    <td>HG Gundam Bael</td>
                                    <td>200$</td>
                                    <td><a href=""><i class="fa fa-edit"></i>Sửa</a>
                                     &nbsp; &nbsp; &nbsp;<a href="javascript:;"><i class="fa fa-trash"></i>Xóa</a></td>
                                </tr>


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
    <!-- <script>
        var a, b, c, d, e, f, g, h, i, k, l, m;
        a = "Samsung Galaxy S7";
        b = "Samsung Galaxy S7";
        c = "Samsung Galaxy S7";
        d = "Samsung Galaxy S7";
        e = "Samsung Galaxy S7";
        f = "Samsung Galaxy S7";
        g = "Samsung Galaxy S7";
        h = "Samsung Galaxy S7";
        i = "Samsung Galaxy S7";
        k = "Samsung Galaxy S7";
        l = "Samsung Galaxy S7";
        m = "Samsung Galaxy S7";

        var txt = '';


        var arr = [a, b, c, d, e, f, g, h, i, k, l, m];

       

        arr.forEach(myFunction);
        

        function myFunction(value, index) {
            txt = txt + '  <tr id = "tr_' + index + '"><td>' + (index + 1) + '</td><td>' + value + '</td><td></td><td><a href=""><i class="fa fa-edit"></i>Sửa</a> &nbsp; &nbsp; &nbsp;<a href="javascript:;"onclick="del(' + index + ')""><i class="fa fa-trash"></i>Xóa</a></td></tr>'

        }

        $('#result').html(txt)
        function del(id) {
            $('#tr_' + id).remove();
        }


    </script> -->
    <script>
     $('#result tr').click(function(){
            $(this).remove();
            return false;
        })
         </script>

     </scrip>
       
</body>

</html>