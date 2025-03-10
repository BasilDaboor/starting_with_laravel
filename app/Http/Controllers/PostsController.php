<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'React', 'posted_by' => 'Basil', 'created_at' => '2019-08-11'],
            ['id' => 2, 'title' => 'Vue', 'posted_by' => 'Ahmad', 'created_at' => '2016-07-21'],
            ['id' => 3, 'title' => 'Angular', 'posted_by' => 'Zaid', 'created_at' => '2021-09-22']
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }
    public function show($postId)
    {

        $allPosts = [
            [
                'id' => 1,
                'title' => 'React',
                'posted_by' => 'Basil',
                'created_at' => '2019-08-11',
                'description' => 'React is a JavaScript library for building user interfaces.',
                'email' => 'Basil@gmail.com'
            ],
            [
                'id' => 2,
                'title' => 'Vue',
                'posted_by' => 'Ahmad',
                'created_at' => '2016-07-21',
                'description' => 'Vue is a progressive framework for building user interfaces.',
                'email' => 'ahmad@gmail.com'
            ],
            [
                'id' => 3,
                'title' => 'Angular',
                'posted_by' => 'Zaid',
                'created_at' => '2021-09-22',
                'description' => 'Angular is a platform and framework for building single-page client applications using HTML and TypeScript.',
                'email' => 'Zaid@gmail.com'
            ]
        ];
        return view('posts.show', ['post' => $allPosts[$postId - 1]]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // get the user data
        // $data = $_POST;
        // return  $data;

        // get the user data with laravel
        // $data = request()->all();
        // @dd($data, $data->all());
        // return $data;


        $data = request()->all();

        // redirect to the index page
        return to_route('posts.index');
    }
    public function edit($postId)
    {
        $allPosts = [
            [
                'id' => 1,
                'title' => 'React',
                'posted_by' => 'Basil',
                'created_at' => '2019-08-11',
                'description' => 'React is a JavaScript library for building user interfaces.',
                'email' => 'Basil@gmail.com'
            ],
            [
                'id' => 2,
                'title' => 'Vue',
                'posted_by' => 'Ahmad',
                'created_at' => '2016-07-21',
                'description' => 'Vue is a progressive framework for building user interfaces.',
                'email' => 'ahmad@gmail.com'
            ],
            [
                'id' => 3,
                'title' => 'Angular',
                'posted_by' => 'Zaid',
                'created_at' => '2021-09-22',
                'description' => 'Angular is a platform and framework for building single-page client applications using HTML and TypeScript.',
                'email' => 'Zaid@gmail.com'
            ]
        ];
        return view('posts.edit', ['post' => $allPosts[$postId - 1]]);
    }
    public function update($postId)
    {
        // $data = request()->all();
        // return redirect()->route('posts.show', ['post' => $postId]);
        return "update post with id: $postId";
    }
}
