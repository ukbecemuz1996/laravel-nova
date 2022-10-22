<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset($background_image) }}');">
    <div class="container position-relative d-flex flex-column align-items-center">

        <h2>{{ $title }}</h2>
        <ol>
            @foreach ($links as $link)
                @isset($link['url'])
                    <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
                @else
                    <li>{{ $link['title'] }}</li>
                @endisset
            @endforeach
        </ol>
        <h5 style="color: #fff">
            @isset($sub_title)
                {{ $sub_title }}
            @endisset
        </h5>
    </div>
</div><!-- End Breadcrumbs -->
