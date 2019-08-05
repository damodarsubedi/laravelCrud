@include('inc.header')
  <div class="container">
    <div class='col-md-6'> 
        <form method="POST" action="{{url('/edit/'.$articles->id)}}">
           {{ csrf_field() }}
            <fieldset>
              <legend>Add Post Here</legend>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Title">
                <small id="emailHelp" class="form-text text-muted">Your title of post</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Body">
              </div>
              </fieldset>
              <button type="submit" class="btn btn-primary">Update</button>
            </fieldset>
          </form>
    </div>
  </div>
@include('inc.footer')