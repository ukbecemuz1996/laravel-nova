<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

    <div class="row gy-5 posts-list">

        @each('website-pages.blog.post-item', $posts, 'post')

    </div><!-- End blog posts list -->

    <div class="blog-pagination">
        <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </div><!-- End blog pagination -->

</div>
