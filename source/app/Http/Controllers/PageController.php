<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;
use App\Models\Page;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    /**
     * Display the main page with latest posts
     */
    public function index(): View
    {
        $posts = Post::latest()->get();
        return view('frontend.main', compact('posts'));
    }

    /**
     * Display all posts
     */
    public function post(): View
    {
        $posts = Post::latest()->get();
        return view('frontend.page.post', compact('posts'));
    }

    /**
     * Display a specific post
     */
    public function postDetail(Post $post): View
    {
        $posts = Post::latest()->get();
        return view('frontend.page.postDetail', compact('post', 'posts'));
    }

    /**
     * Display a specific page
     */
    public function pageDetail(Page $page): View
    {
        $pages = Page::latest()->get();
        return view('frontend.page.pageDetail', compact('page', 'pages'));
    }

    /**
     * Display the contact page
     */
    public function contactUs(): View
    {
        $page = 'Contact Us';
        $pages = Page::latest()->get();

        return view('frontend.page.contact', compact('page', 'pages'));
    }

    /**
     * Display the test mail view
     */
    public function test_view(): View
    {
        return view('frontend.mail.contact_mail');
    }
}
