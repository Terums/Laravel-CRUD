<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
    <h1>Task</h1>
    <div>
        <table border="1"><!-- TABLE DESIGN-->
            <tr>
                <th>ID</th>
                <th>TASK</th>
                <th>AUTHOR</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($task as $tasks )<!-- loop it to shows all task in db-->
                <tr>
                    <td>{{$tasks->id}}</td>
                    <td>{{$tasks->task}}</td>
                    <td>{{$tasks->author}}</td>
                    <td> 
                        <a href="{{route('task.edit', ['tasks' => $tasks])}}">Edit</a><!-- route, a button that will use edit function in taskcontroller-->
                    </td>
                    <td> 
                        <form method="post" action="{{route('task.delete', ['tasks' => $tasks])}}"><!-- route, a button that will use delete function in taskcontroller-->
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('task.newtask')}}">Create New Task</a><!-- route, a button that will use create function in taskcontroller-->
        </div>
    </div>
</body>
</html>