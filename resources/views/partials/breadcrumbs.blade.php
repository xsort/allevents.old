<div class="layout-breadcrumbs" itemscope itemtype="http://schema.org/ItemList">    <div class="container-fluid">            <div class="container-breadcrumbs md-whiteframe-1dp">            <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">            <meta itemprop="itemListOrder" content="http://schema.org/ItemListOrderDescending"/>                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="{{ route('index') }}">{{ trans('common.mainpage') }}</a></li>                @if (isset($data->parents{0}))                    <li><a href="{{ route('get_slug', $data->parents{0}->slug) }}" itemprop="url">{{ $data->parents{0}->name }}</a></li>                @endif                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="{{ route('get_slug', $data->slug) }}" itemprop="url">{{ $data->name }}</a></li>                @foreach($breadcrumbs as $b)                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">                    @if(isset($b['href']))<a href="{{ $b['href'] }}">@endif                        {{ $b['title'] }}                    @if(isset($b['href']))</a> @endif                </li>                @endforeach            </ol>        </div>           </div></div>