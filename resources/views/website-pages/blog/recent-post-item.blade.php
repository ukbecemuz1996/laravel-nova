<div @class(['post-item', 'mt-3' => $recent_post['first_item']])>
    <img src="{{ asset($recent_post['img']) }}" alt="" class="flex-shrink-0">
    <div>
        <h4><a href="/blog/{{ $recent_post['id'] }}">{{ $recent_post['title'] }}</a></h4>
        <time datetime="2020-01-01">{{ $recent_post['date'] }}</time>
    </div>
</div><!-- End recent post item-->
