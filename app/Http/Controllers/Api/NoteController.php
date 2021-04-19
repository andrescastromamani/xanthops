<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Resources\Note as NoteResources;
use App\Http\Requests\Note as NoteRequests;
use App\Http\Resources\NoteCollection;

class NoteController extends Controller
{
    protected $note;
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            new NoteCollection(
                $this->note->orderBy('id','desc')->get()
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequests $request)
    {
        $note = $this->note->create($request->all());
        return response()->json(new NoteResources($note),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return response()->json(new NoteResources($note));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(NoteRequests $request, Note $note)
    {
        $note->update($request->all());
        return response()->json(new NoteResources($note));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return response()->json(null,204);
    }
}
