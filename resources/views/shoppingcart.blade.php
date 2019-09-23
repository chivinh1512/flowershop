@extends('master')
@section('content')
    <br>
<div class="shoppingcart">
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <table style="width:100%">
                <tr>
                    <th>Tên Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <tr>
                    <td>Happy-01
                        <img src="{{asset('source/img/products/bo-hoa-tuoi-happy-flower-E02-247x296.jpg')}}" width="200px" height="200px">
                    </td>
                    <td>200.000VNĐ</td>
                    <td> <select class="productqty" name="amount">
                           <option>1</option>
                            <option>2</option>
                            <option>3</option>

                        </select></td>
                    <td>200.000VNĐ</td>
                    <td><a href="">Xóa</a> </td>
                </tr>
            </table>
            <br>
            Tổng tiền giỏ hàng
            <hr class="motnua">
            400.000VNĐ <br>
            <a href=""><button class="bt">Thanh toán</button></a>
            <br>

            <br>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<br>
@endsection