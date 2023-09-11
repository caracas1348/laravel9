<x-layouts.app></x-layouts.app>

<h1>Create New Post</h1>

<form action="{{ route('posts.store'); }}" method="POST">
    @csrf
    <label>
        Title
        <input type="text">
    </label><br/><br/>
    <label>
        Body
        <textarea></textarea>
    </label><br/><br/>
    <button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index'); }} "> Regresar </a>
 



