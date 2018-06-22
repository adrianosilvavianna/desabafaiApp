<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
//            'user_id' => auth()->user()->id,
                'user_id' => '3'
        ]);
        return response('Created', Response::HTTP_CREATED);
    }

    public function unLikeIt(Reply $reply)
    {
//        $reply->like()->where(['user_id', auth()->user()->id])->first()->delete();
        $reply->like()->where('user_id', 3)->first()->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
