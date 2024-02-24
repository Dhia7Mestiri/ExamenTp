<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="purple-gradient">
    
<div class="container">
<h1 class='h1 text-primary text-center'>Editer</h1>

<div class="row">
<div class="col-md-6 col-md-offset-3">
    <hr>
@if(Session::get('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
@if(Session::get('fail'))
<div class="alert alert-danger">
{{ Session::get('fail') }}
</div>
@endif
<form action="{{route('update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $info->id }}">
<div class="form-group text-info">
<label for="name"> Nom</label>
<input type="text" class="form-control" name="name"

placeholder="Entrez le nom" value="{{
$info->name }}">
@error('name') <span class="text-danger" >{{$message}} </span>

@enderror
</div>
<div class="form-group text-info">
<label for="prenom"> Prénom</label>
<input type="text" class="form-control" name="prenom"

placeholder="Entrez le prénom" value="{{
$info->prenom }}">
@error('prenom') <span class="text-danger" >{{$message}} </span>

@enderror
</div>
<div class="form-group text-info">
<label for="biographie"> Biographie</label>
<input type="text" class="form-control" name="biographie"

placeholder="Entrez la biographie" value="{{
$info->biographie }}">
@error('biographie') <span class="text-danger" >{{$message}} </span>

@enderror
</div>
<div class="form-group text-info">
<label for="commentaire"> Commentaire</label>
<input type="text" class="form-control" name="commentaire"

placeholder="Entrez un commentaire" value="{{
$info->commentaire }}">
@error('commentaire') <span class="text-danger" >{{$message}} </span>

@enderror

</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-black"
>UPDATE </button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>