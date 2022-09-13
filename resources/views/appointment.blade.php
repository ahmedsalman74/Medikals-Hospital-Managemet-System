<!DOCTYPE html>
<html>




<head>
  <title>Appointment</title>
  <link rel=" stylesheet" href="/css/master.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

</head>

<body>
  @if(session('user')->role==1) <div class="container">
    <div class="center" style="margin-top: 150px; margin-bottom: 30px; text-align: center"> <a href="/admin">
        <h2>return to the Admin page</h2>
      </a> </div>
  </div>

  
  @else
  <div class="banner">
    @if(session('loggedIn'))
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
    <div class="allcontainer">

      <div class="container">
        <h1> Make An Appointment Now </h1>
        <br>


        <form method="post" action="/appointment" id="appoinment_form">
          @csrf
          <div>

            <select required id='sel_ser' name='sel_ser' class="form-select">
              <option value="" selected disabled>Select a Service</option>
              @foreach($specialtysData['data'] as $specialty)
              <option value='{{ $specialty->id }}'>{{ $specialty->name }}</option>
              @endforeach
            </select>







            <label for="Doctor Name"></label>
            <select required id='sel_doc' name='DocID' class="form-select">
              <option value="" selected>Select a Doctor </option>
            </select>




            </select>





          </div>
          <div>
            <label> </label>
            <input style="display: none;" type="number" name="PID" value="{{session('user')->id}}">
            <input type="text" name="Pname" required placeholder="FullName"> <input type="number" name="phone" required placeholder="Your phone">
          </div>

          <div>
            <label> </label>
            <input type="date" id="formdate" name="date" required placeholder="date" class="date"> <input type="time" name="time" id="formtime" required placeholder=" time" required class="time">
          </div>
          <div>

            <textarea style="height: 10em;" name="message" placeholder=" Message" class="message"></textarea>
          </div>

          <div>
            <button type="submit" value="Make Appointment"><span></span>Make Appointment</button></a>


          </div>
        </form>
      </div>
    </div>







    <script>
      var date = new Date();

      var day = date.getDate() + 1,
        month = date.getMonth() + 1,
        year = date.getFullYear(),
        hour = date.getHours(),
        min = date.getMinutes();

      month = (month < 10 ? "0" : "") + month;
      day = (day < 10 ? "0" : "") + day;
      hour = (hour < 10 ? "0" : "") + hour;
      min = (min < 10 ? "0" : "") + min;

      var today = year + "-" + month + "-" + day,
        displayTime = hour + ":" + min;

      document.getElementById('formdate').value = today;
      document.getElementById("formtime").value = displayTime;

      document.getElementById('formdate').setAttribute("min", today);
      document.getElementById('formtime').setAttribute("min", displayTime);
    </script>








<script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
</script>


    <script type='text/javascript'>
      $(document).ready(function() {

        $('#sel_ser').change(function() {
          // Department id
          var id = $(this).val();

          // Empty the dropdown
          $('#sel_doc').find('option').not(':first').remove();

          // AJAX request
          $.ajax({
            url: 'getDoctors/' + id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
              var len = 0;
              if (response['data'] != null) {
                len = response['data'].length;
              }

              if (len > 0) {
                // Read data and create <option >
                for (var i = 0; i < len; i++) {
                  var id = response['data'][i].id;
                  var name = response['data'][i].name;
                  var option = "<option value='" + id + "'>" + name + "</option>";
                  $("#sel_doc").append(option);
                }
              }
            }
          });
        });
      });
    </script>







    @endif

</body>

</html>