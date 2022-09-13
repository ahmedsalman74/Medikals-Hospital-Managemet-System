<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Setting the pages character encoding -->
    <meta charset="UTF-8">

    <!-- The meta viewport will scale my content to any device width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to my stylesheet -->
    <link rel="stylesheet" href="/css/dash.css">
    <title>Users</title>
</head>

<body>

    <div id="wrapper">
        <h1> Table of Users</h1>

        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th><span>ID</span></th>
                    <th><span>Name</span></th>
                    <th><span>Phone</span></th>
                    <th><span>Email</span></th>
                    <th><span>Address</span></th>
                    <th><span>actions</span></th>
                   
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user )
            <tr >
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address}}</td>
                <td class="action-buttons">
                <form action="{{ route('cruduser.update',$user->id) }}"
                >
                        <button type="submit">update</button>
                    </form>


                    <form action="{{ route('Users.destroy',$user->id) }} " method="get">
                        @method('DELETE')
                        @csrf
                        <button type="submit">delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="Login.js"></script>
</body>

</html>