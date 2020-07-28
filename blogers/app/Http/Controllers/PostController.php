<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(2);
        return view('posts.list', compact('posts'));
    }

    public function detail($id)
    {
        $postKey = 'post_' . $id;
        if (!Session::has($postKey)) {
            Post::where('id', $id)->increment('view_count');
        }
        $post = Post::findOrFail($id);
        return view('posts.detail', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        if (!$request->hasFile('inputFile')) {
            $post->image = $request->inputFile;
        } else {
            $file = $request->file('inputFile');

            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng task với tên mới
            $post->image = $newFileName;
        }
        $post->description = $request->description;
        $post->content = $request->content_post;
        $post->user_id = Auth::id();
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        if (!$request->hasFile('inputFile')) {
            $post->image = $request->inputFile;
        } else {
            $file = $request->file('inputFile');

            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng task với tên mới
            $post->image = $newFileName;
        }
        $post->description = $request->description;
        $post->content = $request->content_post;
        $post->user_id = Auth::id();
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route('posts.detail',compact('id'));

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->comments()->delete();
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $posts = DB::table('posts')
            ->where('title', 'LIKE', '%' . $keyword . '%')
            ->latest()
            ->paginate(2);
        return view('posts.listSearch', compact('posts'));
    }
}
