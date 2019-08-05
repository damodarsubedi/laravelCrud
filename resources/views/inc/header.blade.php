<!DOCTYPE html>
<html>
<head>
	<title>Laravel Crud Application</title>
	<link rel="stylesheet" type="text/css" href="{{(url('css/bootstrap.css'))}}">
	<link rel="stylesheet" type="text/css" href="{{(url('css/style.css'))}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CRUD Application</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('/create')}}">Add</a>
      </li>
    </ul>
  </div>
</nav>