<!DOCTYPE html>
<html>
<title>Payment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: rgb(22, 18, 18);
    line-height: 1.0;
}
</style>
<body>
<body style="background-image:url('120.jpg')"></body>
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h1 class="w3-center" color="red">Payment System</h1>
  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
      </div>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
          ชื่อ
            <input class="w3-input w3-border"  placeholder="นายวีระพงษ์  จุลบท" required name="Name">
          </div>
          รหัส     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="NA0001" required name="Email">
          </div>
        </div>
        <br>
        อีเมล-เบอร์ติดต่อ         
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -318px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="tawatchai.in@rmuti.ac.th" required name="Name">
            <br>
            <input class="w3-input w3-border" type="text" placeholder="095-498-9846" required name="Name">
          </div>
          <br>
          <br>  
        </div>
        <br>
        เลือกธนาคารที่ต้องการชำระเงิน
          <select>
          <option value="ธนาคารกรุงไทย">---</option>
          <option value="ธนาคารกสิกร">ธนาคารกสิกร</option>
          <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
          </select>
        <br>
        <br>
        หมายเลขบัญชี
        <input class="w3-input w3-border" type="text" placeholder="กรอกหมายเลขบัญชี" required name="Message">
        <div class="w3-half">
        <br>
        <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
          รหัสพื้นที่
            <input class="w3-input w3-border"  placeholder="LC0047" required name="Name">
          </div>
          ชื่อพื้นที่     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="โซนที่ 15" required name="Email">
          </div>
        </div>
        <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
          ความกว้าง
            <input class="w3-input w3-border"  placeholder="5 เมตร" required name="Name">
          </div>
          ความยาว     
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="3 เมตร" required name="Email">
          </div><br>
        </div>
        จำนวนเงินที่ต้องชำระ
        <input class="w3-input w3-border" type="text" placeholder="3000 บาท" required name="Message">
        <div class="w3-half">
        <button class="w3-button w3-black w3-right w3-section" type="button" onclick="window.location='Receipt.php'"  type="submit"  >
          <i class="fa fa-paper-plane"></i> Payment
          
        </button>  
      </form>
    </div>
  </div>
</div>
<!-- Add Google Maps -->
<center>
<script>

}
</script>
</center>
</body>
</html>
