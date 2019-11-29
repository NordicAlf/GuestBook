<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Repositories\GuestBookRepository;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    private $guestBookRepository;

    /**
     * connect to repositories
     */
    public function __construct()
    {
        $this->guestBookRepository = app(GuestBookRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = $this->guestBookRepository->getComments();

        return view('guestbook', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = $this->guestBookRepository->getData($request);

        $result = $this->guestBookRepository->saveComment($comment);

        if ($result) {
            return redirect()
                ->route('GuestBook.index')
                ->with(['success' => 'Success. Comment saved.']);
        } else {
            return back()
                ->with(['fail' => 'Fail. Comment unsaved.'])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
