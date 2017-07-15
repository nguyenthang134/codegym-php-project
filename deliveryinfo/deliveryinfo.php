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
    <div class="row">
        <div class="col-sm-6">
            <h3>Thông tin giao hàng</h3>
            <form action="" method="">
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
                <br>
                <div class="row">
                   <div class="col-md-6">
                       <a href=""><h4>&#10094; Giỏ hàng</a></h4>
                   </div>
                    <div class="col-md-6">
                        <button type="submit" class="w3-btn w3-large w3-blue">Hoàn tất đơn hàng</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
        <div class="col-md-6">
            <div></div>
            <hr>
            <div>
                <input type="text" name="discountCode" placeholder="Mã giảm giá">
                <label><button class="w3-btn w3-green" value="">Sử dụng</button> </label>
            </div>
            <hr>
            <div>
                <table>
                    <tr>
                        <td>Tạm tính</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển</td>
                        <td>Miễn phí</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div>
                <table>
                    <tr>
                        <td><h4>Tổng cộng</h4></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/15/2017
 * Time: 9:31 PM
 */