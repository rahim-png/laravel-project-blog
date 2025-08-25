<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>jason Page</h1>
    
        <h3>json table</h3>

    <table border="1">
        <tr>
            <td>userId</td>
            <td>id</td>
            <td>title</td>
            <td>body</td>
            
        </tr>
        @foreach ($a as $data)
        <tr>
            <td>{{ $data['userId'] }}</td>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['title'] }}</td>
            <td>{{ $data['body'] }}</td>
        </tr>
        @endforeach
    </table>
    
    
   

</div>
