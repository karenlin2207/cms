@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">
                <a class="btn btn-xs btn-primary" href="/addmin/contents/create">新增頁面</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>標題</th>
                                <th>uri name</th>
                                <th>最後更新</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody id="list" >
                            <tr v-for="content in contents" :data-id="content.id">
                                <td>@{{content.title}}</td>
                                <td>@{{content.uri_name}}</td>
                                <td>@{{content.last_update_user_id}}/@{{content.updated_at}}</td>
                                <td>
                                    <a @click="edit(content)" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>編輯</a> 
                                    <a @click="remove(content)" class="btn btn-xs btn-danger"><i class="fa fa-pencil"></i>刪除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/vue/dist/vue.js"></script>

        <script>
            $(function(){
                var vm = new Vue({
                    el : '#list',
                    data:{
                        contents: [],
                    },
                    created: function () {
                        this.fetch()
                    },
                    methods:{
                        fetch:function(){
                            var self = this;
                            $.get('/api/contents/', function(contents){
                                self.contents = contents;
                            });
                        },
                        remove:function(content){
                            var post_ary = { _method:'delete', _token: "{{ csrf_token() }}"};
                            $.post('/api/contents/'+content.id, post_ary, function(){
                                this.contents.splice(this.contents.indexOf(content),1);
                            }.bind(this));
                        },
                        edit:function(content){
                            window.location.href = '/addmin/contents/edit/' + content.uri_name;
                        }
                    }
                });
            });
        </script>
@endsection