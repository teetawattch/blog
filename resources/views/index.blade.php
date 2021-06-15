@extends('master')

@section('meta')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keyword" content="HTML, CSS, Laravel">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>welcome</title>

        <style>
            *{
              font-family: 'Kanit', sans-serif; 
              font-size: 25px ;
            }
            .information {
              padding: 15% 0 15% 0 ;
              margin-left: 375px ; 
            }
            .information h1{
              margin-top:55px;
              font-size: 110px ;
              position: relative;
              color:#fff;
            }
            .information p {
              width:45%;
              font-size: 25px ;
              position: relative;
              color:#fff;
            }
            .register {
              margin: 150px 0 15px 375px ;
              padding: 15% 0 15% 0 ;
              
            }
            .register h1{
              margin-top: 55px ;
              font-size: 110px ;
            }
            .register p {
              width:45%;
              font-size: 25px ;
            }
            h1{
                padding:20px;
            }
            
            #hero {
              height: 800px;
              /* position: relative; */
            }
            .hero1{
              
              background-image:( #80b2dc);
              position: absolute;
              height:100%;
              width:99%;
              background: -webkit-linear-gradient( #365db8, #80b2dc); /* For Safari 5.1 to 6.0 */
              background: -o-linear-gradient(#365db8, #80b2dc); /* For Opera 11.1 to 12.0 */
              background: -moz-linear-gradient(#365db8, #80b2dc); /* For Firefox 3.6 to 15 */
              background: linear-gradient(#365db8, #80b2dc); /* Standard syntax (must be last) */
              opacity: 0.9;
              
            }
            .feature{
              background: lightgray ;
              padding: 15% 0 15% 0 ;
            }
            .feature-1 {
              display: grid;
              grid-template-columns: 1fr 1fr;
              height: 250px;
              align-content: center;
              grid-template-rows: 100px 100px;
              margin: 0 0 10% 23%;
              
            }
            .feature-1 p {
              width: 100%;
            }
           #navbar{
             width: 100% ;
             position: relative ;
             
           }
        </style>

@endsection


@section('navbar')

<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="150" height="95" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:100px; ">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#service">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#feature">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">CONTACT</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="#">
      <button class="btn btn-outline-primary" style=" border-radius: 25px;width:150px; type="submit">LOGIN</button>
    </form>
  </div>
</nav>
@endsection

@section('content')

<div id="hero" class="hero route bg-image" style="background-image: url(img/original.jpg);">
    <div class="hero1"></div>
    <div class="information"  id="about">
            <h1 >จองคลินิก</h1>
            <p>
                เว็บไชต์ที่เป็นตัวช่วยในการบริหารงานเกี่ยวกับคลินิกแบบครบวงจร 
                ฟังก์ชันอำนวยความสะดวกครบครัน ครบทุกส่วนงาน 
                โดยแบ่งการเข้าถึง 3 ระดับ คือ คลินิก แพทย์ และเคาน์เตอร์
            </p>
        </div>
  </div>
  
  <div class="register" id="service">
      <h1>จองคลินิก</h1>
      <p >
        ได้เริ่มพัฒนามาตั้งแต่ปี 2560 เป็นต้นมาซึ่งเป็นระบบการจัดการในคลินิก คือ Jong clinic website management 
        และได้ทำการพัฒนาควบคู่ไปกับ Jong clinic application สำหรับผู้ใช้บริการของคลินิก 
        ได้เข้ามาจอง โปรโมชั่น หรือ บริการ ของคลินิก ได้้ง่ายขึ้น
      </p>
      <form action="#">
          <button type="submit" class="btn btn-danger" style="border-radius:25px">สมัครใช้งาน</button>
      </form>
  </div>



  <div class="feature" id="feature">
      <h1>ฟีเจอร์</h1>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
              <h1 style="text-align:center;"> ระบบบริหารบุคลากรในคลินิก </h1>
                  <div class="feature-1">
            
                  <p> 
                      - จัดการคนไข้<br>
                        ลงทะเบียนประวัติคนไข้<br>
                        ระบบบันทึกและค้นหา OPD<br>
                        รองรับเครื่องอ่านบัตรประชาชน<br>
                        ระบบบันทึกรูปการรักษาก่อนหลัง<br>
                        ระบบนัดหมายคนไข้Calendar<br>
                        แจ้งเตือนลูกค้าอัตโนมัติผ่าน SMS/Line/E-mail<br>
                  </p>
                  <p>
                      - จัดการแพทย์<br>
                        ลงทะเบียนประวัติแพทย์<br>
                        ตารางเวรแพทย์<br>
                      - จัดการพนักงาน<br>
                        ลงทะเบียนประวัติพนักงาน<br>
                        ตารางวันหยุดพนักงาน<br>
                  </p>
                  </div>
  
              </div>
              <div class="carousel-item">
                  <h1 style="text-align:center;">ระบบจัดการยาและเวชภัณฑ์</h1>
                  <div class="feature-1">
                  <p>
                      - สต๊อกสินค้า (สินค้าทั้งหมด/สินค้าใกล้หมด/<br>สินค้าหมด/สินค้าขายดี/สินค้าใกล้หมดอายุ)<br>
                      - ตรวจ LAB / X-Ray และหัตถการ<br>
                      - ระบบคอร์สและบริการ ดูโปรโมชั่นและจ านวนคงเหลือของคอร์ส<br>
                  </p>
                  <p>
                      - บันทึกค่ามือแพทย์ DF ค่ามือพนักงาน<br>
                      - แจ้งเตือนสินค้าใกล้หมดอายุ<br>
                      - ระบบพิมพ์ฉลากยา<br>
                  </p>
                  
                </div>
     
      
                </div>
                <div class="carousel-item">
                    <h1 style="text-align:center;">ระบบชำระเงิน</h1>
                    <div class="feature-1">
                    <p>
                      -พิมพ์ใบเสร็จ/ใบกำกับภาษีอย่างย่อ และเต็มรูปแบบได้<br>
                      -ใส่โลโก้และชื่อคลินิกได้ <br>
                    </p>
                    <p>
                      -รองรับระบบแบ่งชำระ<br>
                      -รองรับการชำระเงินรูปแบบเงินสด,<br>บัตรเครดิต, โอน, และประกันสังคม
                    </p>
                  </div></div>
              </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


@endsection