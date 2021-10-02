<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <td>Id</td>
            <td>Details</td>
            <td colspan=-"2">Action</td>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->detail}}</td>
            <td><button>Edit</button></td>
            <td></td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="/add_todo"><button>Add todo</button></a>
</div>

<form method="post" action="{{url('delete-todo/'.$todo->id)}}"  >
  @csrf
  <button class="btn btn-danger" >Delete </button>
</form>
@if (session('success'))
<div style="background: blue;">
{{
    session('success')
}}
@endif
</div>
</body>
</html>