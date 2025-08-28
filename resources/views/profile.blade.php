<div>
<h3>profile page</h3>
<p>user login succecefully</p>
<p>wellcome :{{ session('user') }}</p>
 @if(session('user'))
        <p>You are logged in as: {{ session('user') }}</p>
        
    @else
        <p>You are not logged in.</p>
        <a href="Login">login</a>
    @endif
    <a href="profile">logout</a>
</div>
