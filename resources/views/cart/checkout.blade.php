<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../assets/css/app.css" type="text/css">
</head>

<body>

<main role="main">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
    <div class="container mt-4">
        <div id="thongbao" class="alert alert-danger d-none face" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <h1 class="text-center">Checkout</h1>
        <div class="row">
            <div class="col col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh đại diện</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody id="datarow">
                    @foreach($cartItems as $item)
                        <tr>
                            <td></td>
                            <td>
                                <img src="{{ $item->product->image }}" class="hinhdaidien">
                            </td>
                            <td>{{ $item->product->pro_name }}</td>
                            <td class="text-right">{{ $item->quantity }}</td>
                            <td class="text-right">{{number_format($item->product->price) }} VNĐ</td>
                            <td class="text-right">{{number_format($item->product->price * $item->quantity)}} VND</td>
                        </tr>
                    @endforeach
                               
                    </tbody>
                </table>

                <h2 class="text-right">Tổng tiền: {{ number_format($total) }} VND</h2>

                <a href="{{ route('getNewProducts') }}" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"
                                                                                          aria-hidden="true"></i>
                    Tiếp tục mua hàng</a>

                    <a href="{{ url('hoadon') }}" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popperjs/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom script - Các file jsdo mình tự viết -->
<script src="../assets/js/app.js"></script>
<script>
    function removeFromCart(itemId) {
        axios.delete('/cart/' + itemId)
            .then(function (response) {
                location.reload();
            })
            .catch(function (error) {
                console.log(error);
            });
    }

</script>

</body>

</html>