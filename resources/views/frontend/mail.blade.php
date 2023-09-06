<div id=":7d" class="a3s aiL ">
    <div style="border:8px solid #00b8e0;line-height:21px;padding:2px">
        <div class="adM">&nbsp; </div>
        <div style="padding:10px">
            <div class="adM">&nbsp; </div>
            <div><strong>Chào Cuong!</strong></div>
            <div>Cảm ơn Quý khách&nbsp;đã mua hàng của <a href="http://maychieuminikaw.com" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://maychieuminikaw.com&amp;source=gmail&amp;ust=1694055567727000&amp;usg=AOvVaw3wmqugW6hwh4koOcmcCYtL"><strong>maychieuminikaw.com</strong></a></div>
        </div>
        <div style="background:none repeat scroll 0 0 #00b8e0;color:#ffffff;font-weight:bold;line-height:25px;min-height:27px;padding-left:10px">Thông tin về đơn đặt hàng của Quý khách</div>
        <div style="padding:10px">
            <div>Mã đơn hàng: <strong>DH00000123</strong></div>
            <table cellspacing="0" cellpadding="6" border="0" width="100%">
                <tbody>
                    <tr>
                        <td width="173px">Tên người đặt hàng </td>
                        <td width="5px">:</td>
                        <td>{{  @$name }}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ </td>
                        <td width="5px">:</td>
                        <td> {{ @$address  }}</td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td width="5px">:</td>
                        <td><a href="mailto:chiensi26045@gmail.com" target="_blank">{{  @$email }}m</a></td>
                    </tr>
                    <tr>
                        <td>Điện thoại </td>
                        <td width="5px">:</td>
                        <td>{{ @$phone_number }}<strong style="color:red"> (Gọi lại ngay)</strong></td>
                    </tr>
                    <tr>
                        <td>Hình thức thanh toán </td>
                        <td width="5px">:</td>
                        <td>Thanh toán tiền mặt khi nhận hàng</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="background:none repeat scroll 0 0 #00b8e0;color:#ffffff;font-weight:bold;line-height:25px;min-height:27px;padding-left:10px">Chi tiết đơn hàng</div>
        <p> </p>
        <table width="964" cellspacing="0" cellpadding="6" border="1" align="center" style="border-style:solid;border-collapse:collapse;margin-top:2px">
            <thead style="background:#e7e7e7;line-height:12px">
                <tr>
                    <th width="30">STT</th>
                    <th>Tên sản phẩm</th>
                    <th width="117">Giá</th>
                    <th width="117">Số lượng</th>
                    <th width="117">Tổng giá tiền</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($product))
                @foreach($product as $value)
                <tr>
                    <td align="center"> <strong>1</strong><br> </td>
                    <td> <a href="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html&amp;source=gmail&amp;ust=1694055567727000&amp;usg=AOvVaw02As7dULt2Tc9jRlWJCv1q">{{ @$value['name'] }}  </a> </td>
                    <td> <strong>{{  @str_replace(',' ,'.', number_format($value['price']))  }}₫ </strong> </td>
                    <td> <strong>{{ @$value['qty'] }} </strong> </td>
                    <td> <span>{{  @str_replace(',' ,'.', number_format($value['price']))  }}₫ </span> </td>
                </tr>

                @endforeach
                @endif

                <tr>
                    <td colspan="4" align="right"><strong>Tạm tính:</strong></td>
                    <td><strong>{{  @str_replace(',' ,'.', number_format($value['price']))  }}₫</strong> </td>
                </tr>
                <tr>
                    <td colspan="4" align="right"><strong>Mã giảm giá:</strong></td>
                    <td><strong> -0 ()</strong> </td>
                </tr>
                <tr>
                    <td colspan="4" align="right"><strong>Phí ship:</strong></td>
                    <td><strong>0(Chưa tính được trọng lượng của sản phẩm, liên hệ lại.)</strong> </td>
                </tr>
                <tr>
                    <td colspan="4" align="right"><strong>Thanh toán:{{  @str_replace(',' ,'.', number_format($total_price[0]))  }}</strong></td>
                    <td><strong>₫</strong></td>
                </tr>




            </tbody>
        </table>
        <p></p>
        <div style="padding:10px">
            <p>Maychieuminikaw.com&nbsp;sẽ liên lạc với quý khách và xác nhận lại đơn hàng trong thời gian sớm nhất.<br> Cảm ơn Quý Khách !</p>
            <p>&nbsp;</p>
        </div>
    </div>
    <p><br> <br> &nbsp;</p>
    <p><br> &nbsp;</p>
    <p>&nbsp;</p>
    <div class="yj6qo"></div>
    <div class="adL"> </div>
</div>
