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

 <h3>students table</h3>
 <table border="1">
    <tr>
        <td>id</td>
        <td>Name</td>
        <td>email</td>
        <td>phone</td>
        <td>batch</td>
        
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->batch }}</td>
    </tr>
    @endforeach
 </table>

 <div>
    <pre>
        {{ print_r([$students ,$users]) }}
 </div>

</div>