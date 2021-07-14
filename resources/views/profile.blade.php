
@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mt-5 mb-5 text-center">Your Profile</h2>
  <form action="/submitprofile/{{$user->id}}"   method="post">
  @csrf
  <input type="hidden" value="{{$user->id}}" name="student_id" />
   <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" value="{{$user->fname}}" />
    </div>
    <div class="form-group">
      <label for="text">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" value="<?php echo $user->lname; ?>" />
    </div>
    <div class="form-group">
      <label for="text">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $user->email; ?>" />
    </div>
    <div class="form-group">
      <label for="text">Phone</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone Number" name="phone" value="<?php echo $user->phone; ?>" />
    </div>
    <div class="form-group">
      <label for="text">city</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo $user->city; ?>" />
    </div>
    <div class="form-group">
      <label for="text">state</label>
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state" value="<?php echo $user->state; ?>" />
    </div>
    <div class="form-group">
      <label for="text">country</label>
      <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" value="<?php echo $user->country; ?>" />
    </div>
    <div class="form-group">
      <label for="text">pincode</label>
      <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode" value="<?php echo $user->pincode; ?>" />
    </div>
    <div class="form-group">
      <label for="text">nationality</label>
      <input type="text" class="form-control" id="nationality" placeholder="Enter nationality" name="nationality" value="<?php echo $user->nationality; ?>" />
    </div>
    <div class="form-group">
      <label for="text">date_of_birth</label>
      <input type="text" class="form-control" id="date_of_birth" placeholder="Enter date_of_birth" name="date_of_birth" value="<?php echo $user->date_of_birth; ?>" />
    </div>
    <div class="form-group">
      <label for="text">userrole</label>
      <input type="text" class="form-control" id="userrole" placeholder="Enter userrole" name="userrole" value="<?php echo $user->userrole; ?>" />
    </div>
    <div class="form-group">
      <label for="text">status</label>
      <input type="text" class="form-control" id="status" placeholder="Enter status" name="status" value="<?php echo $user->status; ?>" />
    </div>
    <div class="form-group">
      <label for="text">gender</label>
      <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" value="<?php echo $user->gender; ?>" />
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
</div>
@endsection
