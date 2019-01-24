@extends('layouts.app')

@section('content')
<div class="container" style="background-color: rgb(149, 152, 157);">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>    
            </div>
            <div class="col-md-8 col-md-offset-2">
              
            </div>
            <div class="col-md-6 col-md-offset-6">
               <form style="border: 2px solid  background-color:#000000" method="post" action="submitpage.js">
                  <div>
                    <label>My Profile</label><br>
                    First Name:
                    <input type="text" name="first_name"><br>
                    Last Name:
                    <input type="text" name="last_name"><br>
                    Title:
                    <input type="text" name="Title"><br>
                    City:
                    <input type="text" name="city"><br>
                    Country:
                    <input type="text" name="country"><br>
                    Language:
                    <input type="text" name="language"><br>
                    Short Bio:
                    <textarea></textarea>
                  </div>

                  <div>
                    <label>Social Links</label><br>
                    Your Website:<br>
                    <input type="text" name="Your_Website"><br>
                    Facebook Profile:<br>
                    <input type="text" name="Facebook_Profile"><br>
                    Twitter Profile:<br>
                    <input type="text" name="Twitter_Profile"><br>
                    LinkedIn Profile:<br>
                    <input type="text" name="LinkedIn_Profile"><br>
                  </div>

                  <div>
                    <label>Date of Birth</label><br>
                    <input type="text" name="Date_of_Birth"><br>
                  </div>

                  <div>
                    <label>Industry</label><br>
                    <input type="text" name="Industry">
                  </div>

                    <input type="submit" name="Save" value="Save">
                    <input type="submit" name="Reset" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
