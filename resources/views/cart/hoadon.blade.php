<form action="{{ route('hoadon.store') }}" method="POST">
    @csrf

    <!-- Thông tin hóa đơn -->
    <div class="form-group">
        <label for="customer_name">Tên khách hàng:</label>
        <input type="text" name="customer_name" id="customer_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="address">Địa chỉ:</label>
        <input type="text" name="address" id="address" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="phone">Số điện thoại:</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <!-- Thông tin chi tiết đơn hàng -->
    <table class="table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <!-- Các mục sản phẩm trong giỏ hàng -->
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->product->price }}</td>
                <td>{{ $item->quantity * $item->product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit" class="btn btn-primary">Tạo hóa đơn</button>
</form>