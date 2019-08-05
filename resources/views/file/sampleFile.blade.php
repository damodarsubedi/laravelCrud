<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{(url('css/bootstrap.css'))}}">
</head>
<body>
<form action="{{url('/store')}}" method="post">
        <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="photo" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Please have you file above</small>
              </div>
              <button type="submit" value="Upload" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>