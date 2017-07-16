<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delivery</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="deliveryinfo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="" method="">
        <div class="row">
            <div class="col-sm-6">
                <h3>Thông tin giao hàng</h3>
                <input type="text" class="w3-input w3-border w3-round" name="phoneNumber" placeholder="Số điện thoại">
                <input type="text" class="w3-input w3-border w3-round" name="name" placeholder="Họ và tên">
                <input type="text" class="w3-input w3-border w3-round" name="email" placeholder="Email">
                <input type="text" class="w3-input w3-border w3-round" name="address" placeholder="Địa chỉ">
                <select class="w3-select w3-border w3-round" name="tinh">
                    <option value="" disabled selected>Chọn tỉnh thành</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <select class="w3-select w3-border w3-round" name="quan">
                    <option value="" disabled selected>Chọn quận/ huyện</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <select class="w3-select w3-border w3-round" name="phuong">
                    <option value="" disabled selected>Chọn phường/ xã</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <h3>Phương thức vận chuyển</h3>
                <input type="radio" class="w3-radio" value="free" name=free" checked>
                <label>Miễn phí vận chuyển toàn quốc</label>
                <h3>Phương thức thanh toán</h3>
                <input type="radio" class="w3-radio" value="a" name="b" checked>
                <label>Thanh toán khi nhận hàng</label>
                <br><input type="radio" class="w3-radio" value="b" name="b">
                <label>Thanh toán qua chuyển khoản</label>
            </div>
            <div class="col-md-6">
                <div id="order">
                    <div class="product row">
                        <div class="img-detail col-md-4">
                            <img class="w3-round-large" src="jungle_lion-1366x768.jpg" alt="jungle_lion">
                            <span class="badge">2</span>
                        </div>
                        <div class="text-detail col-md-6">
                            <h5>Giày búp bê mũi nhọn khoét eo</h5>
                            <h5>BB01079</h5>
                            <h6>35</h6>
                        </div>
                        <div class="price-detail col-md-2">
                            <h4>189.000<sup>đ</sup></h4>
                        </div>
                    </div>
                    <br>
                    <div class="product row">
                        <div class="img-detail col-md-4">
                            <img class="w3-round-large" src="guardian_of_the_stars-1366x768.jpg" alt="guardian">
                            <span class="badge">1</span>
                        </div>
                        <div class="text-detail col-md-6">
                            <h5>Giày búp bê mũi nhọn khoét eo</h5>
                            <h5>BB01079</h5>
                            <h6>35</h6>
                        </div>
                        <div class="price-detail col-md-2">
                            <h4>189.000<sup>đ</sup></h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <input class="w3-border input-sm" size="20"  type="text" name="discount" placeholder="Mã giảm giá">
                    <label><button class="w3-btn w3-green w3-round" value="">Sử dụng</button></label>
                </div>
                <hr>
                <div class="row">
                    <table>
                        <tr>
                            <td>Tạm tính</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Phí vận chuyển</td>
                            <td style="font-weight: bold">Miễn phí</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="row">
                    <table>
                        <tr>
                            <td><h4>Tổng cộng</h4></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <a href=""><h4>&#10094; Giỏ hàng</a></h4>
            </div>
            <div class="col-md-6">
                <button type="submit" class="w3-btn w3-round w3-large w3-blue" style="padding: 10px 70px">Hoàn tất đơn hàng</button>
            </div>
        </div>
    </form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/15/2017
 * Time: 9:31 PM
 */