<x-layouts.app></x-layouts.app>
   
<h1 style="color: blue;">{{ $post->title;}}</h1>

<h2 style="color: blue;">{{ $post->body; }}</h2>

<h1>Formulario de Edicion</h1>



<form action="{{ route('posts.update',$post); }}" method="POST">
    @csrf @method('PATCH')


    @include('posts.form-fields');


    
    <button type="submit">Enviar</button>
</form>

<a href="{{ route('posts.index'); }} "> Regresar </a>
 



