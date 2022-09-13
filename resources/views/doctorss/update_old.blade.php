 <!-- Font Icon -->
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

 <!-- Main css -->
 <link rel="stylesheet" href="/css/update.css">

 <!-- Main css -->
 <!-- <link rel="stylesheet" href="css/styles.css"> -->



 <div class="main">

     <!-- Sign up form -->
     <section class="signup">
         <div class="container">
             <div class="signup-content">
                 <div class="signup-form">
                     <h2 class="form-title">Update Data</h2>
                     <form action="{{ route('doctorss.edit',$doctors->id)}}" method="post">
                         @method('PUT')
                         @csrf

                         <div class="form-group">
                             <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                             <input type="text" name="name" id="name" value="{{$doctors->name }}" />
                         </div>
                         <div class="form-group">
                             <label for="email"><i class="zmdi zmdi-email"></i></label>
                             <input type="text" name="email" value="{{$doctors->email }}">
                             @error('email')
                             <span>{{ $message }}</span>
                             @enderror
                         </div>
                         

                         <select id='sel_ser' name='serid' class="form-select">
                             <option value='0'>Select a Service</option>
                             @foreach($services as $service)
                             <option value='{{ $service->id }}'>{{ $service->name }}</option>
                             @endforeach
                         </select>
                         </div>

                         <div class="form-group form-button">
                             <input type="submit" name="signup" id="submit" class="form-submit" value="submit" />
                         </div>

                     </form>

                 </div>
                
             </div>
         </div>
     </section>

 </div>