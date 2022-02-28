<html>
    <head>
    </head>
<body>
    @csrf
    @if(count($errors) >0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all as $error)
        
<li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
  
    @foreach ($users as $users)

    <h3>{{$users->name}}</h3>

    <h3>{{$users->address}}</h3>
        @endforeach
     
</body>
</html>