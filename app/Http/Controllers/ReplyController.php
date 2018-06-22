<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestReply;
use App\Http\Resources\ReplyResource;
use App\Models\Question;
use App\Models\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReplyController extends Controller
{
    private $reply;

    public function __construct(Reply $reply)
    {
        $this->reply = $reply;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestReply $request)
    {
        $reply = $this->reply->create($request->all());
        return response(new ReplyResource($reply), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *gma
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        return new ReplyResource($reply);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(RequestReply $request, Question $question, Reply $reply)
    {
        $reply->update($request->all());
        return \response('Update', Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question, Reply $reply)
    {
        $reply->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
