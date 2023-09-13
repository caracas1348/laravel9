<x-layouts.app></x-layouts.app>
   
<h1 style="color: blue;">{{ $post->title;}}</h1>

<h2 style="color: blue;">{{ $post->body; }}</h2>

<h1>Formulario de Edicion</h1>



<form action="{{ route('posts.update',$post); }}" method="POST">
    @csrf @method('PATCH')
    <label>
        Title
        <input name="title" type="text" value="{{ old('title', $post->title)}}">
        @error('title')
          <small style="color:red">{{ $message }}</small>
        @enderror
    </label><br/><br/>
    <label>
        Body
        <textarea name="body">{{ old('body', $post->body)}}</textarea>
        @error('body')
          <small style="color:red">{{ $message }}</small>
        @enderror
    </label><br/><br/>
    <button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index'); }} "> Regresar </a>
 



