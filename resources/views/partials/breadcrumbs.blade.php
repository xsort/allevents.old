<div class="layout-breadcrumbs">    <div class="container-fluid">        <div class="container-breadcrumbs">            <ul class="breadcrumbs">                <li><a href="{{ route('index') }}">{{ trans('common.mainpage') }}</a></li>                @if (isset($data->parents{0}))                    <li><a href="{{ route('get_slug', $data->parents{0}->slug) }}">{{ $data->parents{0}->name }}</a></li>                @endif                <li><a href="{{ route('get_slug', $data->slug) }}">{{ $data->name }}</a></li>                @foreach($breadcrumbs as $b)                <li>                    @if(isset($b['href']))<a href="{{ $b['href'] }}">@endif                        {{ $b['title'] }}                    @if(isset($b['href']))</a> @endif                </li>                @endforeach            </ul>        </div>    </div></div>