 <!-- Font Icon -->
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

 <!-- Main css -->
 <link rel="stylesheet" href="/css/update.css">

 <!-- Main css -->
 <!-- <link rel="stylesheet" href="css/styles.css"> -->


<title>update user</title>
 <div class="main">

     <!-- Sign up form -->
     <section class="signup">
         <div class="container">
             <div class="signup-content">
                 <div class="signup-form">
                     <h2 class="form-title">Update Data</h2>
                     <form action="{{ route('cruduser.update',$users->id)}}" method="post">
                         @method('PUT')
                         @csrf

                         <div class="form-group">
                             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                             <input type="text" name="name" id="name" value="{{$users->name }}" />
                         </div>
                         <div class="form-group">
                             <label for="email"><i class="zmdi zmdi-email"></i></label>
                             <input type="text" name="email" value="{{$users->email }}">
                             @error('email')
                             <span>{{ $message }}</span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                             <input type="phone" name="phone" value="{{$users->phone }}">

                         </div>

                         <div class="form-group">
                             <label for="address"><i class="zmdi zmdi-account material-icons-address"></i></label>
                             <input type="text" name="address" id="name" value="{{$users->address }}" />
                         </div>

                         <div class="form-group form-button">
                             <input type="submit" name="signup" id="submit" class="form-submit" value="submit" />
                         </div>

                     </form>

                 </div>
                 <div class="signup-image">
                     <figure><img src="https://img.freepik.com/free-vector/flat-hand-drawn-patient-taking-medical-examination-illustration_23-2148859982.jpg?w=2000" alt="sing up image"></figure>

                 </div>

             </div>
         </div>
     </section>

 </div>