<?php

namespace App\Http\Controllers;

use App\Comment;
use\App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function postComment(Request $request, $id)
    {
        $post_id = $id;
        $post = Post::find($id);
        $comment = new Comment();
        $comment->content = $request->content_cmt;
        $comment->post_id = $post_id;
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect("posts/$id/detail");
        //   return redirect("posts/$id/detail"); //
        //   return response()->json($comment); //
    }

    public function destroyComment($id)
    {
        $post_id = $id;
        $post = Post::find($id);
        $comment = Comment::findOrFail($post_id);
        $comment->delete();
        return redirect("posts/$id/detail");
    }

    public function editComment($id)
    {
        $comment = Comment::findOrFail($id);

    }

}
