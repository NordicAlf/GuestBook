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
}
