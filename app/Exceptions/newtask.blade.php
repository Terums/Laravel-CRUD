<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Create New Task </h1>
    <form method="post" action="{{route('task.store')}}">
        @csrf
        @method('post')
        <div>
        <label>Task</label>
            <input type="text" name="task" placeholder="Task"/>
        </div>
        <div>
        <label>Author</label>
            <input type="text" name="author" placeholder="Author"/>
        </div>
        <div>
            <input type="submit" value="Save Task" />
        </div>

    </form>
</body>
</html>