@extends('layouts.app')
@include('vendor.ueditor.assets')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="Compose-Message">               
            <div class="panel panel-success">
                <div class="panel-heading">
                    編輯
                </div>
                <form method="POST" action="/addmin/contents/{{$content->id}}" enctype="multipart/form-data"> 
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="panel-body">
                    <label>名稱 : </label>
                    <input type="text" class="form-control" name="title" value="{{empty(old('title'))?$content->title:old('title')}}" />
                    @if($content->has_first_part)
                    <label>頁面橫幅 :  <img src="{{$content->img_uri}}" style="width: 30px;"></label>
                    <input type="file" class="form-control" id="banner_file" name="banner_file" placeholder="上傳圖片">
                    @endif
                    <label>內容 : </label>
                    @if($content->has_first_part)
                        <script id="container" name="content_first" type="text/plain">
                        {!!$content->content_first!!}
                        </script>

                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container');
                                ue.ready(function() {
                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
                            });
                        </script>
                    <label></label>
                    @endif                    
                        <script id="container_2" name="content" type="text/plain">
                        {!!$content->content!!}
                        </script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container_2');
                                ue.ready(function() {
                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
                            });
                        </script>
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
@section('script')
@endsection