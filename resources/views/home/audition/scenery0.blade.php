@extends('home.layouts.base')

@section('content')
<div id="mjtt-content">
    <div id="main-body">
        @include('home.layouts.banner')
        <div class="middle">
            @include('home.layouts.edition')
        </div>
        <div class="bottom bg-bright-grey padding-top-50 padding-bottom-50 ">
            @include('home.layouts.choice')
            <div>
                <div class="container font-color-silver-grey line-height-50 margin-top-20 margin-bottom-20 padding-left-50 padding-right-50">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 text-algin-right">
                            <input type="checkbox" name="id_array" class="checkSingle" value="0" />
                        </div>
                        <div class="col-xs-11 col-sm-11 text-algin-center">
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="continent_0">请选择大洲</span> <img src="{{URL::asset('img/meijing_13.png')}}" class="height-28px" />
                                </a>
                                <ul class="dropdown-menu width-100">
                                    @if($common['cities'])
                                        @foreach($common['cities'] as $continent)
                                            <li><a href="javascript:" onclick="choiceContinent(0,'{{$continent['id']}}','{{$continent['name']}}')">{{$continent['name']}}</a></li>
                                        @endforeach
                                    @else
                                        <li>请选择大洲</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="country_0">请选择国家</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="countries-content-0">
                                    <li class="padding-left-10">请选择国家</li>
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="city_0">请选择城市</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="cities-content-0">
                                    <li class="padding-left-10">请选择城市</li>
                                </ul>
                            </div>
                            <input id="item_id_0" type="hidden" />
                            <div class="col-xs-3 col-sm-3 text-algin-center bg-red border-top border-bottom border-red font-color-white font-size-16" style="line-height: 53px;">
                                <a href="javascript:" onclick="submitSingle(0)">
                                    立刻生成
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container font-color-silver-grey line-height-50 margin-top-20 margin-bottom-20 padding-left-50 padding-right-50">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 text-algin-right">
                            <input type="checkbox" name="id_array" class="checkSingle" value="1" />
                        </div>
                        <div class="col-xs-11 col-sm-11 text-algin-center">
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="continent_1">请选择大洲</span> <img src="{{URL::asset('img/meijing_13.png')}}" class="height-28px" />
                                </a>
                                <ul class="dropdown-menu width-100">
                                    @if($common['cities'])
                                        @foreach($common['cities'] as $continent)
                                            <li><a href="javascript:" onclick="choiceContinent(1,'{{$continent['id']}}','{{$continent['name']}}')">{{$continent['name']}}</a></li>
                                        @endforeach
                                    @else
                                        <li>请选择大洲</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="country_1">请选择国家</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="countries-content-1">
                                    <li class="padding-left-10">请选择国家</li>
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="city_1">请选择城市</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="cities-content-1">
                                    <li class="padding-left-10">请选择城市</li>
                                </ul>
                            </div>
                            <input id="item_id_1" type="hidden" />
                            <div class="col-xs-3 col-sm-3 text-algin-center bg-red border-top border-bottom border-red font-color-white font-size-16" style="line-height: 53px;">
                                <a href="javascript:" onclick="submitSingle(1)">
                                    立刻生成
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container font-color-silver-grey line-height-50 margin-top-20 margin-bottom-20 padding-left-50 padding-right-50">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 text-algin-right">
                            <input type="checkbox" name="id_array" class="checkSingle" value="2" />
                        </div>
                        <div class="col-xs-11 col-sm-11 text-algin-center">
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="continent_2">请选择大洲</span> <img src="{{URL::asset('img/meijing_13.png')}}" class="height-28px" />
                                </a>
                                <ul class="dropdown-menu width-100">
                                    @if($common['cities'])
                                        @foreach($common['cities'] as $continent)
                                            <li><a href="javascript:" onclick="choiceContinent(2,'{{$continent['id']}}','{{$continent['name']}}')">{{$continent['name']}}</a></li>
                                        @endforeach
                                    @else
                                        <li>请选择大洲</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="country_2">请选择国家</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="countries-content-2">
                                    <li class="padding-left-10">请选择国家</li>
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="city_2">请选择城市</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="cities-content-2">
                                    <li class="padding-left-10">请选择城市</li>
                                </ul>
                            </div>
                            <input id="item_id_2" type="hidden" />
                            <div class="col-xs-3 col-sm-3 text-algin-center bg-red border-top border-bottom border-red font-color-white font-size-16" style="line-height: 53px;">
                                <a href="javascript:" onclick="submitSingle(2)">
                                    立刻生成
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container font-color-silver-grey line-height-50 margin-top-20 margin-bottom-20 padding-left-50 padding-right-50">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 text-algin-right">
                            <input type="checkbox" name="id_array" class="checkSingle" value="3" />
                        </div>
                        <div class="col-xs-11 col-sm-11 text-algin-center">
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="continent_3">请选择大洲</span> <img src="{{URL::asset('img/meijing_13.png')}}" class="height-28px" />
                                </a>
                                <ul class="dropdown-menu width-100">
                                    @if($common['cities'])
                                        @foreach($common['cities'] as $continent)
                                            <li><a href="javascript:" onclick="choiceContinent(3,'{{$continent['id']}}','{{$continent['name']}}')">{{$continent['name']}}</a></li>
                                        @endforeach
                                    @else
                                        <li>请选择大洲</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="country_3">请选择国家</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="countries-content-3">
                                    <li class="padding-left-10">请选择国家</li>
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="city_3">请选择城市</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="cities-content-3">
                                    <li class="padding-left-10">请选择城市</li>
                                </ul>
                            </div>
                            <input id="item_id_3" type="hidden" />
                            <div class="col-xs-3 col-sm-3 text-algin-center bg-red border-top border-bottom border-red font-color-white font-size-16" style="line-height: 53px;">
                                <a href="javascript:" onclick="submitSingle(3)">
                                    立刻生成
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container font-color-silver-grey line-height-50 margin-top-20 margin-bottom-20 padding-left-50 padding-right-50">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 text-algin-right">
                            <input type="checkbox" name="id_array" class="checkSingle" value="4" />
                        </div>
                        <div class="col-xs-11 col-sm-11 text-algin-center">
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="continent_4">请选择大洲</span> <img src="{{URL::asset('img/meijing_13.png')}}" class="height-28px" />
                                </a>
                                <ul class="dropdown-menu width-100">
                                    @if($common['cities'])
                                        @foreach($common['cities'] as $continent)
                                            <li><a href="javascript:" onclick="choiceContinent(4,'{{$continent['id']}}','{{$continent['name']}}')">{{$continent['name']}}</a></li>
                                        @endforeach
                                    @else
                                        <li>请选择大洲</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="country_4">请选择国家</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="countries-content-4">
                                    <li class="padding-left-10">请选择国家</li>
                                </ul>
                            </div>
                            <div class="col-xs-3 col-sm-3 text-algin-center border-top border-bottom border-left">
                                <a href="#" class="dropdown-toggle font-color-black line-height-50 font-size-16" style="text-decoration:none;color:#000;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="city_4">请选择城市</span> <img src="{{URL::asset('img/meijing_13.png')}}" />
                                </a>
                                <ul class="dropdown-menu width-100" id="cities-content-4">
                                    <li class="padding-left-10">请选择城市</li>
                                </ul>
                            </div>
                            <input id="item_id_4" type="hidden" />
                            <div class="col-xs-3 col-sm-3 text-algin-center bg-red border-top border-bottom border-red font-color-white font-size-16" style="line-height: 53px;">
                                <a href="javascript:" onclick="submitSingle(4)">
                                    立刻生成
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="package-card container padding-left-50 padding-right-50 font-size-18">
                <div class="card-div height-60px line-height-60 text-center">
                    <div class="col-xs-1 col-sm-1 text-algin-left">
                        <input type="checkbox" class="checkAll" id="checkall" />
                    </div>
                    <div class="col-xs-11 col-sm-11 padding-0">
                        <div class="col-xs-9 col-sm-9 text-algin-left padding-left-0">
                            全选
                        </div>
                        <div class="col-xs-3 col-sm-3 text-algin-center bg-red border-top border-bottom border-red font-color-white font-size-16" style="line-height: 56px;">
                            <a href="javascript:" onclick="submitAll()" id="submitAll">
                                批量生成
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id="countries-content-template" type="text/x-dot-template">
        <li><a href="javascript:" onclick="choiceCities('@{{=it.index}}','@{{=it.id}}','@{{=it.continent_id}}','@{{=it.name}}')">@{{=it.name}}</a></li>
    </script>
    <script id="cities-content-template" type="text/x-dot-template">
        <li><a href="javascript:" onclick="determineCity('@{{=it.index}}','@{{=it.id}}','@{{=it.name}}')">@{{=it.name}}</a></li>
    </script>
</div>
<div id="mjtt-pay" hidden>
    <div id="main-body">
        <div class="container package-card padding-top-150 padding-bottom-150">
            <div class="card-div row border-radius-10px margin-left-10 margin-right-10">
                <div class="height-50px line-height-50 bg-grey-white">
                    <div class="col-xs-8 col-sm-8">订单提交成功，请尽快付款</div>
                    <div class="col-xs-4 col-sm-4 text-right">应付金额<span class="font-color-red margin-left-10 margin-right-10 font-size-18" id="payPrice">50</span>元</div>
                </div>
                <div>
                    <div class="col-xs-6 col-sm-6 padding-top-40 padding-bottom-40 padding-right-50 padding-left-50" id="payInfo">
                        <h4>订单号 :<span id="order">B2018010312301500001</span></h4>
                        <p>距离二维码过期还剩<span class="font-color-red margin-left-10 margin-right-10 font-size-18" id="time">45</span>秒，过期后请刷新页面重新获取二维码</p>
                        <p class="text-algin-center margin-top-40 margin-bottom-40">
                            <div class="width-200px height-200px bg-light-grey margin-auto" id="qrcode"></div>
                        </p>
                        <h4 class="text-algin-center">立即支付扫码</h4>
                    </div>
                    <div class="col-xs-6 col-sm-6 margin-top-70 margin-bottom-70  text-center">
                        <img src="{{URL::asset('img/pay_ts.png')}}"  class="height-50" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        function choiceContinent(index,continent_id,continent_name){
            $('#continent_'+index).text(continent_name)
            var param={
                continent_id:continent_id,
                _token: "{{ csrf_token() }}"
            }
            getCountries('{{URL::asset('')}}', param, function (ret) {
                if (ret.result == true) {
                    var data=ret.ret
                    $('#countries-content-'+index).html('');
                    for(var i=0;i<data.length;i++){
                        data[i]['index']=index
                        data[i]['continent_id']=continent_id
                        var interText = doT.template($("#countries-content-template").text())
                        $("#countries-content-"+index).append(interText(data[i]))
                    }
                } else {
                    console.log('getCountry err is :' +JSON.stringify(ret.message))
                }
            })
        }
        function choiceCities(index,country_id,continent_id,country_name){
            $('#country_'+index).text(country_name)
            var param={
                country_id:country_id,
                continent_id:continent_id,
                _token: "{{ csrf_token() }}"
            }
            getCities('{{URL::asset('')}}', param, function (ret) {
                if (ret.result == true) {
                    var data=ret.ret
                    $('#cities-content-'+index).html('');
                    for(var i=0;i<data.length;i++){
                        data[i]['index']=index
                        var interText = doT.template($("#cities-content-template").text())
                        $("#cities-content-"+index).append(interText(data[i]))
                    }
                } else {
                    console.log('getCountry err is :' +JSON.stringify(ret.message))
                }
            })
        }
        function determineCity(index,city_id,city_name){
            $('#city_'+index).text(city_name)
            $('#item_id_'+index).val(city_id)
        }
        //全选
        $(".checkAll").click(function () {
            if ($(this).is(":checked") == true) {
                $("input[class=checkSingle]").each(function (h) {
                    $(this).prop("checked",true);
                });
            }else {
                $("input[class=checkSingle]").each(function (h) {
                    $(this).prop("checked",false);
                });
            }
        });
        //选中一行
        var checknum = 5;
        $(".checkSingle").click(function () {
            if ($(this).is(":checked") == true) {
                if($(".checkSingle:checked").length == checknum){
                    $(".checkAll").prop("checked",true);
                }else{
                    $(".checkAll").prop("checked",false);
                }

            }else {
                if($(".checkSingle:checked").length == checknum){
                    $(".checkAll").prop("checked",true);
                }else{
                    $(".checkAll").prop("checked",false);
                }
            }
        });
        function submitSingle(index){
            var item_id=$('#item_id_'+index).val();
            if(item_id){
                var array=new Array();
                array.push(item_id);
                console.log("array is : "+JSON.stringify(array))
                var param={
                    version: '{{$mjtt['code']}}',
                    cities: array,
                    _token: "{{ csrf_token() }}"
                }
                var pay_price=parseInt('{{$mjtt['price']}}');
                submitDo(pay_price,param);
            }
            else{
                layer.msg('请选择城市', {icon: 2, time: 2000})
            }
        }
        function submitAll(){
            if($(".checkSingle:checked").length >0){
                var str=''
                var count=0
                $("input:checkbox[name='id_array']:checked").each(function() {
                    var index=$(this).val();
                    var item_id=$('#item_id_'+index).val()
                    if(item_id){
                        count++
                        var city=$('#city_'+index).text();
                        str+='<div class="col-xs-3 col-sm-3">'+city+'</div>'
                    }
                });
                if(count==$(".checkSingle:checked").length){
                    var price=parseInt('{{$mjtt['price']}}')
                    $('#price').text(count*price)
                    $('#payPrice').text(payPrice);
                    $('#submitAll').attr('data-toggle','modal')
                    $('#submitAll').attr('data-target','#myModal')
                    $('#city_names').html(str)
                }
                else{
                    layer.msg('请选择城市', {icon: 2, time: 2000})
                }
            }
            else{
                layer.msg('请选择要生成的城市', {icon: 2, time: 2000})
            }
        }
        $("#submitPayInfo").click(function(){
            var array=new Array();
            $("input:checkbox[name='id_array']:checked").each(function() {
                var index=$(this).val();
                var item_id=$('#item_id_'+index).val()
                array.push(item_id);
            });
            var param={
                version: '{{$mjtt['code']}}',
                cities: array,
                _token: "{{ csrf_token() }}"
            }
            var count=$(".checkSingle:checked").length;
            var price=parseInt('{{$mjtt['price']}}');
            var pay_price=count*price
            submitDo(pay_price,param);
        })
        function submitDo(price,param){
            prepay('{{URL::asset('')}}', param, function (ret) {
                console.log("prepay is : "+JSON.stringify(ret))
                if (ret.result == true) {
                    $('#mjtt-content').hide();
                    $('#mjtt-pay').show();
                    $('#order').text(ret.ret.data.out_trade_no);
                    $('#payPrice').text(price);
                    $('#qrcode').html('<img src="'+ret.ret.data.qrcode_img_url+'" class="width-100" />');
                    CountDown()
                    $('#dismiss_modal').trigger('click');
                } else {
                    layer.msg(ret.ret, {icon: 2, time: 2000})
                }
            })
        }

        //倒计时
        var setTime;
        function CountDown(){
            var time=parseInt($("#time").text());
            setTime=setInterval(function(){
                if(time<=0){
                    $('#payInfo').html('<h4>支付二维码已过期，请重新生成！</h4>')
                    return;
                }
                time--;
                $("#time").text(time);
            },1000);
        }
    </script>
@endsection