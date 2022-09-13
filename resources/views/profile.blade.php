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
    @if(session('user')->role==1) <div class="container">
        <div class="center" style="margin-top: 150px; margin-bottom: 30px; text-align: center"> <a href="/admin">
                <h2>return to the Admin page</h2>
            </a> </div>
    </div> 
    
    
    @else

    @if($user->id!==session('user')->id)

    <div class="container">
        <div class="center" style="margin-top: 150px; margin-bottom: 30px; text-align: center">
            <h1>Sorry, you can't access this user.</h1>
            <br>
            <a href="/">
                <h2>return to the home page</h2>
            </a>
        </div>
    </div>

    @else




    <div class="banner">
        @if (session('loggedIn'))
        <div class="navbar">
            <img src="/image/logo.png" class="logo">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/doctors">Doctors</a></li>
                <li><a href="/service">Services</a></li>
                <li><a style="text-transform: capitalize" href="{{ route('index',session('user')->id)}}">{{session('user')->name}}</a></li>‏
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

        <!-- <br> -->
        <div class="ContainerDiv">
            <fieldset class="fieldDiv">
                <legend><img src="https://i0.wp.com/researchictafrica.net/wp/wp-content/uploads/2016/10/default-profile-pic.jpg?ssl=1" class="img-circle" style="justify-content: center;" height=160 width=160></legend>
                <h3 id="h3">Personal Details:</h3> <br><br><br>
                <span class="span">ID: </span> <span class="span"> {{ $user->id }} </span> <br><br><br>
                <span class="span">Name: </span> <span class="span">{{ $user->name }}</span> <br><br><br>
                <span class="span">Email: </span> <span class="span">{{ $user->email}}</span> <br><br><br>
                <span class="span">Phone: </span> <span class="span">0{{ $user->phone }}</span><br><br><br>
                <span class="span">Address: </span> <span class="span">{{ $user->address }}</span> <br><br><br>

                <div>
                    <br>
                    <form action="{{ route('update',session('user')->id) }}">
                        @csrf
                        <br>
                        <button style="margin: 0px 10%;" type="submit">Update</button>
                    </form>
                </div>
            </fieldset>





            @if( is_null($app_id))
            <div class="port">
                <h1 style="color: white; text-align:center;">There is no appointments</h1>
            </div>

            @else

            <div class="por">
                <h3>Appointments' details:</h3>
                @foreach ($apps as $app)
                <br>
                <div>

                    <div class="Scroller">

                        <table class="GeneratedTable">

                            <tbody>
                                <tr>
                                    <td> <span>Appointment ID : {{ $app->id }} </span></td>
                                    <td><span>Patient Name : {{ $app->pname }}
                                        </span><br></td>
                                </tr>
                                <tr>
                                    <td><span>Patient Phone : 0{{ $app->phone }} </span><br>
                                    </td>
                                    <td><span>Doctor : {{ $app->doctor->name }} </span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>Service : {{ $app->doctor->service->name}} </span><br>
                                    </td>
                                    <td><span>Date : {{ $app->date }} </span><br></td>
                                </tr>

                                <tr>
                                    <td><b style="font-size: 18px">Appointment's Total Price : &nbsp; {{ $app->doctor->service->price}} </b><br></td>
                                </tr>
                             </tbody>
                        </table>


                    </div>




                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @endif

       
        @endif
</body>

</html>