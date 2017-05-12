

<div class="row">
<<<<<<< HEAD
    <div class="layoutInstMenu hidden-xs" >
        <div class="instMenuWrapper container hidden-xs" ng-cloak>
            <div class="row" >
                <table class="instMenuLeft">
                    <tr>
                        @foreach($links['type1'] as $link)
                            @include('partials.link-item', ['link' => $link, 'slug' => $data->slug])
                        @endforeach
                     </tr>
                </table>
                <a href="{{ route('get_slug', $data->slug) }}" class="instMenuLogo md-whiteframe-1dp hidden-sm hidden-xs">
=======
    <div class="layoutInstMenu hidden-xs">
        <div class="instMenuWrapper container hidden-xs">
            <div class="row">
                <table class="instMenuLeft">
                     <tr>
                         @if($data->type == 0)          {{-- menu for default object type --}}
                             <th><md-button ng-href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_videos', $data->slug) }}">{{ trans('common.video') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_promo', $data->slug) }}">{{ trans('common.promo') }}</md-button></th>
                         @elseif($data->type == 1)      {{-- menu for photographers --}}
                             <th><md-button ng-href="{{ route('get_galleries',  $data->slug) }}">{{ trans('common.photo') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_videos', $data->slug) }}">{{ trans('common.video') }}</md-button></th>
                             <th><md-button ng-href="{{ route('get_menu', $data->slug) }}">{{ trans('common.services') }}</md-button></th>
                         @endif
                     </tr>
                </table>
                <a href="{{$data->slug}}" class="instMenuLogo md-whiteframe-1dp hidden-sm hidden-xs">
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                        <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                </a>
             
                <table class="instMenuRight">
                    <tr>
<<<<<<< HEAD
                        @foreach($links['type2'] as $link)
                            @include('partials.link-item', ['link' => $link, 'slug' => $data->slug])
                        @endforeach
=======
                        @if($data->type == 0)       {{-- menu for default object type --}}
                            <th><md-button @if (count($data->hallplan) == 0) class="disabled" ng-href="" @else ng-href="{{ route('get_plan', $data->slug) }}" @endif >{{ trans('common.plan') }}</md-button></th>
                            <th><md-button @if (count($data->menu) == 0) class="disabled" ng-href="" @else  ng-href="{{ route('get_menu', $data->slug) }}" @endif>{{ trans('common.menu') }}</md-button></th>
                            <th><md-button ng-href="{{ route('get_reservation',$data->slug) }}">{{ trans('common.reservation')}}</md-button>
                        @elseif($data->type == 1)   {{-- menu for photographers --}}
                            <th><md-button ng-href="{{ route('get_menu', $data->slug) }}">{{ trans('common.prices') }}</md-button></th>
                            <th><md-button ng-href="{{ route('get_promo', $data->slug) }}">{{ trans('common.promo') }}</md-button></th>
                            <th>
                                <md-button ng-disabled="true" class="disabled" ng-href="{{ route('index') }}">{{ trans('common.calendar') }}
                                    <md-tooltip md-direction="bottom" md-delay="100">
                                        {{ trans('common.in_developing') }}
                                    </md-tooltip>
                                </md-button>
                            </th>
                        @endif
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
@section('scripts')
    <script>
        jQuery(function($){
            $('.instMenuWrapper a.md-button').filter(function(){
                return $(this).attr('href').toLowerCase() === window.location.pathname.toLowerCase();
            }).addClass('active');
        });
    </script>
@stop

@section('styles')
=======
@section('styleTopMenuPage')
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
<style>
    
/*----------------------------NEW TOPMENU PAGE-----------------------------*/

.layoutInstMenu { width: 100%; height: 105px; display: block; overflow: hidden; z-index: 3; position: relative;}

.page-on-scroll .layoutInstMenu { position: initial; }

.instMenuWrapper { display: block; float: left; height: 40px; background-color: white; position:relative; border-bottom: 1px solid #bcadae; border-top: 1px solid #bcadae;}

.page-on-scroll .instMenuWrapper { position: fixed; top: 40px; z-index: 9 }

<<<<<<< HEAD
.instMenuWrapper > div > a { /*left: 50%; width: 160px; overflow: hidden; height: 100px; top: -1px; background-color: white; position: absolute; -webkit-border-bottom-left-radius: 65px; border-bottom-left-radius: 65px; border-bottom-right-radius: 65px;    border: 1px solid #b9b9b9;  transform: translate3d(-50%,0,0);*/ width: 160px;overflow: hidden;height: 100px;top: -1px;background-color: white;position: absolute;-webkit-border-bottom-left-radius: 65px;border-bottom-left-radius: 65px;border-bottom-right-radius: 65px;border: 1px solid #b9b9b9;margin: auto;position: absolute;left: 0;right: 0;}

.instMenuWrapper > div > a > img { /*max-width: 110px; max-height: 70px; position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-54%,0); */max-width: 110px; max-height: 70px; margin: auto;position: absolute;top: 0;left: 0;bottom: 0;right: 0;}
=======
.instMenuWrapper > div > a { left: 50%; width: 160px; overflow: hidden; height: 100px; top: -1px; background-color: white; position: absolute; -webkit-border-bottom-left-radius: 65px; border-bottom-left-radius: 65px; border-bottom-right-radius: 65px;    border: 1px solid #b9b9b9;  transform: translate3d(-50%,0,0); }

.instMenuWrapper > div > a > img { max-width: 110px; max-height: 70px; position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-54%,0); }
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c

.instMenuWrapper > div > table:first-child { float: left; }

.instMenuWrapper > div > table:last-child { float: right; }

.instMenuWrapper table { width: 505px }

.instMenuWrapper table th { text-align: center; height: 38px; font-weight: normal; text-transform: uppercase;}

.instMenuWrapper table th a {color:grey; height: 100%; width: 100%; display: block; margin: 0; border-radius: 0; font-size: 13px; font-weight: normal;letter-spacing: 0.5px; }

.instMenuWrapper table th a:hover {background-color: rgba(227, 96, 91, 0.71) !important; color: white; box-shadow: 0 1px 5px 0 rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.12); }

<<<<<<< HEAD
.instMenuWrapper table th a.active{background-color: rgba(227, 96, 91, 0.71) !important; color: white; box-shadow: 0 1px 5px 0 rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.12); }

=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
.instMenuWrapper table th a.md-button .md-ripple-container { border-radius: 0 }

.instMenuWrapper table th{ border-left: 1px solid #b9b9b9; }

<<<<<<< HEAD
.instMenuWrapper table th a.disabled { text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); background-color: rgba(0, 0, 0, 0.09); box-shadow: none; color: rgba(0, 0, 0, 0.45); cursor: default;}
=======
.instMenuWrapper table th a.disabled { text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); background-color: rgba(0, 0, 0, 0.09); box-shadow: none; color: rgba(0, 0, 0, 0.45);}
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c

.instMenuWrapper table th a.disabled:hover { background-color: rgba(0, 0, 0, 0.09) !important; color: rgba(0,0,0,0.45); }

.instMenuWrapper table th:first-child { border-left: none }
 
 @media ( min-width: 992px ) and ( max-width: 1199px ){
    .instMenuWrapper table{ width: 405px; }
 }

@media ( min-width: 768px ) and ( max-width: 991px ){
    .instMenuWrapper table { width: 50%; }

    .instMenuWrapper table:last-child th:first-child{     border-left: 1px solid #b9b9b9; }
    .layoutInstMenu  {height:40px; margin-bottom: 20px; }
}

@media (max-width: 767px) { 
    .layoutInstMenu { height: 0px; }
}
/*----------------------------END TOPMENU PAGE-----------------------------*/

</style>
@stop