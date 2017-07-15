<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="shoedetail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <img class="mySlides w3-animate-opacity" src="golden_age_titans-1366x768.jpg">
            <img class="mySlides w3-animate-opacity" src="guardian_of_the_stars-1366x768.jpg">
            <img class="mySlides w3-animate-opacity" src="injustice_2_batman-1366x768.jpg"">
            <button class="w3-btn w3-white w3-border btnLeft" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-btn w3-white w3-border btnRight" onclick="plusDivs(+1)">&#10095;</button>
            <hr>
            <img class="imgList" src="golden_age_titans-1366x768.jpg">
            <img class="imgList" src="guardian_of_the_stars-1366x768.jpg">
            <img class="imgList" src="injustice_2_batman-1366x768.jpg">
        </div>
        <div class="col-md-3">
            <form method="" action="">
                <h4 class="shoename">Giày cao gót mũi nhọn trang trí đường chỉ nổi</h4>
                <h5 class="shoeid">Mã SP: CG09052</h5>
                <p class="price">390.000<sup>đ</sup></p>
    <!--            <h4>Chọn màu</h4>-->
                <h4>Chọn size</h4>
                <input class="w3-radio" type="radio" name="gender" value="35" checked>
                <label>35</label>
                <input class="w3-radio" type="radio" name="gender" value="36">
                <label>36</label>
                <input class="w3-radio" type="radio" name="gender" value="37">
                <label>37</label>
                <input class="w3-radio" type="radio" name="gender" value="38">
                <label>38</label>
                <h4>Số lượng</h4>
                <select  name="quantity">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <br>
                <button class="w3-btn w3-red w3-large">MUA NGAY<br>Mua online giao hàng tận nơi</button>
            </form>
        </div>
        <div class="col-md-3">
            <ul>
                <li>
                    <h4 class="note">Sẽ có tại nhà bạn</h4>
                    <span>từ 1-5 ngày làm việc</span>
                </li>
                <li>
                    <h4><img src="icon-deliver.png"> Giao hàng miễn phí</h4>
                    <span>sản phẩm trên 300.000đ</span>
                </li>
                <li>
                    <h4><img src="icon-day90.png"> Đổi trả miễn phí</h4>
                    <span>đổi trả miễn phí 90 ngày</span>
                </li>
                <li>
                    <h4><img src="icon-pay.png"> Thanh toán</h4>
                    <span>thanh toán khi nhận hàng</span>
                </li>
            </ul>
        </div>
        <hr>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <h3>Thông số kỹ thuật</h3>
            <div class="col-md-6">
                <img src="injustice_2_batman-1366x768.jpg">
            </div>
            <div class="col-md-6">
                <table class="w3-table-all w3-card-4">
                    <tr>
                        <td>Mã sp</td>
                        <td>CG0952</td>
                    </tr>
                    <tr>
                        <td>Kiểu dáng</td>
                        <td>Giày cao gót</td>
                    </tr>
                    <tr>
                        <td>Chất liệu</td>
                        <td>Da tổng hợp</td>
                    </tr>
                    <tr>
                        <td>Độ cao</td>
                        <td>9cm</td>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>35-36-37-38</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="shoedetail.js"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/15/2017
 * Time: 11:49 AM
 */