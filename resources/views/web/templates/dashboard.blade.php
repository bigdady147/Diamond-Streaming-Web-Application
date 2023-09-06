@extends('web._layout.master-v1')
@section('menu')
    @includeIf('web._partials.navbar-v1')
@endsection
@section('content')
    <section id="app" class="diamond-dashboard">
        <section id="intro" class="intro">
            <img class="banner-img"
                 src="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/pattern-bg-1.jpg"
                 alt="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="title-desktop intro-title">
                            <span class="text-white">DỊCH VỤ NẠP KIM CƯƠNG GIÁ RẺ</span>
                            <br>
                            <span class="text-pri">ĐẠI LÝ Dailykimcuong.com</span>
                        </div>
                        <div class="title-desktop color-dark">
                            <p><strong class="text-pri">Dailykimcuong.com </strong>  là đại lý bán kim cương hàng đầu cung cấp sản phẩm chất lượng cao cho các nền tảng
                                streaming như Nimo, Bigo, Tiktok và nhiều hơn nữa. Với đội ngũ chuyên nghiệp và tận tâm,
                                Dailykimcuong.com cam kết mang lại trải nghiệm tuyệt vời, nhanh chóng và giá tốt nhất trên thị trường.
                                Tại <strong class="text-pri">Dailykimcuong.com</strong>, chúng tôi luôn sẵn sàng giúp bạn trở thành ngôi sao sáng trên các nền tảng
                                streaming. Hãy khám phá ngay hôm nay!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cover-images">
                            <img
                                src="https://amincodes.com/html/one-pages/flex-it/assets/images/hero/illustration-1.png"
                                alt="intro-right">
                        </div>
                    </div>
                </div>
                <h3 class="title-desktop intro-title"></h3>
                <h3 class="title-desktop intro-title"></h3>
            </div>

        </section>
        <section id="service" class="service">
            <div class="container">
                <div class="service-title">
                    <h2 class="big-title text-white">DỊCH VỤ NẠP KIM CƯƠNG GIÁ RẺ ĐẠI LÝ <strong class="text-pri">Dailykimcuong.com</strong></h2>
                    <p class="text-desktop color-dark">Dịch vụ của chúng tôi</p>
                </div>
                <div class="service-group">
                    <div class="list-collapse">
                        <div class="row">
                            <div class="col-lg-3">
                                <div data-bs-toggle="collapse" href="#multi1" role="button" aria-expanded="false"
                                     aria-controls="multi1" class="collabse-button flex-jt-al-cen-between show">
                                    <span class="text text-desktop text-white fw-600">An toàn</span>
                                    <span class="icon">
                                        <i class="fa-solid fa-shield-halved"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div data-bs-toggle="collapse" href="#multi2" role="button" aria-expanded="false"
                                     aria-controls="multi2" class="collabse-button flex-jt-al-cen-between">
                                    <span class="text text-desktop text-white fw-600">Tiết kiệm</span>
                                    <span class="icon">
                                        <i class="fa-solid fa-piggy-bank"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div data-bs-toggle="collapse" href="#multi3" role="button" aria-expanded="false"
                                     aria-controls="multi3" class="collabse-button flex-jt-al-cen-between">
                                    <span class="text text-desktop text-white fw-600">Uy tín</span>
                                    <span class="icon">
                                        <i class="fa-solid fa-square-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div data-bs-toggle="collapse" href="#multi4" role="button" aria-expanded="false"
                                     aria-controls="multi4" class="collabse-button flex-jt-al-cen-between">
                                    <span class="text text-desktop text-white fw-600">Nhiều ưu đãi</span>
                                    <span class="icon">
                                        <i class="fa-solid fa-money-bills"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="collapse multi-collapse show" id="multi1">
                                    <div class="card card-body data-collapse text text-desktop text-white fw-600">
                                        <span class="color-pri-light fw-600"> An toàn</span>
                                        <span>Kim cương nạp từ đại lý <strong class="text-pri">dailykimcuong.com</strong> sẽ tương đương với Kim Cương bạn nạp trực
                                        tiếp từ app Nimo hoặc website Nimo TV, bạn có thể sử dụng để donate cho các
                                        Streamer, sử dụng để mua quà tặng Idol Nimoshow hoặc sử dụng để chơi các game
                                        trên nền tảng Nimo TV</span>
                                    </div>
                                </div>
                                <div class="collapse multi-collapse show" id="multi2">
                                    <div class="card card-body data-collapse text text-desktop text-white fw-600">
                                        <span class="color-pri-light fw-600">Tiết kiệm</span>
                                        <span>Nạp Kim Cương từ đại lý được ủy quyền chính thức của Nimo TV với giá
                                        tốt nhất thị trường, bảng giá luôn được cập nhật đảm bảo quyền lợi cho người nạp
                                        </span>
                                    </div>
                                </div>
                                <div class="collapse multi-collapse show" id="multi3">
                                    <div class="card card-body data-collapse text text-desktop text-white fw-600">
                                        <span class="color-pri-light fw-600">Uy tín</span>
                                        <span>Dịch vụ nạp lâu năm đã phục vụ trên 1000+ user nạp thành công tại Nimo
                                        TV, khách hàng cũng như Idol tin tưởng sử dụng lâu dài, hỗ trợ hướng dẫn tận
                                        tình cho khách hàng mới.
                                        </span>
                                    </div>
                                </div>
                                <div class="collapse multi-collapse show" id="multi4">
                                    <div class="card card-body data-collapse text text-desktop text-white fw-600">
                                        <span class="color-pri-light fw-600">Nhiều ưu đãi</span>
                                        <span>Ngoài tỉ giá Kim Cương luôn cập nhật liên tục và rẻ nhất thị
                                        trường, chúng tôi có những ưu đãi riêng dành cho người nạp thường xuyên, để biết
                                        thêm chi tiết hãy vui lòng liên hệ số Zalo hỗ trợ.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section id="infor" class="infor">
            <div class="container">
                <div class="infor-title">
                    <h2 class="big-title text-white">THÔNG TIN</h2>
                    <p class="text-desktop color-dark">Nạp đại lý Nimo TV giá rẻ</p>
                </div>
                <div class="infor-group">
                    <div class="infor-item">
                        <span class="icon">
                            <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                        </span>
                        <span class="text-desktop text-white">Nạp đại lý Nimo giá rẻ là nạp kim cương
                            vào tài khoản Nimo TV qua đại lý được ủy quyền chính thức từ Nimo TV.</span>
                    </div>
                    <div class="infor-item pt-2">
                        <span class="icon">
                            <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                        </span>
                        <span class="text-desktop text-white">Với cách nạp này quý khách sẽ được nạp Kim Cương
                            với giá rẻ hơn so với nạp trực tiếp từ app hoặc website. Kim Cương có giá trị tương đương
                            với Kim Cương quý khách nạp từ app hoặc website.</span>
                    </div>
{{--                    <div class="infor-item pt-2">--}}
{{--                        <span class="icon">--}}
{{--                            <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>--}}
{{--                        </span>--}}
{{--                        <span class="text-desktop text-white">Hyo Entertainment là Agency chính thức được ủy--}}
{{--                            quyền bởi Nimo TV, giúp quý khách nạp kim cương giá rẻ một cách nhanh chóng và uy tín.</span>--}}
{{--                    </div>--}}
                    <div class="infor-item pt-2">
                        <span class="icon">
                            <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                        </span>
                        <span class="text-desktop text-white">Đặc biệt sẽ có những ưu đãi dành riêng cho
                            User nạp số lượng lớn và User nạp cho Idol trong team.</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="guide" class="guide">
            <div class="container">
                <div class="guide-title">
                    <h2 class="big-title text-white">HƯỚNG DẪN</h2>
                    <p class="text-desktop color-dark">Quy trình nạp kim cương giá rẻ</p>
                </div>
                <div class="guide-group">
                    <div class="mini-title ">
                        <div class="icon">
                            <div class="num">I</div>
                        </div>
                        <span class="text text-white title-desktop fw-600">Quy trình nạp kim cương giá rẻ</span>
                    </div>
                    <div class="step-guide">
                        <div class="guide-item">
                            <div class="icon">
                                <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                            </div>
                            <div class="text-desktop text-white ">
                                <span class="color-pri-light text-desktop text-bolder">Bước 1:</span> <span
                                    class="text-white text-desktop">Khách hàng gửi yêu cầu nạp vui lòng cung cấp thông tin nick Nimo TV muốn nhận Kim Cương và gói muốn nạp</span>
                            </div>
                        </div>
                        <div class="guide-item">
                            <div class="icon">
                                <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                            </div>
                            <div class="text-desktop text-white ">
                                <span class="color-pri-light text-desktop text-bolder">Bước 2:</span> <span
                                    class="text-white text-desktop">Sau khi gửi Yêu cầu, quý khách vui lòng nhắn tin cho Zalo hỗ trợ, gửi bill giao dịch chuyển khoản
                                    (quý khách chuyển khoản qua tài khoản của line hỗ trợ nào thì nhắn qua số hỗ trợ đó)</span>
                            </div>
                        </div>
                        <div class="guide-step2">
                            <div class="row">
                                <div v-for="(item,index) in list_supporters.data" class="col-lg-6">
                                    <div class="guide-step2-item">
                                        <div class="title color-pri-light text-bolder text-desktop">
                                            HỖ TRỢ NẠP 1
                                        </div>
                                        <div class="contact">
                                            <span class="icon">
                                                <i class="fa-solid fa-phone text-desktop color-pri-light"></i>
                                            </span>
                                            <span v-text="'Phone & Zalo: ' + _.get(item,'phone','')"
                                                  class="text-desktop text-white text"></span>
                                        </div>
                                        <div class="group-text">
                                            <div class="group-text-item">
                                                <div class="icon">
                                                    <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                                                </div>
                                                <div class="text-desktop text-white">
                                                    <span
                                                        class="text-white text-desktop ">Nội dung chuyển khoản: </span>
                                                    <span v-text="' [ID tài khoản nhận Kim Cương]. Ví dụ: 123456789'"
                                                          class="color-pri-light text-desktop"></span>
                                                </div>
                                            </div>
                                            <div class="group-text-item">
                                                <div class="icon">
                                                    <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                                                </div>
                                                <div class="text-desktop text-white">
                                                    <span
                                                        class="text-white text-desktop ">STK Ngân Hàng:  </span>
                                                    <span class="color-pri-light text-desktop"
                                                          v-text="_.get(item,'banking.account_number','')"></span>
                                                </div>
                                            </div>
                                            <div class="group-text-item">
                                                <div class="icon">
                                                    <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                                                </div>
                                                <div class="text-desktop text-white">
                                                    <span
                                                        class="text-white text-desktop ">Chủ Tài Khoản: </span>
                                                    <span
                                                        class="color-pri-light text-desktop"
                                                        v-text="_.get(item,'banking.username','')"></span>
                                                </div>
                                            </div>
                                            <div class="group-text-item">
                                                <div class="icon">
                                                    <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                                                </div>
                                                <div class="text-desktop text-white">
                                                    <span
                                                        class="text-white text-desktop ">Ngân Hàng: </span>
                                                    <span class="color-pri-light text-desktop"
                                                          v-text="_.get(item,'banking.banking_name','')"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="guide-item pt-3">
                            <div class="icon">
                                <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                            </div>
                            <div class="text-desktop text-white ">
                                <span class="color-pri-light text-desktop text-bolder">Bước 3:</span> <span
                                    class="text-white text-desktop"> Quý khách vui lòng chờ phản hồi và đợi Kim Cương về tài khoản</span>
                            </div>
                        </div>
                    </div>
                    <div class="mini-title pt-5">
                        <div class="icon">
                            <div class="num">II</div>
                        </div>
                        <span class="text text-white title-desktop fw-600">Lưu ý khi nạp Kim cương Nimo TV giá rẻ</span>
                    </div>
                    <div class="step-guide">
                        <div class="guide-item">
                            <div class="icon">
                                <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                            </div>
                            <div class="text-desktop text-white ">
                                <span class="text-white text-desktop text-bolder">Quý khách nên chọn nạp gói cao để được
                                    nhận được  <strong class="color-pri-light">mức giảm giá Kim Cương tốt nhất,</strong>  chi tiết các mức giá nạp quý khách xem ở bảng nạp. </span>
                            </div>
                        </div>
                        <div class="guide-item">
                            <div class="icon">
                                <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                            </div>
                            <div class="text-desktop text-white ">
                                <span class="color-white text-desktop text-bolder">Quý khách có nhu cầu nạp từ <strong
                                        class="color-pri-light">100 triệu</strong>  trở lên vui lòng
                                    Inbox hỗ trợ viên để nhận được mức chiết khấu tốt nhất.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="support" class="support">
            <div class="container">
                <div class="support-title">
                    <h2 class="big-title text-white">LIÊN HỆ VÀ HỖ TRỢ</h2>
                    <p class="text-desktop color-dark">Mọi vướng mắc trong quá trình nạp cũng như yêu cầu hỗ trợ vui
                        lòng liên hệ Zalo</p>
                </div>
                <div class="support-group">
                    <div style="justify-content: space-between" class="row">
                        <div v-for="(item,index) in list_supporters.data" class="col-md-3">
                            <div class="support-item">
                                <div class="support-item-title">
                                       <span class="icon">
                                          <i class="fa-solid fa-phone text-desktop color-pri-light"></i>
                                       </span>
                                    <span v-text="'Hỗ trợ ' + (index + 1) + ' Phone & Zalo'"
                                          class="text-desktop text-white text ">Hỗ trợ 1 Phone & Zalo: <strong
                                            class="color-pri-light">0848123437</strong>  </span>
                                </div>
                                <div class="qr-item">
                                    <img :src="_.get(item,'zalo_qr','')" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="math" class="math">
            <div class="container">
                <div class="math-title">
                    <h2 class="big-title text-white">CÔNG THỨC CHUYỂN ĐỔI</h2>
                    <div class="text-desktop color-dark">
                        Hãy chọn nền tảng cần nạp
                    </div>
                </div>
                <div class="math-group">
                    <div class="math-group-input">
                        <input v-model="math_input" type="radio" id="huey" name="drone" :value="'nimo'" checked/>
                        <label for="huey">NIMO</label>
                    </div>
                    <div style="margin-left: 20px" class="math-group-input">
                        <input v-model="math_input" type="radio" id="dewey" name="drone" :value="'bigo'"/>
                        <label for="dewey">BIGO</label>
                    </div>
                    <div style="margin-left: 20px" class="math-group-input">
                        <input v-model="math_input" type="radio" id="louie" name="drone" :value="'mico'"/>
                        <label for="louie">MICO</label>
                    </div>
                </div>
                <div v-show="math_input == 'nimo' " class="form-send-request">
                    <div class="form-data">
                        <div class="row">
                            <div class="form-input col-lg-6" >
                                <label id="label_id_nimo" for="id_nimo">Nhập số tiền:</label>
                                <input class="mt-2" v-model="item_math_nimo.money" placeholder="Nhập số tiền" name="id_nimo"
                                       id="id_nimo"
                                       type="number">
                            </div>
                            <div class="form-input col-lg-6 " >
                                <label id="label_id_nimo" for="id_nimo">Kim cương:</label>
                                <input class="mt-2" v-model="item_math_nimo.diamond" placeholder="Kim cương nhận được" name="id_nimo"
                                       id="id_nimo" disabled
                                       type="number">
                            </div>
                            <div class="col-lg-12">
                                <div class="send-request">
                                    <button @click="math(math_input,item_math_nimo.money)" class="button-send-request">
                                        CHUYỂN ĐỔI
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="request" class="request">
            <div class="container">
                <div class="request-title">
                    <h2 class="big-title text-white">Gửi yêu cầu nạp Kim Cương</h2>
                    <p class="text-desktop color-dark">Mọi vướng mắc trong quá trình nạp cũng như yêu cầu hỗ trợ vui
                        lòng liên hệ Zalo tại 2 số bên trên</p>
                </div>
                <div class="form-send-request">
                    <div class="form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-item">
                                    <label id="label_id_nimo" for="id_nimo">ID</label>
                                    <input v-model="item_edit.id_app" placeholder="ID" name="id_nimo" id="id_nimo"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-item">
                                    <label for="nickname">Nickname</label>
                                    <input v-model="item_edit.nickname" placeholder="Nickname" name="nickname"
                                           id="nickname" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-item">
                                    <label for="phone">Số điện thoại</label>
                                    <input v-model="item_edit.phone" placeholder="Số điện thoại" name="phone" id="phone"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-item">
                                    <label for="lang-select">Zalo hỗ trợ</label>
                                    <select v-model="item_edit.supporters_id" name="lang" id="lang-select">
                                        <option hidden selected disabled value="">Hãy chọn Zalo hỗ trợ</option>
                                        <option style="padding: 6px 10px" v-for="(item,index) in list_supporters.data"
                                                v-text="item.phone + ' - ' + _.get(item,'full_name','')"
                                                :value="item.id" class="default" value="">Hãy chọn
                                            Zalo hỗ trợ
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-item">
                                    <label for="lang-select">Chọn nền tảng</label>
                                    <select v-model="item_edit.foundations_id" name="lang" id="lang-select">
                                        <option hidden selected value="" disabled>Hãy chọn nền tảng</option>
                                        <option style="padding: 6px 10px" v-for="(item,index) in list_foundations.data"
                                                v-text="_.get(item,'full_name','')" :value="item.id" class="default"
                                                value="">Hãy chọn gói nạp
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-item">
                                    <label for="lang-select">Chọn gói nạp</label>
                                    <select v-model="item_edit.packages_id" name="lang" id="lang-select">
                                        <option selected hidden value="" disabled>Hãy gói nạp</option>
                                        <option style="padding: 6px 10px" v-for="(item,index) in list_packages.data"
                                                v-text="formartPackagesName(item.full_name, item.price, item.count)"
                                                :value="item.id" class="default" value="">Hãy chọn gói nạp
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="send-request">
                                    <button :disabled="!isFullData" @click="save" class="button-send-request">GỬI YÊU
                                        CẦU
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="support-title">
                    <h2 class="big-title text-white">VỀ CHÚNG TÔI</h2>
                    <div class="text-desktop color-dark">
                        Chào mừng đến với <strong class="text-pri">DailyKimCuong.com </strong> - trang web chuyên cung
                        cấp dịch vụ nạp kim cương cho các nền tảng <strong class="text-pri">MICO, NIMO, BIGO </strong>
                        với giá tốt và chiết khấu cao. Chúng tôi tự hào là địa chỉ tin cậy của hàng ngàn người dùng trên
                        khắp Việt Nam. Với đội ngũ nhân viên giàu kinh nghiệm và tận tâm, chúng tôi cam kết mang đến cho
                        khách hàng những trải nghiệm mua sắm trực tuyến tốt nhất. Hãy ghé thăm <strong class="text-pri">DailyKimCuong.com </strong>
                        ngay hôm nay để trải nghiệm dịch vụ tuyệt vời của chúng tôi!
                    </div>
                </div>

            </div>
        </section>
        <section id="modal_order" class="modal modal-dashboard" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{--                    <div class="modal-header">--}}
                    {{--                        <h5 class="modal-title">Modal title</h5>--}}
                    {{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
                    {{--                    </div>--}}
                    <div class="modal-body">
                        <div class="block-img">
                            <img src="{{ asset('images/contact/banner-popup.jpg') }}" alt="banner-popup">
                        </div>
                        <p class="mini-text text-center text-pri text-bolder title-desktop mt-3">Gửi thành công</p>
                        <p class="mini-text text-center">Chúng tôi đã tiếp nhận yêu cầu nạp kim cương của quý khách</p>
                        <div class="med-block">
                            <div class="med-text">
                                <span>Quý khách vui lòng nhắn tin qua số Zalo hỗ trợ </span>
                                <span class="text-bolder text-pri" v-text="zalo_supporter"> </span>
                                <span>với nội dung:</span>
                            </div>
                            <p class="med-text">
                                <strong class="text-pri">
                                    Nimo – [Nickname] – [ID nhận Kim Cương]
                                </strong>
                            </p>
                            <p>Nhân viên sẽ hỗ trợ quý khách nhanh nhất.</p>
                        </div>
                    </div>
                    {{--                    <div class="modal-footer">--}}
                    {{--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </section>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">

        //NAVBAR ACTIVE
        // activeMenu();



    </script>
    <script type="application/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            let app = new Vue({
                el: '#app',
                data: {
                    item_edit: {
                        supporters_id: '',
                        foundations_id: '',
                        packages_id: '',
                    },
                    list_supporters: [],
                    list_packages: [],
                    list_foundations: [],
                    filters: {
                        foundation_id: '',
                    },
                    zalo_supporter: '',
                    isFullData: false,
                    math_input: 'nimo',
                    item_math_nimo: {
                        money: '',
                        diamond: 0,
                    },
                    item_math_mico: {
                        money: '',
                        diamond: 0,
                    },
                    item_math_bigo: {
                        money: '',
                        diamond: 0,
                    },
                    nav_active: ''
                },
                created() {
                    let vm = this;

                },
                mounted() {
                    let vm = this;
                    vm.loadListSupporters();
                    vm.loadListPackages();
                    vm.loadListFoundations();
                },
                methods: {
                    save() {
                        let vm = this;
                        if (vm.item_edit.foundations_id && vm.item_edit.id_app && vm.item_edit.nickname && vm.item_edit.packages_id && vm.item_edit.phone && vm.item_edit.supporters_id) {
                            axios.post(`api/orders`, vm.item_edit).then(response => {
                                setTimeout(() => {
                                    $('#modal_order').modal('show');
                                }, 300)
                            }).catch(e => {
                                // this.errors.push(e)
                            })
                        } else {
                            alert('Hãy nhập đầy đủ thông tin !')
                        }
                    },
                    showModal(id_modal) {
                        let myModal = new bootstrap.Modal(document.getElementById(id_modal), {});
                        document.onreadystatechange = function () {
                            myModal.show();
                        };
                    },
                    loadListSupporters() {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.get(`/api/supporters`, {
                                params: {
                                    filters_status: 'active'
                                }
                            }
                        ).then(response => {
                            vm.list_supporters = response.data;

                        }).catch(e => {
                            // this.errors.push(e)
                        })
                    },
                    formartPackagesName(name, price, count) {
                        let vm = this;
                        return name + ': ' + price + ' VNĐ' + ' - ' + count + ' Kim cương';
                    },
                    loadListPackages() {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.get(`/api/packages`, {
                            params: {
                                filters: vm.item_edit.foundations_id,
                            },
                        }).then(response => {
                            vm.list_packages = response.data;
                        }).catch(e => {
                        })
                    },
                    loadListFoundations() {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.get(`/api/foundations`).then(response => {
                            vm.list_foundations = response.data;
                        }).catch(e => {
                            // this.errors.push(e)
                        })
                    },
                    math(key, money_data) {
                        let vm = this;
                        let money = parseFloat(money_data);
                        switch (key) {
                            case 'nimo':
                                if (money > 0 && money < 42000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 450);

                                } else if (money >= 42000 && money < 348000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 420);

                                } else if (money >= 348000 && money < 2650000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 395.4545);

                                } else if (money >= 2650000 && money < 7200000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 389.7059);

                                } else if (money >= 7200000 && money < 21600000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 382.9787);

                                } else if (money >= 21600000 && money < 48800000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 380.2817);

                                } else if (money >= 48800000 && money < 70800000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 378.882);

                                } else if (money >= 70800000) {
                                    vm.item_math_nimo.diamond = parseInt(money / 375);
                                }
                                break;
                            case 'bigo':
                                // code block
                                break;
                            case 'mico':
                                // code block
                                break;
                            default:
                            // code block
                        }

                    },
                    requestPayment() {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.post(`/api/orders`, vm.item_edit).then(response => {
                            console.log('done', response);

                        }).catch(e => {
                            this.errors.push(e)
                        })
                    },
                },
                watch: {
                    'item_edit.foundations_id': function () {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.get(`/api/packages`, {
                            params: {
                                filters: vm.item_edit.foundations_id,
                            },
                        }).then(response => {
                            vm.list_packages = response.data;
                        }).catch(e => {
                        })
                    },
                    'item_edit.supporters_id': function () {
                        let vm = this;
                        vm.zalo_supporter = '';
                        let data_temp = {};
                        vm.zalo_supporter = vm.list_supporters.data.map((val, i) => {
                            if (val.id == vm.item_edit.supporters_id) {
                                data_temp = val;
                            }
                        })
                        vm.zalo_supporter = data_temp.phone + ' - ' + data_temp.full_name;
                    },
                    'item_edit': {
                        handler: function (after, before) {
                            if (this.item_edit.foundations_id && this.item_edit.id_app && this.item_edit.nickname && this.item_edit.packages_id && this.item_edit.phone && this.item_edit.supporters_id) {
                                this.isFullData = true;
                            }
                        },
                        deep: true,
                    }
                },
            })
        })
    </script>
@endsection
@section('footer')
    @includeIf('web._partials.footer-v1')
@endsection
