@extends('admin._layouts.master-v1')
{{--@section('menu')--}}
{{--    @includeIf('admin._partials.navbar-v1')--}}
{{--@endsection--}}
@section('content')
    <section id="app" class="admin-dashboard">
        {{--        <breadcrumb :items="dataset"></breadcrumb>--}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-bolder"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active text-pri" aria-current="page">List Packages</li>
                <li class="breadcrumb-item active text-pri" aria-current="page">Packages management</li>
            </ol>
        </nav>
        <div class="list-action">
            <button @click="addNew()" class=" btn-success btn-action text-admin">Add new</button>
            {{--            <button class=" btn-danger btn-action text-admin">Delete</button>--}}
            {{--            <button class=" btn-primary btn-action text-admin">Edit</button>--}}
        </div>
        <div class="table-data">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Foundation</th>
                    <th>Packages name</th>
                    <th>Count</th>
                    <th>Price</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Action & status</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item,index) in list.data">
                    <td v-text="_.get(item,'id','')"></td>
                    <td v-text="_.get(item,'foundation.full_name','')"></td>
                    <td v-text="_.get(item,'full_name','')"></td>
                    <td v-text="_.get(item,'count','')"></td>
                    <td v-text="_.get(item,'price','')"></td>
                    <td v-text="_.get(item,'created_at','')"></td>
                    <td v-text="_.get(item,'updated_at','')"></td>
                    <td>
                        <div class="dropdown">
                            <button v-text="_.get(item,'status','')" :class="item.active == 'active' ? 'btn-success' : 'btn-primary'" class="btn  dropdown-toggle text-admin"
                                    type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
{{--                                <li><a class="dropdown-item text-admin text-bolder" @click="activeItem(item)" href="#">Active</a>--}}
{{--                                </li>--}}
                                <li><a class="dropdown-item text-admin text-bolder" @click="editItem(item)" href="#">Edit</a>
                                </li>
                                <li><a class="dropdown-item text-admin text-bolder" @click="deleteItem(item)" href="#">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="modal fade" id="modalAddNew" tabindex="-1" aria-labelledby="modalAddNew" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-admin" id="exampleModalLabel" v-text="modal_title">Add new</h5>
                    </div>
                    <div class="modal-body ">
                        <div class="form-admin">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <label for="name">Full name</label>
                                        <input v-model="item_edit.full_name" id="name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <label for="phone">Foundations</label>
                                        <select v-model="item_edit.foundation_id" name="lang" id="lang-select">
                                            <option style="padding: 6px 10px; font-size: 10px" v-for="(item,index) in list_foundations.data" v-text="item.full_name" :value="item.id" class="default">Hãy chọn một ngôn ngữ lập trình</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <label for="phone">Count</label>
                                        <input v-model="item_edit.count" id="phone" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input">
                                        <label for="email">Price</label>
                                        <input v-model="item_edit.price" id="email" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-admin " data-bs-dismiss="modal">Close</button>
                        <button @click="save()" type="button" class="btn btn-success text-admin ">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let app = new Vue({
                el: '#app',
                data: {
                    item_edit: {},
                    modal_title: '',
                    dataset: [
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
                    fileData: '',
                    dateOfBirth: null,
                    list: [],
                    list_foundations: [],
                    is_add_new: false,
                    errors: [],

                },
                created() {
                    let vm = this;

                },
                mounted() {
                    let vm = this;
                    vm.loadList();
                    vm.loadListFoundations();
                },
                methods: {
                    addNew() {
                        let vm = this;
                        vm.is_add_new = true;
                        vm.modal_title = 'Add new';
                        $('#modalAddNew').modal('show');
                    },
                    deleteItem(data) {
                        let vm = this;
                        let text = "Press a button for delete supporters!" + _.get(data, 'email', '') + " \nEither OK or Cancel.";
                        if (confirm(text) == true) {
                            text = "OK!";
                            axios.delete(`/api/packages/${data.id}`).then(response => {
                                vm.loadList();
                            }).catch(e => {
                                this.errors.push(e)
                            })
                        } else {
                            text = "canceled!";
                        }
                    },
                    editItem(data) {
                        let vm = this;
                        vm.is_add_new = false;
                        vm.modal_title = 'Edit';
                        vm.item_edit = _.cloneDeep(data);
                        $('#modalAddNew').modal('show');
                    },
                    onFileChange(event) {
                        let vm = this;
                        let file = event.target.files[0];
                        let reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            vm.fileData = reader.result;
                        };
                    },
                    updateDateOfBirth(event) {
                        vm.dateOfBirth = event.target.value;

                    },
                    save() {
                        let vm = this;
                        vm.item_edit.avatar = vm.fileData;
                        vm.item_edit.status = 'active';
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        if (vm.is_add_new) {
                            //Add new
                            axios.post(`/api/packages`, vm.item_edit).then(response => {
                                console.log('done', response);
                                $('#modalAddNew').modal('hide');
                                vm.loadList();

                            }).catch(e => {
                                this.errors.push(e)
                            })
                        } else {
                            //Edit
                            axios.put(`/api/packages/${vm.item_edit.id}`, vm.item_edit).then(response => {
                                console.log('done edit', response);
                                $('#modalAddNew').modal('hide');
                                vm.loadList();

                            }).catch(e => {
                                this.errors.push(e)
                            })
                        }

                    },
                    loadList() {
                        let vm = this;
                        const headers = {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                        };
                        axios.get(`/api/packages`).then(response => {
                            vm.list = response.data;

                        }).catch(e => {
                            // this.errors.push(e)
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
                    }
                }
            })
        })
    </script>

@endsection
{{--@section('footer')--}}
{{--    @includeIf('web._partials.footer-v1')--}}
{{--@endsection--}}
