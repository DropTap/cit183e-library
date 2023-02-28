@include('partials.header')
<table class="table table-success table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>

      <td>{{$user->id}}</td>
      <td>{{$user->firstName}}</td>
      <td>{{$user->lastName}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->contactNumber}}</td>
      <td>{{$user->address}}</td>
      <td><button type="button" class="btn btn-primary">Edit</bsutton></td>
      <td><button type="button" class="btn btn-dark">Delete</button></td>
    </tr>

    @endforeach

  </tbody>
</table>
@include('partials.footer')