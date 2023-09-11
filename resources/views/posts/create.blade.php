<x-layouts.app></x-layouts.app>

<h1>Create New Post</h1>

<form action="{{ route('posts.store'); }}" method="POST">
    @csrf
    <label>
        Title
        <input name="title" type="text" value="{{ old('title')}}">
        @error('title')
          <small style="color:red">{{ $message }}</small>
        @enderror
    </label><br/><br/>
    <label>
        Body
        <textarea name="body">{{ old('body')}}</textarea>
        @error('body')
          <small style="color:red">{{ $message }}</small>
        @enderror
    </label><br/><br/>
    <button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index'); }} "> Regresar </a>
 



