<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TASK</title>
</head>
<body>
    <h1>Edit Task </h1>
    <div>
        <!-- for erorr handling -->
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('task.update', ['tasks' => $task])}}">
    <!--SECURITY REASONS --> 
        @csrf
        @method('put') <!-- Put method because it will add it to the db same on routing--> 
        <div>
        <label>Task</label>
            <input type="text" name="task" placeholder="Task" value="{{$task->task}}"/>
        </div>
        <div>
        <label>Author</label>
            <input type="text" name="author" placeholder="Author"value="{{$task->author}}"/>
        </div>
        <div>
            <input type="submit" value="Update Task" />
        </div>

    </form>
</body>
</html>