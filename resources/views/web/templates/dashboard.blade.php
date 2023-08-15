@extends('web._layout.master-v1')
@section('menu')
    @includeIf('web._partials.navbar-v1')
@endsection
@section('content')
    <section id="app" class="diamond-dashboard">
        <div class="intro">
            <img class="banner-img"
                 src="https://amincodes.com/html/one-pages/flex-it/assets/images/sections-bg-images/pattern-bg-1.jpg"
                 alt="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="title-desktop intro-title">
                            <span class="text-white">DỊCH VỤ NẠP KIM CƯƠNG GIÁ RẺ</span>
                            <br>
                            <span class="text-pri">ĐẠI LÝ ISC</span>
                        </div>
                        <div class="title-desktop color-dark">
                            <p>ISC là đại lý bán kim cương hàng đầu cung cấp sản phẩm chất lượng cao cho các nền tảng
                                streaming như Nimo, Bigo, Tiktok và nhiều hơn nữa. Với đội ngũ chuyên nghiệp và tận tâm,
                                ISC cam kết mang lại trải nghiệm tuyệt vời, nhanh chóng và giá tốt nhất trên thị trường.
                                Tại ISC, chúng tôi luôn sẵn sàng giúp bạn trở thành ngôi sao sáng trên các nền tảng
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

        </div>
        <div class="service">
            <div class="container">
                <div class="service-title">
                    <h2 class="big-title text-white">DỊCH VỤ NẠP KIM CƯƠNG GIÁ RẺ ĐẠI LÝ ISC</h2>
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
                                        <span>Kim cương nạp từ đại lý Hyo sẽ tương đương với Kim Cương bạn nạp trực
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
        </div>
        <div class="infor">
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
                    <div class="infor-item pt-2">
                        <span class="icon">
                            <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                        </span>
                        <span class="text-desktop text-white">Hyo Entertainment là Agency chính thức được ủy
                            quyền bởi Nimo TV, giúp quý khách nạp kim cương giá rẻ một cách nhanh chóng và uy tín.</span>
                    </div>
                    <div class="infor-item pt-2">
                        <span class="icon">
                            <i class="fa-solid fa-diamond text-desktop color-pri-light"></i>
                        </span>
                        <span class="text-desktop text-white">Đặc biệt sẽ có những ưu đãi dành riêng cho
                            User nạp số lượng lớn và User nạp cho Idol trong team.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="application/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            let app = new Vue({
                el: '#app',
                data: {},
                created() {
                    let vm = this;
                },
                mounted() {
                    let vm = this;

                },
                methods: {}
            })
        })
    </script>
@endsection
@section('footer')
    @includeIf('web._partials.footer-v1')
@endsection
