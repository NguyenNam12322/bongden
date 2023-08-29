@extends('frontend.layouts.apps')
@section('content')

<main id="main" class="">
    <div class="row category-page-row">

        @include('include.sizebar')

        <div class="col large-9">
            <div class="shop-container">
                <div class="term-description">
                   {!!  $slogan !!} 
                </div>
                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">

                    @if(isset($data))
                    @foreach($data as $value)
                    <div class="product-small col has-hover product type-product post-8037 status-publish first instock product_cat-den-led-bup product_cat-den-led-bup-tru-dos has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="col-inner">
                            <div class="badge-container absolute left top z-1"></div>
                            <div class="product-small box ">
                                <div class="box-image">
                                    <div class="image-none"> <a href="{{ route('details', $value->Link) }}"> <img data-lazyloaded="1" src="{{ asset($value->Image) }}" width="300" height="300" data-src="{{ asset($value->Image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail entered litespeed-loaded" alt=""  data-sizes="(max-width: 300px) 100vw, 300px" data-ll-status="loaded" sizes="(max-width: 300px) 100vw, 300px" srcset="https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1-300x300.png 300w, https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1-800x800.png 800w, https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1-150x150.png 150w, https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1-768x768.png 768w, https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1-31x31.png 31w, https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1-100x100.png 100w, https://tlclighting.com.vn/wp-content/uploads/2021/03/15W-1.png 900w"> </a></div>
                                    <div class="image-tools is-small top right show-on-hover"></div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                </div>
                                <div class="box-text box-text-products text-center grid-style-2">
                                    <div class="title-wrapper">
                                        <p class="name product-title woocommerce-loop-product__title">
                                            <a href="../../san-pham/bong-den-led-bulb-15w/index.html">{{ $value->Name  }}</a></p>
                                    </div>
                                    <div class="price-wrapper"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi>{{ str_replace(',' ,'.', number_format($value->Price)) }}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif


                  
                    
                </div>


               <!--  <div class="container">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center">
                            <li><span aria-current="page" class="page-number current">1</span></li>
                            <li><a class="page-number" href="page/2/index.html">2</a></li>
                            <li><a class="next page-number" href="page/2/index.html"><i class="icon-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div> -->
            </div>
            <p style="text-align: justify;"><b>Xem thêm: </b><span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/bong-den-led-30w-phien-ban-friendly/index.html"><b>Đèn LED Bulb trụ ECO cao cấp chính hãng tại Hà Nội</b></a></span></p>
            <h2 style="text-align: justify;"><strong>1. Đèn LED Bulb (Búp) là gì?</strong></h2>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;"><strong>Đèn LED Bulb của TLC LIGHTING</strong> có nhiều hình dạng và kích thước, nhờ sự dịch chuyển trong các chất bán dẫn trong chip LED khi có dòng điện chạy qua mà đèn có thể chiếu sáng. Hầu hết các mẫu bóng đèn LED Bulb đều được thiết kế hình trụ đứng, phần bóng bo tròn như đèn truyền thống nhưng tính năng của chúng lại vô cùng khác biệt.</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400;"><span style="color: #282828;">Hiện nay, loại đèn uy tín của TLC LIGHTING được sử dụng phổ biến nhất trên thị trường đó là</span> <span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/den-led-bulb-50w/index.html">đèn LED Bulb trụ ECO </a></span><span style="color: #282828;">công suất từ 10W – 80W và</span> <span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/bong-den-led-tron/index.html">bóng đèn tròn LED Bulb OS</a></span> <span style="color: #282828;">công suất 3W – 13W. Ngoài ra còn có</span> <span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/bong-den-led-tron-trang-tri-os-3w/index.html">bóng đèn LED tròn trang trí</a>, </span><span style="color: #282828;">búp LED nến&nbsp;công suất trung bình 3W.</span></span></p>
            <p style="text-align: justify;"><span style="color: #282828;"><b>Xem thêm: </b></span><span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/den-led-nhot-3w-don-sac/index.html"><b>Đèn LED búp trang trí lý tưởng cho không gian yên tĩnh và thanh bình</b></a></span></p>
            <h2 style="text-align: justify;"><b>2. Cấu tạo của đèn LED Bulb trong chiếu sáng dân dụng</b></h2>
            <p style="text-align: justify;"><span style="font-weight: 400;"><span style="color: #282828;">Sản phẩm</span> <span style="color: #0000ff;">bóng đèn LED Bulb TLC LIGHTING</span> <span style="color: #282828;">được thiết kế bởi công nghệ tiên tiến nhằm mục đích khuếch tán ánh sáng trắng, ánh sáng ấm mà vẫn tiêu thụ rất ít năng lượng – đây là điều làm cho</span> <span style="color: #282828;">đèn LED Bulb trụ ECO,</span> <span style="color: #282828;">đèn LED búp tròn OS của TLC LIGHTING trở thành sự lựa chọn hoàn hảo cho các tòa nhà dân cư, trung tâm thương mại, trang trí nhà hàng, khách sạn…&nbsp;</span></span></p>
            <figure id="attachment_6851" aria-describedby="caption-attachment-6851" style="width: 600px" class="wp-caption aligncenter"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNTk2IiB2aWV3Qm94PSIwIDAgNjAwIDU5NiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" class="wp-image-6851 size-full" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/10/den-bup-tru-ECO-80w-e1603952317905.jpg" alt="Đèn LED Bulb trụ ECO 80W của TLC LIGHTING" width="600" height="596">
                <figcaption id="caption-attachment-6851" class="wp-caption-text">Đèn LED Bulb trụ ECO 80W của TLC LIGHTING</figcaption>
            </figure>
            <p style="text-align: justify;"><span style="font-weight: 400;"><span style="color: #282828;">Thời gian gần đây,</span> <strong><span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/den-led-bup-tru-eco-50w/index.html">đèn LED Bulb trụ ECO</a> </span></strong><span style="color: #282828;">của <strong>TLC LIGHTING</strong> được đưa vào sử dụng tại nhiều khu công nghiệp, thay thế đèn compact và đèn cao áp nhờ tính năng chuyên biệt.</span></span></p>
            <figure id="attachment_6852" aria-describedby="caption-attachment-6852" style="width: 600px" class="wp-caption aligncenter"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNjE5IiB2aWV3Qm94PSIwIDAgNjAwIDYxOSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" class="wp-image-6852 size-full" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/10/bup-BOS-13w-1-e1603952339956.png" alt="Đèn LED Bulb tròn 10W TLC LIGHTING" width="600" height="619">
                <figcaption id="caption-attachment-6852" class="wp-caption-text">Đèn LED Bulb tròn 10W TLC LIGHTING</figcaption>
            </figure>
            <ul style="text-align: justify;">
                <li style="font-weight: 400;"><span style="font-weight: 400; color: #282828;">Đèn LED búp trụ ECO có độ sáng ổn định, sử dụng năng lượng trực tiếp không cần dùng đến tăng phô, hoặc chuột kích</span></li>
                <li style="font-weight: 400;"><span style="font-weight: 400; color: #282828;">Độ sáng linh hoạt ở cá khu vực có diện tích khác nhau như: nhà xưởng, kho bãi, sân vườn,…</span></li>
                <li style="font-weight: 400;"><span style="font-weight: 400; color: #282828;">Tiết kiệm năng lượng, chi phí khi hiệu suất phát sáng cao</span></li>
                <li style="font-weight: 400;"><span style="font-weight: 400; color: #282828;">Chỉ số chống ẩm, chống bụi cao</span></li>
                <li style="font-weight: 400;"><span style="font-weight: 400; color: #282828;">Hạn chế khí thải CO2, thân thiện với môi trường, bảo vệ sức khỏe người lao động</span></li>
            </ul>
            <figure id="attachment_6854" aria-describedby="caption-attachment-6854" style="width: 600px" class="wp-caption aligncenter"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNDI0IiB2aWV3Qm94PSIwIDAgNjAwIDQyNCI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" class="wp-image-6854 size-full" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/10/Cau-tao-Bup-tru-scaled-e1604025834306.jpg" alt="Cấu tạo đèn LED Bulb trụ TLC LIGHTING" width="600" height="424">
                <figcaption id="caption-attachment-6854" class="wp-caption-text">Cấu tạo đèn LED Bulb trụ TLC LIGHTING</figcaption>
            </figure>
            <h2 style="text-align: justify;"><b>3. Ưu điểm vượt trội khi sử dụng đèn LED Blub TLC LIGHTING</b></h2>
            <ul style="text-align: justify;">
                <li><b>S<span style="color: #282828;">iêu tiết kiệm điện năng</span></b></li>
            </ul>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;">Sử dụng bóng đèn LED Bulb của TLC LIGHTING tiết kiệm đến 90% năng lượng, chi phí vận hành thấp, ổn định dưới mọi thời tiết, chống cháy nổ tốt.&nbsp;</span></p>
            <ul style="text-align: justify;">
                <li><span style="color: #282828;"><b>Chất lượng ánh sáng siêu Việt</b></span></li>
            </ul>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;">Ánh sáng vượt trội so với đèn compact cùng công suất. Cường độ chiếu sáng cao, độ rọi tiêu chuẩn, hiệu ứng ánh sáng ấm áp của mẫu đèn này đem lại cho mọi không gian đạt được sự hoàn mỹ.&nbsp;</span></p>
            <ul style="text-align: justify;">
                <li><span style="color: #282828;"><b>Tuổi thọ cao</b></span></li>
            </ul>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;">Đèn LED Bulb TLC LIGHTING thân thiện với môi trường vì chúng có tuổi thọ cao hơn đáng kể so với bóng đèn truyền thống. Chip LED của đèn sử dụng được hơn 40.000 giờ trước khi chúng cần được thay thế. Công suất chiếu sáng cao cộng với sự bền bỉ của mẫu đèn này sẽ giúp tiết kiệm chi phí.</span></p>
            <ul style="text-align: justify;">
                <li><span style="color: #282828;"><b>An toàn sức khỏe cho con người</b></span></li>
            </ul>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;">Thiết kế bố cục đèn LED Bulb hợp lý sẽ đảm bảo được ánh sáng có mặt ở khắp các khu vực, thuận tiện cho việc bật/tắt mà không lo hao mòn, phòng chống được các tật khúc xạ về mắt như cận thị, viễn thị,…</span></p>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;">Bên cạnh ưu điểm, thì nhược điểm khi sử dụng đèn LED là một số người tiêu dùng không thích màu ánh sáng lạnh. Cho nên TLC LIGHTING đã phát triển các loại đèn có ánh sáng ấm, đưa ra nhiều sự lựa chọn cho khách hàng.</span></p>
            <h2 style="text-align: left;"><span style="color: #282828;"><b>4. Vì sao mua bóng đèn LED Bulb TLC LIGHTING?</b></span></h2>
            <ul style="text-align: justify;">
                <li><span style="font-weight: 400; color: #282828;">Sản phẩm chính hãng – uy tín –&nbsp; chất lượng cao</span></li>
                <li><span style="font-weight: 400; color: #282828;">Thông số kỹ thuật đạt tiêu chuẩn của Bộ Xây dựng và Bộ Y tế</span></li>
                <li><span style="font-weight: 400; color: #282828;">Quy trình sản xuất và kiểm soát nghiêm ngặt, đạt chuẩn ISO 9001:2015</span></li>
            </ul>
            <p style="text-align: justify;"><span style="color: #282828;"><span style="font-weight: 400;">Xem thêm: </span><span style="color: #0000ff;"><a style="color: #0000ff;" href="../../san-pham/den-led-bulb-tru-eco-40w/index.html"><b>Mua đèn LED Bulb TLC LIGHTING uy tín ở đâu?</b></a></span></span></p>
            <p style="text-align: justify;"><span style="font-weight: 400; color: #282828;">TLC LIGHTING là đơn vị hàng đầu trong lĩnh vực phát triển công nghệ LED chiếu sáng tiết kiệm năng lượng tại Việt Nam hiện nay. Với tiêu chí: “ SẢN PHẨM CHÍNH HÃNG – GIÁ CẢ HỢP LÝ – BẢO HÀNH LÂU DÀI”, chúng tôi không chỉ mang đến các mẫu đèn LED tốt nhất cho thị trường mà còn gửi gắm thông điệp, giá trị cốt lõi trong cuộc sống tới người tiêu dùng đã tin tưởng sử dụng sản phẩm.</span></p>
        </div>
    </div>
</main>

@endsection