@csrf
<div class="form-group">
    <label  for="titulo"> Titulo del Proyecto </label>
       <input class="form-control border-0 bg-light shadow-sm"
            type="text" name="title" placeholder="Titulo" 
             value="{{ old('title', $project->title ) }}">
</div>
<br>

<div class="form-group">
    <label for="url">Url del Proyecto </label>
    <input class="form-control border-0 bg-light shadow-sm"
            type="text" name="url"
            placeholder="Url" value="{{ old('url', $project->url ) }}">
</div>
<br>

<div class="form-group">
    <label for=""description> Descripción del Proyecto</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
          name="description" placeholder="Descrpción del proyecto" >{{ old('description', $project->description ) }}</textarea>
</div>
<br>

<div class="text-center btn-block">  
    <button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
</div>
<div class="text-center btn-block">  
    <a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
</div>