<h1>edit post</h1>

<form action="{{URL('post/insert')}}" method="POST">
    @csrf
    <input type="text" name="title" value="{{$post->title}}"><br>
    <input type="text" name="body"  value="{{$post->body}}"><br>
    <button type="submit">submit</button>
</form>
