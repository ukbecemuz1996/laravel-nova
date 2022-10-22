<div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

    <div class="sidebar ps-lg-4">

        <div class="sidebar-item search-form">
            <h3 class="sidebar-title">Search</h3>
            <form action="" class="mt-3">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->

        <div class="sidebar-item categories">
            <h3 class="sidebar-title">Categories</h3>
            <ul class="mt-3">
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
            </ul>
        </div><!-- End sidebar categories-->

        <div class="sidebar-item recent-posts">
            <h3 class="sidebar-title">Recent Posts</h3>

            <div class="mt-3">

                @foreach ($recent_posts as $recent_post)
                    @if ($loop->first)
                        @php
                            $recent_post['first_item'] = true;
                        @endphp
                    @else
                        @php
                            $recent_post['first_item'] = false;
                        @endphp
                    @endif
                    @include('website-pages.blog.recent-post-item', $recent_post)
                @endforeach

            </div>

        </div><!-- End sidebar recent posts-->

        <div class="sidebar-item tags">
            <h3 class="sidebar-title">Tags</h3>
            <ul class="mt-3">
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
        </div><!-- End sidebar tags-->

    </div><!-- End Blog Sidebar -->

</div>
