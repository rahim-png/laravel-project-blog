
@if ($errors->any())
@foreach ($errors->all() as $errors )
<div style="color:red">
    {{ $errors }}
</div>
@endforeach
@endif 
<div>


    <form action="/Login" method="post">
        @csrf
        <h3>Login Form</h3>
        <br>
        <input type="text" name="user" placeholder="enter user name">
        <br>
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <br>
        <input type="submit" value="Login">
    </form>





</div>
