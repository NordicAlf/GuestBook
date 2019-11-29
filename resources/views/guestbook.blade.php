@extends('layouts.main')

@section('content')

    <div class="main">
        <form class="form" action="#" method="POST">
            <div class="textForm">Name</div>
            <input class="inputText" type="text" name="name">

            <div class="textForm">Email</div>
            <input class="inputText" type="text" name="email">

            <div class="textForm">Message</div>
            <textarea class="inputBigText" name="text"></textarea>

            <button class="submit">Submit</button>
        </form>

        <div class="commentsContainer">
            <div class="comment">
                <p class="authorComment">Name, 25.11.2019 info@site.ru</p>
                <p class="messageComment">Text message...</p>
                <div class="lineComment"></div>
            </div>

            <div class="comment">
                <p class="authorComment">Name, 25.11.2019 info@site.ru</p>
                <p class="messageComment">Text message...</p>
                <div class="lineComment"></div>
            </div>
        </div>
    </div>

@endsection