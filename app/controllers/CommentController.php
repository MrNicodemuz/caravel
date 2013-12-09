<?php

class CommentController extends BaseController {

    public function createComment()
    {
        $input = Input::all();
        $comment = new Comment;
        $comment->content = $input['content'];
        $comment->userid = Auth::user()->id;
        $comment->photoid = $input['photoid'];
        $comment->datetime = date("Y-m-d H:i:s");
        $comment->save();

        return Redirect::to('car/'.$input['photoid']);
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return Redirect::back();
    }
}