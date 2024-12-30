<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @auth
    <p>congrats you are logged in.</p>
    <form action="/logout" method="POST">
     @csrf
     <button>Log out</button>
    </form>
    <div style="border: 3px solid black">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="post title">
            <textarea name="body" placeholder="body contenet ......"></textarea>
            <button>Save Post</button>
        </form>
    </div>

    <div style="border: 3px solid black">
     <h2>All Posts</h2>
     @foreach($posts as $post)
     <div style="background-color: gray; padding: 10px; margin: 10px;">
        <h3>{{$post['title']}}</h3>
        {{$post['body']}}
     </div>
    @endforeach
    </div>
    @else
    <div style="border: 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginname" placeholder="name">
            <input type="password" name="loginpassword" placeholder="password">
            <button>Log in </button>
        </form>
    </div>

    @endauth

  
</body>

</html>