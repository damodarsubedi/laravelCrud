@include('inc.header')
    <div class="container">
        <div classs="row">
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($articles)>0)
                                @foreach($articles->all() as $article)
                                
                          <tr class="table-active">
                            <td>{{"$article->id"}}</td>
                            <td>{{"$article->title"}}</td>
                            <td>{{"$article->description"}}</td>
                            <td>
                                <a href ="{{url('/read/'.$article->id)}}" class="table-primary">Read</a>
                                <a href ="{{url('/update/'.$article->id)}}" class="table-success">edit</a>
                                <a href ="{{url('/delete/'.$article->id)}}" class="table-danger">delete</a>
                            </td>
                          </tr>
                            @endforeach
                          @endif
                        </tbody>
                      </table> 
        </div>
    </div>
@include('inc.footer')