<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function add(Request $request, $card_id) {
        $comment_text = $request->input('comment_text');

        $comment = new Comment();
        $comment->card_id = $card_id;
        $comment->comment_text = $comment_text;
        $comment->save();

        return response()->json($comment, 200);
    }
}
