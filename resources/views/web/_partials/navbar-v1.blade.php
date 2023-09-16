<nav id="navbar-diamond" class="navbar navbar-expand-lg navbar-light  navbar-diamond">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h1>
                <img class="logo" src="{{ asset('images/contact/logo-diamond.png') }}" alt="banner-popup">
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
            <ul class="navbar-nav">
                <li :class="nav_active == 'intro' ? 'active' : '' " class="nav-item">
                    <a class="nav-link" aria-current="page" href="#intro">Giới thiệu</a>
                </li>
                <li :class="nav_active == 'math'  ? 'active' :  '' " class="nav-item">
                    <a class="nav-link" href="#math">Chuyển đổi</a>
                </li>
                <li :class="nav_active == 'request'  ? 'active' :  '' " class="nav-item">
                    <a class="nav-link" href="#request">Gửi yêu cầu</a>
                </li>
                <li :class="nav_active == 'guide'  ? 'active' :  '' " class="nav-item">
                    <a class="nav-link" href="#guide">Hướng dẫn</a>
                </li>
                <li :class="nav_active == 'support'  ? 'active' :  '' " class="nav-item">
                    <a class="nav-link" href="#support">Liên hệ và hỗ trợ</a>
                </li>
                <li :class="nav_active == 'service'  ? 'active'  : '' " class="nav-item">
                    <a class="nav-link" href="#service">Dịch vụ</a>
                </li>

                <li :class="nav_active == 'infor'  ? 'active' :  '' " class="nav-item">
                    <a class="nav-link" href="#infor">Thông tin</a>
                </li>
                <li :class="nav_active == 'about-us'  ? 'active' :  '' " class="nav-item">
                    <a class="nav-link" href="#about-us">Về chúng tôi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let app = new Vue({
            el: '#navbar-diamond',
            data: {
                item_edit: { },
                url_link: '',
                nav_active: ''

            },
            created() {
                let vm = this;
                window.addEventListener("scroll", function() {
                    var navChange = document.getElementById("navbar-diamond");
                    navChange.classList.toggle("sticky", window.scrollY > 0);
                    const sections = document.querySelectorAll('section');

                    const currentScrollPos = window.pageYOffset;

                    sections.forEach(section => {
                        const sectionTop = section.offsetTop - 200;
                        const sectionHeight = section.clientHeight;
                        if (currentScrollPos >= sectionTop && currentScrollPos < sectionTop + sectionHeight) {
                            vm.nav_active = section.id;
                        }
                    });
                })
            },
            mounted() {
                let vm = this;

            },
            methods: {

            }
        })
    })
</script>
