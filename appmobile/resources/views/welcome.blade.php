<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>Xác Nhận Đơn Hàng</title>
</head>

<body>
    <div class="container">
        <h1>Xác Nhận Đơn Hàng</h1>

        <div class="order-details">
            <h2>Thông Tin Đơn Hàng</h2>
            <p><strong>Sản phẩm:</strong> Áo Thun</p>
            <p><strong>Số lượng:</strong> 2</p>
            <p><strong>Giá:</strong> 200.000 VNĐ</p>
            <p><strong>Tổng:</strong> 400.000 VNĐ</p>
        </div>

        <div class="address-details">
            <h2>Địa Chỉ Giao Hàng</h2>
            <p><strong>Tên:</strong> Nguyễn Văn A</p>
            <p><strong>Địa chỉ:</strong> 123 Đường ABC, Quận 1, TP.HCM</p>
            <p><strong>Số điện thoại:</strong> 0901234567</p>
        </div>

        <button class="confirm-button" onclick="confirmOrder()">Xác Nhận Đơn Hàng</button>
    </div>

    <script>
        function confirmOrder() {
            alert('Đơn hàng của bạn đã được xác nhận!');
        }
    </script>
</body>

</html>
