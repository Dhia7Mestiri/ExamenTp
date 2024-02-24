
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <style>
        body{
            background-image: url('/guzel.jpg');
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>
<body>
    
<div class="container">
<h1 class='h1 text-center border border-dark'>Mon biliothèque</h1>

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
<form action='add' method='post'>
@csrf
<div class="form-group text-info ">
<label for="name"> LastName</label>
<input type="text" class="form-control " name="name"

placeholder="Entrez le nom" value="{{old('name')}}">
@error('name') <span class="text-danger" >{{$message}} </span>

@enderror
</div>
<div class="form-group text-info">
<label for="prenom"> Name</label>
<input type="text" class="form-control" name="prenom"

placeholder="Entrez le prénom" value="{{old('prenom')}}">
@error('prenom') <span class="text-danger" >{{$message}} </span>

@enderror
</div>
<div class="form-group text-info">
<label for="biographie"> Biography</label>
<input type="password" class="form-control" name="biographie"

placeholder="Entrez la biographie" value="{{old('biographie')}}">
@error('biographie') <span class="text-danger" >{{$message}} </span>

@enderror
</div>
<div class="form-group text-info">
<label for="commentaire"> Comment</label>
<input type="text" class="form-control" name="commentaire"

placeholder="Entrez un commentaire" value="{{old('commentaire')}}">
@error('commentaire') <span class="text-danger" >{{$message}} </span>

@enderror

</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-black"

name="email">SAVE </button>
</div>
</form>
<br>
</div>
</div>

<table class="table table-cover">
<thead>

<th class='text-warning'>Name</th>
<th class='text-warning'>Prenom</th>
<th class='text-warning'>Biographie</th>
<th class='text-warning'>Commentaire</th>
</thead>
<tbody>
@foreach($list as $item)
<tr>
<td >{{$item->name}}</td>
<td>{{$item->prenom}}</td>
<td>{{$item->biographie}}</td>
<td>{{$item->commentaire}}</td>
<td>
<div class="btn-group">
<a href="delete/{{ $item->id }}"class="btn btn-danger btn-xs">Effacer</a>
<a href="edit/{{ $item->id }}" class="btn btn-primary btn-xs">Editer</a>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<div class=" container embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://youtu.be/MN3x-kAbgFU?si=LzVKvspV88AWjL1U" allowfullscreen></iframe>
</div>
</body>
</html>