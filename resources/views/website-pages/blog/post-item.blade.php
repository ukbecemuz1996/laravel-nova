<div class="{{ $post['className'] }}">
    <article class="d-flex flex-column">

        <div class="post-img">
            <img src="{{ asset($post['img']) }}" alt="" class="img-fluid">
        </div>

        <h2 class="title">
            <a href="/blog/{{ $post['id'] }}">{{ $post['title'] }}</a>
        </h2>

        <div class="meta-top">
            <ul>
                <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="/blog/{{ $post['id'] }}">{{ $post['writer'] }}</a>
                </li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                    <a href="/blog/{{ $post['id'] }}">
                        <time datetime="2022-01-01">{{ $post['date'] }}</time>
                    </a>
                </li>
                {{-- <li class="d-flex align-items-center">
                <i class="bi bi-chat-dots"></i>
                <a href="/blog/{{ $post['id'] }}">12 Comments</a>
            </li> --}}
            </ul>
        </div>

        <div class="content">
            <p>
                {{ $post['short_description'] }}
            </p>
        </div>

        <div class="read-more mt-auto align-self-end">
            <a href="/blog/{{ $post['id'] }}">Read More <i class="bi bi-arrow-right"></i></a>
        </div>

    </article>
</div>
