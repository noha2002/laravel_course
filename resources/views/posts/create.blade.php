<h1>create new post</h1>

<form action="{{URL('post/insert')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="enter title"><br>
    <input type="text" name="body" placeholder="enter body"><br>
    <button type="submit">submit</button>
</form>
