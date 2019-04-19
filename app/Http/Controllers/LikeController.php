<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use Auth;
use App\Post;

class LikeController extends Controller
{
    /**
     * Like the specified resource
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function like($type, $id)
    {
        // Is the like type a post?
        if ($type == 'post') {
            // If the user already liked this post, remove the like.
            if (Like::where('user_id', Auth::id())->where('post_id', $id)->count() >= 1) {
                // Remove the like
                return redirect()->route('activity.unlike', ['type' => $type, 'id' => $id]);
            } else {
                // The post wasn't already liked, so like the post.
                $like = Like::create(['user_id' => Auth::id(), 'post_id' => $id]);
            }
            // Is the like type a comment?
        } elseif ($type == 'comment') {
            // If the user already liked this post, remove the like.
            if (Like::where('user_id', Auth::id())->where('comment_id', $id)->count() >= 1) {
                // Remove the like
                return redirect()->route('activity.unlike', ['type' => $type, 'id' => $id]);
            } else {
                // The post wasn't already liked, so like the post.
                $like = Like::create(['user_id' => Auth::id(), 'comment_id' => $id]);
            }
        }
        return back();
    }

    /**
     * Unlike the specified resource
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function unlike($type, $id)
    {
        if ($type == 'post') {
            $like = Like::where('post_id', $id)->where('user_id', Auth::id());
            $like->delete();
        } elseif ($type == 'comment') {
            $like = Like::where('comment_id', $id)->where('user_id', Auth::id());
            $like->delete();
        }
        return back();
    }
}
