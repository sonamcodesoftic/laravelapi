
  @extends('layouts.app')

@section('content')
  
  <style>
      .tableborder
      {
          border:1px solid black;
      }
      th
      {
        padding:10px 30px 10px 30px;
      }
      td
      {
        padding:10px 30px 10px 30px ;
      }
      .update_Button
      {
         color:white!important;
        text-decoration:none!important;
      }
      .actions
      {
        text-align:center;
      }
  </style>  


  <div class="container mb-5">
    <div class="row">
      <div>
        <a href="addnewuser"><button class="btn btn-primary">Add User</button></a>
      </div>
    </div>
  </div>
    
  <div class="container">
      <table border="1">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>city</th>
            <th>State</th>
            <th>Country</th>
            <th>Pincode</th>
            <th>IP</th>
            <th>Browser</th>
            <th>device</th>
            <th>profile</th>
            <th>nationality</th>
            <th>gender</th>
            <th>date_of_birth</th>
            <th>userrole</th>
            <th>status</th>
            <th colspan="2" class="actions">Actions</th>
          </tr>
          <?php $count = "1";   ?>
          @foreach($user as $user)   
            <tr>
              <td>{{$count}}</td>
              <td>{{$user->fname}}</td>
              <td>{{$user->lname}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->city}}</td>
              <td>{{$user->state}}</td>
              <td>{{$user->country}}</td>
              <td>{{$user->pincode}}</td>
              <td>{{$user->ip}}</td>
              <td>{{$user->browser}}</td>
              <td>{{$user->device}}</td>
              <td>{{$user->profile}}</td>
              <td>{{$user->nationality}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->date_of_birth}}</td>
              <td>{{$user->userrole}}</td>
              <td>{{$user->status}}</td>
              

              <!-- <td><button class="btn btn-primary"><a href='update/{{$user->id}}'>update</a></button></td> -->
              <td><button class="btn btn-primary"><a class="update_Button" href='edit-user/{{$user->id}}'>update</a></button></td>
              <td><button class="btn btn-primary"><a class="update_Button" href=''>Delete</a></button></td>
            </tr>  
            <?php $count++;  ?>
          @endforeach
  
      </table>

     <!-- <nav aria-label="Page navigation example">
       <ul class="pagination">
          <li class="page-item"><a class="page-link" href="">Previous</a></li>
          <li class="page-item"><a class="page-link" href="">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
       </ul>
      </nav> -->
  </div>

  @endsection