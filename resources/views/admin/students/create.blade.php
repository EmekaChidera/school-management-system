@extends("layouts.app")
@section('content')
<center>
<form method="post">
        {{csrf_field()}}
        <input type="text" name="surname" placeholder="Surname"><br>
        <input type="text" name="firstname" placeholder="First Name"><br>
        <input type="text" name="middlename" placeholder="middle name"><br>
        Address <textarea  name="address"></textarea><br>
        <input type="text" name="nationality" placeholder="Nationality"><br>
        <input type="text" name="religion" placeholder="Religion"><br>
        <input type="Number" name="contact" placeholder="Contact"><br>
        <input type="date" name="dob" placeholder="Dob" title="date of birth"><br>
        Male<input type="radio" name="gender" value="male">
        female<input type="radio" name="gender" value="female"><br>
        <input type="text" name="blood" placeholder="Blood group"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="state" placeholder="State"><br>
        <input type="text" name="country" placeholder="Country"><br>
        

        <input type="submit" name="submit">     

        
</form>
</center>
@endsection