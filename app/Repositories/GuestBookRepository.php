<?php

namespace App\Repositories;

use App\Models\GuestBook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestBookRepository
{
    public function getComments()
    {
        $data = DB::table('guest_books')
            ->select('name', 'email', 'text', 'created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(4);

        return $data;
    }

    public function getData(Request $request)
    {
        $data = $request->all();

        return $data;
    }

    public function saveComment($comment)
    {
        $comment['created_at'] = $this->getTodayDate();
        $result = (new GuestBook())->create($comment);

        return $result;
    }

    private function getTodayDate()
    {
        $fullDateAndTime = new Carbon();
        $date =  $fullDateAndTime->format('d-m-Y');

        return $date;
    }
}