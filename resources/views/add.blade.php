@extends('layouts.app')  <!-- // Este comando adicionara um navbar padrão do laravel para sua página  -->


@section('content')  <!-- Abaixo deve por todo conteúdo do body-->

<div class="container">
                <h2>Add New Task</h2>
               
<form method="POST" action="/task">

    <div class="form-group">
        <textarea name="description" class="form-control"></textarea>  
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Task</button>
    </div>
{{ csrf_field() }}
</form>


</div>


@endsection  <!-- // como próprio nome diz, aqui acaba a sessão do body-->