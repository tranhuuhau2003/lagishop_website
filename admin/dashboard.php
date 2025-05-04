<?php include 'inc/sessionCheck.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doan.css">
    <title>Lagi Shop</title>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Lagi Shop</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="xulydonhang.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Oders</span>
                    </a>
                </li>
                <li>
                    <a href="xulydanhmuc.php">
                        <span class="icon"><ion-icon name="bag-outline"></ion-icon></span>
                        <span class="title">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="xulybrand.php">
                        <span class="icon"><ion-icon name="bag-outline"></ion-icon></span>
                        <span class="title">Brands</span>
                    </a>
                </li>
                <li>
                    <a href="products.php">
                        <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li>
                    <a href="xulykhachhang.php">
                        <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li>
                    <a href="account.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="?dangxuat=1">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!--search-->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!--userimg-->
                <div class="user">
                    <img src="../img/user.png" alt="">
                </div>
            </div>

            <!--cards-->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="number">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">284</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">43,450,000 VNĐ</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>



            <div class="details">
                <!--order details list-->
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Top Purchases</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Họ và Tên</td>
                                <td>Số điện thoại</td>
                                <td>Email</td>
                                <td>Địa Chỉ</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trần Quang Ðạt</td>
                                <td>09.78.48.58.68</td>
                                <td>2.392.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Trần Công Dũng</td>
                                <td>0909.788.799</td>
                                <td>1.343.000đ</td>
                                <td><span class="status Return">Chưa xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Hoàng Quang Hữu</td>
                                <td>0911.968.968</td>
                                <td>923.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đỗ Ngân Thanh</td>
                                <td>09.0123.2345</td>
                                <td>845.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Phan Quang Lân</td>
                                <td>093.781.3386</td>
                                <td>663.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đỗ Thanh Lan</td>
                                <td>037.127.2342</td>
                                <td>648.000đ</td>
                                <td><span class="status Return">Chưa xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đỗ Bích Quyên</td>
                                <td>090.1738.2857</td>
                                <td>1.000.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Phạm Thảo Vân</td>
                                <td>030.1648.2847</td>
                                <td>1.000.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Phan Minh Anh</td>
                                <td>091.352.5342</td>
                                <td>1.000.000đ</td>
                                <td><span class="status Pending">Đang xử lý</span></td>
                            </tr>
                            <tr>
                                <td>Đặng Mỹ Ngọc</td>
                                <td>031.6433.4574</td>
                                <td>1.000.000đ</td>
                                <td><span class="status delivered">Đã xử lý</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!--New Customers-->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/boy.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Anh<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/girl.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Ánh Tuyết<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/girl.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Lan Phương<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/boy.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Quý<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/girl.png"></div>
                            </td>
                            <td>
                                <h4>Ngọc Linh<br><span>Việt Nam</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../img/boy.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Châu Tinh Trì<br><span>Trung Quốc</span></h4>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //Menu
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }


        function removeLink() {
            this.classList.remove('hovered');
        }
        
        
        list.forEach((item) =>
            item.addEventListener('mouseout', removeLink));
        //add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>


</body>

</html>