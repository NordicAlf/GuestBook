@extends('layouts.main')

@section('content')

    <div class="main">
        <form class="form" action="{{ route('GuestBook.store') }}" method="POST">
            @csrf
            <div class="textForm">Name</div>
            <input class="inputText" type="text" name="name" required>

            <div class="textForm">Email</div>
            <input class="inputText" type="email" name="email" required>

            <div class="textForm">Message</div>
            <textarea class="inputBigText" name="text" required></textarea>

            <button class="submit">Submit</button>

            @if(session('success'))
                <p class="successMessageSaveComment">{{ session()->get('success') }}</p>
            @elseif(session('fail'))
                <p class="failedMessageSaveComment">{{ session()->get('fail') }}</p>
            @endif

        </form>

        <div class="commentsContainer">
            @foreach($comments as $comment)
                <div class="comment">
                    <p class="authorComment">{{ $comment->name }}, {{$comment->created_at}}, {{ $comment->email }}</p>
                    <p class="messageComment">{{ $comment->text }}</p>
                    <div class="lineComment"></div>
                </div>
            @endforeach

            {{--Pagination--}}
            {{ $comments->links() }}

        </div>
    </div>

@endsection