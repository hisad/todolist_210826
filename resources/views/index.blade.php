<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Todo List</title>
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <form method="post" action="{{ route('todo.create') }}">
            @csrf
            <label for="">
                <input type="text" name="content">
            </label>
        <button>追加</button>
        </form>

        <table>
            <tr>
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
        @foreach($todos as $todo)
            <tr>
                <td>
                    {{ $todo->created_at }}
                </td>
                    <form method="post" action="{{ route('todo.update', $todo->id) }}">
                        @csrf
                        <td>
                            <input type="text" name="content{{  $todo->id }}" value="{{ $todo->content }}">
                        </td>
                        <td>
                            <input type="submit">
                        </td>
                    </form>
                <td>
                    <form method="post" action="{{ route('todo.delete', $todo->id) }}">
                        @csrf
                        <button>削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    </div>

<script>

</script>
</body>
</html>
