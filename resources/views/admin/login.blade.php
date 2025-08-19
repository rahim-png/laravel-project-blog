<p>i am from inside admin inside login</p>

<!--the condition to check all errors in up-->

@if ($errors->any())
@foreach ($errors->all() as $errors )
<div style="color:red">
    {{ $errors }}
</div>
@endforeach
@endif 


<div>
    <h2>add new user</h2>
    <form action="/add" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username">
           
        </div>
         <div class="input-wrapper">
            <input type="text" placeholder="Enter user email" name="email">
           
        </div>
         <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="city">
        </div>
        <div style="display: admin" class="">
             <H3>check box</H3>
             <input type="checkbox" name="skill[]" id="php" value="php">
             <label for="php">PHP</label>
             <input type="checkbox" name="skill[]" id="java" value="java">
             <label for="php">java</label>
             <input type="checkbox" name="skill[]" id="node" value="node">
             <label for="php">node</label>




        </div>
        <div class="input-wrapper">
            <button>add new user</button>
        </div>



    </form>
</div>

<style>
    input{
        border:black 2px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: green;
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        border:black 2px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: green;
    }
</style>