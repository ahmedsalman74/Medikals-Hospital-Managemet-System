<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
  // redirect them to your desired location
  header('location: /');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/style.css">
  <title>Confirmation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @media print {
      #print_Button {
        display: none;
      }

      #remake_Button {

        display: none;
      }

      #comfirm_Button {

        display: none;
      }
    }
  </style>
</head>

<body>

  <div class="container" id="print">
    <div class="title">Appointment Details</div>
    <div class="content">
      <form action="">
        <div class="user-details">
          <div class="input-box">

            <p class="details">Appointment ID</p>
            <label type="text">{{ $aps->id}}</label>
          </div>
          <div class="input-box">
            <p class="details">User ID</p>
            <label type="text">{{ $aps->userid}}</label>
          </div>
          <div class="input-box">
            <p class="details">Patient FullName</p>
            <label type="text">{{ $aps->pname}}</label>
          </div>

          <div class="input-box">
            <p class="details">Doctor Name </p>
            <label type="text">{{ $doc_name}}</label>
          </div>
          <div class="input-box">
            <p class="details">User's E-mail</p>
            <label type="text">{{ $aps->user->email}}</label>
          </div>
          <div class="input-box">
            <p class="details">Phone Number</p>
            <label type="text">{{ $aps->phone}}</label>
          </div>

          <div class="input-box">
            <p class="details">Doctor Specialty</p>
            <label type="text">{{ $aps->doctor->service->name}}</label>
          </div>
          <div class="input-box">
            <p class="details">Appointment Date</p>
            <label type="text">{{ $aps->date}}</label>
          </div>
          <br><br>
            <div class="input-box">
              <p style="font-family: 'Poppins';" class="details">-Your final charge is: <span>{{ $aps->doctor->service->price}} EGP </span></p>    
           </div>
        </div>

       

      </form>
      <div>

        <a href="/appointment">
          <form action="{{ route('destroy') }}" method='POST'>
            @method('DELETE')
            @csrf
            <button type="submit" id="remake_Button"><span class="buttonSpan"></span>Remake appointment</button>
          </form>
        </a>

        <a href="{{ route('index', session('user')->id) }}"> <button type="submit" id="comfirm_Button" value="submit"><span class="buttonSpan"></span>Continue</button></a>
        <a> <button id="print_Button" onclick="printDiv()"><span class="buttonSpan"></span>Print</button></a>

      </div>
      <br>
      

    </div>
  </div>

</body>



<script>
  history.pushState(null, null, '/');
  window.addEventListener('popstate', function() {
    history.pushState(null, null, '/');

  })
</script>

<script type="text/javascript">
  function printDiv() {
    var printContents = document.getElementById('print').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    
  }
</script>



</html>