@include('partials.header')
<table class="table table-success table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Title</th>
      <th scope="col">Total Pages</th>
      <th scope="col">Rating</th>
      <th scope="col">ISBN</th>
      <th scope="col">Publish Date</th>
      
    </tr>
  </thead>
  <tbody>
    
  @foreach ($books as $book)
  
    <tr>

      <td>{{$book->id}}</td>
      <td>{{$book->title}}</td>
      <td>{{$book->totalPages}}</td>
      <td>{{$book->rating}}</td>
      <td>{{$book->isbn}}</td>
      <td>{{$book->publishDate}}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-dark">Delete</button></td>
    </tr>
   
    @endforeach
    
  </tbody>
</table>
@include('partials.footer')