<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/Profile.css">


</head>

<body>

    <?php
    if(is_null($user))
    {
        header('location: /usererror');
      exit;
    }
    else {


    if ($user->id!==session('user')->id) {
      // redirect them to your desired location
      header('location: /usererror');
      exit;
    }
    }
    ?>





    <div class="banner">
        @if (session('loggedIn'))
        <div class="navbar">
            <img src="/image/logo.png" class="logo">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/doctors">Doctors</a></li>
                <li><a href="/service">Services</a></li>
                <li><a href="{{ route('index', session('user')->id) }}">{{ session('user')->name }}</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="/first">Contact</a></li>

            </ul>

        </div>
    @else
    <div class="navbar">
        <img src="/image/logo.png" class="logo">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/doctors">Doctors</a></li>
            <li><a href="/service">Services</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/first">Contact</a></li>

        </ul>

    </div>
     @endif

    <br>
    <div class="ContainerDiv">
        <fieldset class="fieldDiv">
            <legend><img
                    src="https://i0.wp.com/researchictafrica.net/wp/wp-content/uploads/2016/10/default-profile-pic.jpg?ssl=1"
                    class="img-circle" style="justify-content: center;" height=160 width=160></legend>
            <h3 id="h3">Personal Details:</h3> <br><br><br>
            <span class="span">ID: </span> <span class="span"> {{ $user->id }} </span> <br><br><br>
            <span class="span">Name: </span> <span class="span">{{ $user->name }}</span> <br><br><br>
            <span class="span">Email: </span> <span class="span">{{ $user->email }}</span> <br><br><br>
            <span class="span">Phone: </span> <span class="span">0{{ $user->phone }}</span><br><br><br>
            <span class="span">Address: </span> <span class="span">{{ $user->address}}</span> <br>
        </fieldset>
        <div style="height: 571px; overflow-x: hidden;" class="por">
            <h3>Update Your Profile</h3>
            <br>
            <div>
                <form method="post" action=" {{ route('saveupdate',$user->id ) }}">
                    @method('PUT')
                    @csrf
                    <br><br><br>



                    <table>

                        <tbody>
                            <tr>
                                <td style="padding-bottom: 18px;"><label for="name">User's Name: </label></td>
                                <td><input type="text" name="name" value="{{ $user->name }}"> <br><br></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 18px;"><label for="email">User's Email: </label></td>
                                <td><input type="email" name="email" value="{{ $user->email }}"><br><br></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 18px;"><label for="phone">User's Phone: </label></td>
                                <td> <input style="width:60px; display:inline-block; color:black;" class="form-control" placeholder="+20" readonly>
                                <input style="width:176px; display:inline-block; margin-left: 4px;" type="tel" name="phone" value="{{ $user->phone }}"><br><br></td>
                            </tr>
                            <tr>
                                <td style="padding-bottom: 18px;"><label for="address">User's Address: </label></td>
                                <td><input type="text" name="address" value="{{ $user->address }}"><br><br></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <button type="submit" name="save" action="">update your Profile</button>
                </form>

                <br>
            </div>
        </div>
    </div>

</body>

</html>