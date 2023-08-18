@extends('admin._layouts.master-v1')
{{--@section('menu')--}}
{{--    @includeIf('admin._partials.navbar-v1')--}}
{{--@endsection--}}
@section('content')
    <section id="app" class="admin-dashboard">
{{--        <breadcrumb :items="dataset"></breadcrumb>--}}
        <p v-for="(item,index) in dataset" v-text="item.text"></p>
    </section>
    <script>


        document.addEventListener('DOMContentLoaded', () => {
            let app = new Vue({
                el: '#app',

                data: {
                    item_edit: { },

                    dataset:  [
                        {
                            text: 'Admin',
                            active: false,
                            url: "{{route('admin-list-supporters')}}",
                        },
                        {
                            text: 'List supporters',
                            active: false,
                            url: "{{route('admin-list-supporters')}}",
                        },
                        {
                            text: 'Supporter',
                            active: true,
                            url: "{{route('admin-list-supporters')}}",
                        },
                    ],
                },
                created() {
                    let vm = this;
                },
                mounted() {
                    let vm = this;
                    console.log(vm.dataset)
                },
                methods: {
                    save() {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.post(`api/orders`, vm.item_edit).then(response => {
                            console.log('done', response.message);

                        }).catch(e => {
                            // this.errors.push(e)
                        })
                    }
                }
            })
        })
    </script>

@endsection
{{--@section('footer')--}}
{{--    @includeIf('web._partials.footer-v1')--}}
{{--@endsection--}}
