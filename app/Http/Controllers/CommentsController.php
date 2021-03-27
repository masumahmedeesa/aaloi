<?php

namespace App\Http\Controllers;

use App\Farm;
use App\Comments;
use App\User;
use App\Replies;
use DB;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function index()
    {

      //$comments = Comments::orderBy('created_at', 'desc')->paginate(10);
      if(! (auth()->guard('admin')->check()) ){
          return redirect('/')-> with('error','Unauthorized Page');
      }
      $comments = DB :: table('comments')
                        -> join('users', 'users.id','comments.userId')
                        -> join('allFarms','allFarms.farmId','comments.farmId')
                        -> distinct()
                        -> selectRaw('comments.commentDesc, comments.id, comments.validity, allFarms.farmName, users.email')
                        -> paginate(10);

      return view('adminPanel.commentsView')->with('comments', $comments);

    }

    public function ownerIndex($id)
    {
        // This should be used as owner's commentsView
        if(! auth()->guard('owner')->check()){
            return redirect('/')-> with('error','Unauthorized Page');
        }
        $farm = Farm::find($id);
        $validate = "yes";
        $comments = DB :: table('comments')
                          -> join('users', 'users.id','comments.userId')
                          -> join('allFarms','allFarms.farmId','comments.farmId')
                          -> distinct()
                          -> selectRaw('comments.commentDesc, comments.id, comments.validity, allFarms.farmId, allFarms.farmName, users.email')
                          -> Where('comments.validity','like','%'.$validate.'%')
                          -> Where('allFarms.farmId',$id)
                          -> paginate(10);

        return view('adminPanel.commentsOwner')->with('comments', $comments)->with('farm',$farm);

    }
    public function userIndex()
    {
      if(! (auth()->guard()->check()) ){
          return redirect('/')-> with('error','Unauthorized Page');
      }

      $userId = auth()->user()->id;
      $userInfo = User::find($userId);
      $comments = DB :: table('comments')
                        -> join('allFarms','allFarms.farmId','comments.farmId')
                        -> distinct()
                        -> selectRaw('allFarms.farmName, comments.commentDesc, allFarms.farmId, comments.id')
                        -> Where('comments.userId', $userId)
                        // -> orderBy('created_at','ASC')
                        -> paginate(15);
      // dd($comments);
      return view('adminPanel.commentsUser')-> with('comments',$comments)
                                            -> with('userInfo',$userInfo);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
      $this->validate($request,[
          'commentDesc' => 'required'
      ]);

      $comment = new Comments;
      $comment->commentDesc = $request->input('commentDesc');
      $comment->validity = "NO";
      $comment->farmId = $request->input('farmId');
      $comment->userId = $request->input('userId');

      $routingMan = $request->input('farmId');

      $comment->save();

      return redirect("/farms/$routingMan")->with('success','Successfully Submitted Comment!');
    }


    public function show($id)
    {

    }

    public function showReplies($farmId, $id)
    {
        if(! auth()->guard('owner')->check()){
            return redirect('/')-> with('error','Unauthorized Page');
        }

        // $replies = Replies::orderBy('created_at', 'desc')->paginate(10);
        $replies = DB::table('replies')
                  -> Where('replies.commentId', $id)
                  -> Where('replies.farmId', $farmId)
                  -> orderBy('created_at','ASC')
                  -> paginate(10);
        // dd($replies);
        $comment = Comments::find($id);
        $farm = Farm::find($farmId);
        $userId = $comment->userId;
        $userInfo = User::find($userId);
        return view('adminPanel.replies') ->with('comment',$comment)
                                          ->with('farm',$farm)
                                          ->with('user',$userInfo)
                                          ->with('replies',$replies);
    }

    public function sendReplies(Request $request)
    {
      $this->validate($request,[
          'replyDesc' => 'required'
      ]);

      $reply = new Replies;
      $reply->replyDesc = $request->input('replyDesc');
      $reply->commentId = $request->input('commentId');
      $reply->farmId = $request->input('farmId');
      $reply->userId = $request->input('userId');

      $routingMan = $request->input('farmId');
      $cc = $request->input('commentId');

      $reply->save();

      return redirect("/whoOwnsFarm/replies/$routingMan/$cc")->with('success','Successfully Replied!');

    }

    public function userReplies($farmId, $id)
    {
      if(! auth()->guard()->check()){
          return redirect('/')-> with('error','Unauthorized Page');
      }

      $userId = auth()->user()->id;
      $replies = DB::table('replies')
                -> Where('replies.commentId', $id)
                -> Where('replies.farmId', $farmId)
                -> Where('replies.userId', $userId)
                -> orderBy('created_at','ASC')
                -> paginate(10);

      $comment = Comments::find($id);
      $farm = Farm::find($farmId);
      $userId = $comment->userId;
      $userInfo = User::find($userId);
      return view('adminPanel.userReplies')-> with('comment',$comment)
                                        ->with('farm',$farm)
                                        ->with('userInfo',$userInfo)
                                        ->with('replies',$replies);
    }


    public function edit(Comments $comments)
    {
        //
    }


    public function update(Request $request, $id)
    {
      $this->validate($request,[
          'validity' => 'required'
      ]);

      $comment = Comments::find($id);
      $comment->commentDesc = $comment->commentDesc;
      $comment->validity = $request->input('validity');
      $comment->farmId = $comment->farmId;
      $comment->userId = $comment->userId;

      $comment->save();

      return redirect("/comments")->with('success','Successfully Submitted Comment!');
    }


    public function destroy($id)
    {
      $comment = Comments::find($id);
      $farmId = $comment->farmId;
      $replies = DB::table('replies')
                -> Where('replies.commentId',$id)
                -> delete();
      // SAME as before
      // $replies = DB::delete('Delete from replies where replies.commentId = ?',[$id]);



      $comment->delete();

      if(auth()->guard('admin')->check()){
        return redirect("/comments")->with('success','Deleted Successfully !');
      } elseif (auth()->guard('owner')->check()) {
        return redirect("/whoOwnsFarm/comments/$farmId")->with('success','Deleted Successfully !');
      } else {
        return redirect("/comments")->with('success','Deleted Successfully !');
      }

    }
}
