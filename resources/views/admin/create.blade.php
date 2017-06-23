@extends('layouts.app')
@include('vendor.ueditor.assets')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="Compose-Message">               
            <div class="panel panel-success">
                <div class="panel-heading">
                    新增
                </div>
                <form method="POST" action="/addmin/contents/" enctype="multipart/form-data"> 
                     {{ csrf_field() }}
                <div class="panel-body">
                    <label>名稱 : </label>
                    <input type="text" class="form-control" name="title"/>
                    <label>uri name : </label>
                    <input type="text" class="form-control" name="uri_name"/>
                    <label>頁面橫幅 : </label>
                    <input type="file" class="form-control" id="banner_file" name="banner_file" placeholder="上傳圖片">                    
                    <label>內容 : </label>
                        <script id="container" name="content_first" type="text/plain">
                        </script>

                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container');
                                ue.ready(function() {
                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
                            });
                        </script>
                    <label></label>
                        <script id="container_2" name="content" type="text/plain">
                        </script>

                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container_2');
                                ue.ready(function() {
                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
                            });
                        </script>    
                    <label><input type="checkbox" name="has_first_part" value='1'>是否為進階頁面</label>
                    <hr />
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
                </form>
                <div class="panel-footer text-muted">
                    
                </div>
            </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection