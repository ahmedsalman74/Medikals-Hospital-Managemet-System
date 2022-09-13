<!DOCTYPE html>
<html>




<head>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/update.css">

    <!-- Main css -->
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

</head>

<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Create Appointment</h2>
                        <form method="post" action="submit">

                            @csrf

                            <div class="form-group">
                                Service
                                <label for=" Service"><i class=""></i></label>
                                <select required id='sel_ser' name='sel_ser' class="form-select">
                                    <option value="" selected disabled>Select a Service</option>
                                    @foreach($specialtysData['data'] as $specialty)
                                    <option value='{{ $specialty->id }}'>{{ $specialty->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                Doctor
                                <label for="Doctor Name"><i class="zmdi zmdi-email"></i></label>
                                <select required id='sel_doc' name='DocID' class="form-select">
                                    <option value="" selected>Select a Doctor </option>
                                </select>

                                </select>
                            </div>
                            <div class="form-group">
                                User
                                <label for=" userid"><i class=""></i></label>
                                <select id='xd' name='userid' class="form-select" required>
                                    <option value="" selected disabled>Select a user</option>
                                    @foreach($users as $user)
                                    <option value='{{ $user->id }}'>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                Full name
                                <input type="text" name="pname" id="name" />
                            </div>
                            <div class="form-group">
                                phone number
                                <input type="phone" name="phone" id="phone" />
                            </div>
                            <div>
                                <label> </label>
                                Date
                                <input type="date" id="formdate" name="Date" required placeholder="date" class="date"> <br>
                                Time<input type="time" id="formtime" name="time" required placeholder=" time" required class="time">
                            </div>
                            <div>


                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="submit" class="form-submit" value="submit" />
                                </div>

                        </form>
                        @error('userid')<p class="error">{{$message}}</p>@enderror

                    </div>


                </div>
            </div>
        </section>

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
    <script type='text/javascript'>
      $(document).ready(function() {

        $('#sel_ser').change(function() {
          // Department id
          var id = $(this).val();

          // Empty the dropdown
          $('#sel_doc').find('option').not(':first').remove();

          // AJAX request
          $.ajax({
            url: '/appointments/create/doctors/'+id,
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

</body>








</html>