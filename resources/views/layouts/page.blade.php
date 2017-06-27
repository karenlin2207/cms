<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/jquery.sidr.dark.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="col-sm-5">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img class="logo" src="/front/Header/Logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-7">
                <!-- Collapsed Hamburger -->
                    <div class="col-sm-12 text-right" id="phone">
                        <img src="/front/Header/Phone Icon.png">2780 0400  
                        <img src="/front/Header/Blue line.png">    
                        <img src="/front/Header/Whatsapp icon.png">
                        6444 4330
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="header_icon" href="{{ url('/about_us') }}">關於我們</a></li>
                            <li><a href="{{ url('/service') }}">商業債務催收</a></li>
                            <li><a href="{{ url('/handle') }}">糾紛處理</a></li>
                            <li><a href="{{ url('/professional') }}">專業調解</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
    <div class="app"  style="background-color: #f5f8fa;">
        @yield('content_second')
    </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left pull-left">
                    <a href="{{ url('/statement') }}">免責政策  </a>|
                    <a href="{{ url('/policy') }}">  私隱政策  </a>|
                    <a href="{{ url('/about_us') }}">  聯絡資料</a>
                </div>
                <div class="col-md-6 text-right pull-right">
                    &copy; 2017 {{ config('app.name', 'Laravel') }} 
                </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <div id="ad_banner">
            </div>

            <div id="display_form" v-click-outside="notshow" class="free_button">
                <img v-on:click="show" src="/front/Form/Free Re icon.png">
                
                <div v-if="display" id="form">
                    <form class="form" action="/send_mail" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" v-model="name" class="form-control" placeholder="公司名稱 *" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" v-model="contact_person" class="form-control" placeholder="聯 絡 人 *" name="contact_person" required>
                        </div>
                        <div class="form-group">
                            <input type="text" v-model="contact_phone" class="form-control" placeholder="連絡電話 *" name="contact_phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" v-model="email" class="form-control" placeholder="電郵地址" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" v-model="form_message" placeholder="留言內容" name="form_message"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="pull-left">
                                <input type="checkbox" v-model="is_agreement" name="is_agreement" value="true" required>
                                本人已詳閱本網站所記載之有關個人資料(私隱)<br>
                                條例政策及聲明與及申請人聲明上之每項條文，<br>
                                同時本人對該聲明沒有任何異議並同意作實
                            </div>
                            <div class="col-sm-2">
                                <input type="button" @click="submit_form" id="form_submit" value="發送">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>你的個人資料絕對保密，只供本公司與閣下聯絡之用。</label>
                        </div>
                </div>
            </div>
            <div style="height: 80px">
            </div>
            <script src="https://unpkg.com/vue/dist/vue.js"></script>
            <script>
                var display_form = new Vue({
                      el: '#display_form',
                      data: {
                        display: false,
                        name: '',
                        contact_person: '',
                        contact_phone: '',
                        email: '',
                        form_message: '',
                        is_agreement: ''
                      },
                      methods:{
                        show: function(){
                            this.display = true;
                        },
                        notshow: function(){
                            this.display = false;
                        },
                        submit_form: function(){
                            var post_ary = { name:this.name, contact_person:this.contact_person, 
                                            contact_phone:this.contact_phone, email:this.email,
                                            form_message:this.form_message, is_agreement:this.is_agreement};
                            if (post_ary.is_agreement){
                                $.post('/api/send_mail', post_ary, function(data){
                                    alert("訊息已成功送出");
                                });
                            }
                        }
                      },
                      directives: {
                        'click-outside': {
                            bind: function(el, binding) {
                            // Define Handler and cache it on the element
                            const bubble = binding.modifiers.bubble
                            const handler = (e) => {
                              if (bubble || (!el.contains(e.target) && el !== e.target)) {
                                binding.value(e)
                              }
                            }
                            el.__vueClickOutside__ = handler

                            // add Event Listeners
                            document.addEventListener('click', handler)
                                }
                            }
                        }
                    });
            </script>
            <script type="text/javascript" src="http://www.qconcept.com.hk/web_ad/banner.js"></script>
            <script>
            var isMobile = false;
            $().ready(function(){
                if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){
                    isMobile = true;
                }
                
                init_ad_banner({
                    "location"          : "#ad_banner",
                    "image_width"       : (isMobile)? 320 : 800,
                    "image_height"      : (isMobile)? 41 : 90,
                    "image_margin"      : (isMobile)? "3px 0px 0px" : "3px 10px 0px",
                    "width"             : (isMobile)? 320 : 1024,
                    "height"            : (isMobile)? 116 : 145,
                    "padding-top"       : (isMobile)? 6 : 20,
                    "padding-right"     : (isMobile)? 0 : 17,
                    "padding-bottom"    : (isMobile)? 2 : 10,       
                    "padding-left"      : (isMobile)? 0 : 17,
                    "ad_d_padding-left" : (isMobile)? 0 : 11,
                    "logo_span_id_width": (isMobile)? 320 : 162,
                    "spacing_height"    : 0,
                    "spacing_bg_color"  : "#000000",
                    "image"             : new Array(
                        new Array("http://www.qconcept.com.hk/web_ad/images/800px_x_90px_Qconcept.png", "http://www.qconcept.com.hk/", "QConcept Limited", "_blank"),
                        new Array("http://www.qconcept.com.hk/web_ad/images/800px_x_90px_Ad_Here.png", "http://www.qconcept.com.hk/", "QConcept Limited", "_blank")
                    )
                });
            });
            </script>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
