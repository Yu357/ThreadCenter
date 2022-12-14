<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $thread->title }} - Thread Center</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/thread_page.css">
</head>

<body>

    <div class="root">
        <x-header />

        <main>
            <div class="large-container">

                <!-- Add Comment Modal -->
                <div class="modal-shadow" id="modalShadow"></div>
                <div class="modal" id="modal">
                    <h3>New comment</h3>
                    <form action="{{ route('createComment') }}" method="post">
                        @csrf
                        <input type="hidden" name="threadId" value="{{ $thread->id }}" />
                        <input value="Display name" name="displayName" id="displayNameInput" type="hidden"/>
                        <textarea placeholder="Text" name="text" rows="5" id="textInput"></textarea>

                        <div class="button-container">
                            <button type="submit" id="submitButton" disabled>Add</button>
                        </div>
                    </form>
                </div>

                <!-- Title Bar -->
                <div class="title-bar">
                    <h2>{{ $thread->title }}</h2>

                    <div>
                        @auth
                        <button id="openButton">New Comment</button>
                        @endauth
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comment-container">
                    @foreach($comments as $comment)
                    <div class="comment">
                        <p>
                            <span class="display-name">{{ $comment->user->name}}</span>
                            <span class="created-at">{{ $comment->created_at}}</span>
                        </p>
                        <p>{!! nl2br(e($comment->text)) !!}</p>
                    </div>
                    @endforeach

                    @if (count($comments) === 0)
                    <p class="no-content-text">There is no comments yet</p>
                    @endif
                </div>
            </div>
        </main>

        <x-footer />

    </div>

    <script src="../scripts/Script.js"></script>
    <script src="../scripts/CheckCommentValues.js"></script>
</body>

</html>