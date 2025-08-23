<div>
    <h1>Data Page</h1>
 <table border="1">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>email</td>
        <td>email_verified_at</td>
         <td>password</td>
        <td>password</td>
        <td>created_at</td>
        <td>updated_at</td>
        
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->email_verified_at }}</td>
         <td>{{ $user->password }}</td>
        <td>{{ $user->remember_token }}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>

    @endforeach
 </table>

</div>