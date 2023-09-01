<div id="sidebardata" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark group-sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0">
                    <i class="fas fa-house-user"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fas fa-tachometer-alt"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin-list-supporters')}}" :class="url_link.includes('list-supporters') ? 'nav-link-active' : '' " class="nav-link px-0 align-middle">
                    <i class="fas fa-people-arrows"></i> <span class="ms-1 d-none d-sm-inline">Supporter</span></a>
            </li>
            <li>
                <a href="{{route('admin-list-foundations')}}" :class="url_link.includes('list-foundations') ? 'nav-link-active' : '' " class="nav-link px-0 align-middle">
                    <i class="fas fa-people-arrows"></i> <span class="ms-1 d-none d-sm-inline">Foundations</span></a>
            </li>
            <li>
                <a href="{{route('admin-list-packages')}}" :class="url_link.includes('list-packages') ? 'nav-link-active' : '' " class="nav-link px-0 align-middle">
                    <i class="fas fa-people-arrows"></i> <span class="ms-1 d-none d-sm-inline">Packages</span></a>
            </li>
            <li>
                <a href="{{route('admin-list-orders')}}" :class="url_link.includes('list-orders') ? 'nav-link-active' : '' " class="nav-link px-0 align-middle">
                    <i class="fas fa-people-arrows"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
               id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                     class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        let app = new Vue({
            el: '#sidebardata',
            data: {
                item_edit: { },
                url_link: '',
            },
            created() {
                let vm = this;
                vm.url_link  = location.href;
            },
            mounted() {
                let vm = this;

            },
            methods: {

            }
        })
    })
</script>
