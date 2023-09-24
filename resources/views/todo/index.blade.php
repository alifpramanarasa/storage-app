<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
            <th>Created At</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td> {{ $todo->id }} </td>
            <td> {{$todo->title}} </td>
            <td> {{ $todo->description}} </td>
            <td> {{ $todo->completed == 1 ? "COMPLETED" : "NOT COMPLETED" }} </td>
            <td> {{ $todo->created_at }} </td>
        </tr>
        @endforeach
        <!-- <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr> -->
    </table>

</body>

</html>