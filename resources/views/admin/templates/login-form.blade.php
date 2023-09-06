<div id="login-data" class="login">
    <div class="container">
        <h1 class="title text-pri text-bolder">Dailykimcuong.com</h1>
        <div class="card">
            <form>
                <input v-model="admin_item.username" type="text" placeholder="Username">
                <input v-model="admin_item.password" type="password" placeholder="Password">
                <div class="buttons">
                    {{--                    <a href="#" class="register-link">Register</a>--}}
                    <div @click="login()" class="login-button">Login</div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script type="application/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        let app = new Vue({
            el: '#login-data',
            data: {
                admin_item: {
                    username: '',
                    password: '',
                }
            },
            created() {
                let vm = this;

            },
            mounted() {
                let vm = this;
            },
            methods: {
                login(){
                    let vm  = this;
                    if(vm.admin_item.username == 'dailykimcuong.com' && vm.admin_item.password == '123'){
                        localStorage.setItem('admin_login', true);
                        setTimeout(()=>{
                            location.reload();
                        }, 1000)
                    }else{
                        alert('Sai tài khoản hoặc mật khẩu vui lòng đăng nhập lại')
                    }
                }
            },
            watch: {

            },
        })
    })
</script>
