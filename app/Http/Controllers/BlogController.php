<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    protected $posts = [
        [
            'id' => 1,
            'img' => 'assets/img/blog/blog-1.jpg',
            'title' => 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'writer' => 'John Doe',
            'date' => 'Jan 1, 2022',
            'short_description' => 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.',
            'className' => 'col-lg-6',
        ],
        [
            'id' => 2,
            'img' => 'assets/img/blog/blog-2.jpg',
            'title' => 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'writer' => 'John Doe',
            'date' => 'Jan 1, 2022',
            'short_description' => 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.',
            'className' => 'col-lg-6',
        ],
        [
            'id' => 3,
            'img' => 'assets/img/blog/blog-3.jpg',
            'title' => 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'writer' => 'John Doe',
            'date' => 'Jan 1, 2022',
            'short_description' => 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.',
            'className' => 'col-lg-6',
        ],
        [
            'id' => 4,
            'img' => 'assets/img/blog/blog-4.jpg',
            'title' => 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'writer' => 'John Doe',
            'date' => 'Jan 1, 2022',
            'short_description' => 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.',
            'className' => 'col-lg-6',
        ],
        [
            'id' => 5,
            'img' => 'assets/img/blog/blog-5.jpg',
            'title' => 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'writer' => 'John Doe',
            'date' => 'Jan 1, 2022',
            'short_description' => 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.',
            'className' => 'col-lg-6',
        ],
        [
            'id' => 6,
            'img' => 'assets/img/blog/blog-6.jpg',
            'title' => 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'writer' => 'John Doe',
            'date' => 'Jan 1, 2022',
            'short_description' => 'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium.
            Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.',
            'className' => 'col-lg-6',
        ],
    ];

    protected $recent_posts = [
        [
            'id' => 7,
            'title' => 'Nihil blanditiis at in nihil autem',
            'img' => 'assets/img/blog/blog-recent-1.jpg',
            'date' => 'Jan 1, 2020',
        ],
        [
            'id' => 8,
            'title' => 'Nihil blanditiis at in nihil autem',
            'img' => 'assets/img/blog/blog-recent-2.jpg',
            'date' => 'Jan 1, 2020',
        ],
        [
            'id' => 9,
            'title' => 'Nihil blanditiis at in nihil autem',
            'img' => 'assets/img/blog/blog-recent-3.jpg',
            'date' => 'Jan 1, 2020',
        ],
        [
            'id' => 10,
            'title' => 'Nihil blanditiis at in nihil autem',
            'img' => 'assets/img/blog/blog-recent-4.jpg',
            'date' => 'Jan 1, 2020',
        ],
        [
            'id' => 11,
            'title' => 'Nihil blanditiis at in nihil autem',
            'img' => 'assets/img/blog/blog-recent-5.jpg',
            'date' => 'Jan 1, 2020',
        ],
    ];
    public function index()
    {
        return view('website-pages.blog.index', [
            'posts' => $this->posts,
            'recent_posts' => $this->recent_posts,
            'sub_title' => null,
        ]);
    }

    public function read($id)
    {
        return view('website-pages.blog-details.index', ['recent_posts' => $this->recent_posts]);
    }

    public function category($id)
    {
        return view('website-pages.blog.index', [
            'sub_title' => 'Category : Lifestyle',
            'posts' => $this->posts,
            'recent_posts' => $this->recent_posts,
        ]);
    }

    public function tag($id)
    {
        return view('website-pages.blog.index', [
            'sub_title' => 'Tag : App',
            'posts' => $this->posts,
            'recent_posts' => $this->recent_posts,
        ]);
    }
}
