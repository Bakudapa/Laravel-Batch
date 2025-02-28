@extends('layouts.master')
@section('title')
    REGISTER
@endsection

@section('content')
<h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label for="first_name">First Name:</label><br><br>
        <input id="first_name" type="text" name="first_name"><br><br>

        <label for="last_name">Last Name:</label><br><br>
        <input id="last_name" type="text" name="last_name"><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br>
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" name="language[]" value="English"> English<br>
        <input type="checkbox" name="language[]" value="Other"> Other<br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Sign Up">
    </form>
@endsection
<!--
<!DOCTYPE html>
<html>
<head>
    <title>Register - SanberBook</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label for="first_name">First Name:</label><br><br>
        <input id="first_name" type="text" name="first_name"><br><br>

        <label for="last_name">Last Name:</label><br><br>
        <input id="last_name" type="text" name="last_name"><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br>
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" name="language[]" value="English"> English<br>
        <input type="checkbox" name="language[]" value="Other"> Other<br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
!-->
