<!DOCTYPE html>
<html>
    <head>
        <title>Deli Food</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="..\CSS\style2.css">
    </head>
    <body>

        <main>
            <img src="https://i.pinimg.com/originals/3f/8e/48/3f8e48a0b20f4dc0671a8e5e8dd861a4.jpg" alt="bàn ăn">
                <br><br><br><br>
                <header class="container">
                    <h1>Mang đến cho bạn món ăn ưa thích, nóng hổi và ngon lành</h1>
                    <p style="text-align: center;"><i>Nhanh chóng xoa dịu cơn thèm ăn của bạn với những món ngon yêu thích và dịch vụ giao hàng “thần tốc”. Deli Food hiện đang được thử nghiệm tại các quận sau tại TP.HCM: Quận 1, Quận 3, Quận 4, Quận 5, Quận 7, Quận 10, Phú Nhuận, Gò Vấp, Bình Thạnh và Tân Bình. Chúng tôi sẽ mở rộng thêm nhiều khu vực trong thời gian tới!</i></p>
                </header>
                <br><br><br>
                <div class="container">
                    <h2 style="font-size: 40px; font-weight: 650; color: #d54d7b;">Sự ra đời của Deli Food</h2>
                    <br>
                    <video src="..\Images, Videos\Deli Food.mp4" controls="controls"></video>
                    <br><br><br><br>
                    <div class="row">
                        <div class="col-sm-5 col-md-6 img-control container">
                            <img src="https://cdn.dribbble.com/users/4326964/screenshots/8199431/sugar-deli_social-2_4x.jpg" alt="app" id="img1">
                            <h3 style="text-align: center; color: #d54d7b;">Món ngon đến tay chỉ sau vài cú chạm</h3>
                            <p style="text-align: center;">Deli Food có đội ngũ giao hàng thần tốc, mang cho bạn bữa ăn ngon và lành nhất, dù bạn ở đâu.</p>
                        </div>
                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 img-control container">
                            <img src="http://haisanantoan.vn/wp-content/uploads/2020/06/quan-hai-san-binh-dan.jpg" alt="đa dạng" id="img2">
                            <h3 style="text-align: center; color: #d54d7b;">Đa dạng lựa chọn</h3>
                            <p style="text-align: center;">Danh sách đa dạng các món ăn của chúng tôi có thể phục vụ mọi nhu cầu ăn uống của bạn.</p>
                        </div>
                    </div>
                    <br><br><br><br>
                    <h2 style="font-size: 40px; font-weight: 650; color: #d54d7b;">FAQs</h2>
                    <br><br>
                    <section class="minimizer" id="Q">
                        <div onclick="dropdown1();">
                            <span>Deli Food là gì?</span>
                            <svg height="15px" width="10px" id="a1">
                              <polygon points="1,3 8,9 1,15" style="fill:#262526;"/> 
                            </svg>
                        </div>  
                        <p id="q1"> 
                            Tại Deli Food, chúng tôi hiểu rằng một bữa ăn ngon có thể mang lại cho bạn sức khoẻ và tinh thần thoải mái nhất. Vì vậy, Deli Food cho ra mắt dịch vụ Deli Food, nhằm kết nối các nhà hàng, quán ăn tại địa phương với tất cả mọi người. Bạn chỉ cần đặt món ăn yêu thích trên Deli Food, đội ngũ giao hàng của chúng tôi sẽ nhanh chóng mang đến cho bạn bữa ăn nóng hổi và ngon lành.</p>
                    </section>  

                    <section class="minimizer">
                        <div onclick="dropdown2();">
                            <span>Deli Food hoạt động vào thời gian nào?</span>
                            <svg height="15px" width="10px" id="a2">
                              <polygon points="1,3 8,9 1,15" style="fill:#262526;"/> 
                            </svg>
                        </div>  
                        <p id="q2"> 
                            Deli Food hoạt động từ 7h đến 22h hằng ngày, tuỳ theo khu vực của bạn và thời gian mở cửa cụ thể của từng nhà hàng, quán ăn.</p>
                    </section>  

                    <section class="minimizer">
                        <div onclick="dropdown3();">
                            <span>Tôi có thể thanh toán bằng tiền mặt không?</span>
                            <svg height="15px" width="10px" id="a3">
                              <polygon points="1,3 8,9 1,15" style="fill:#262526;"/> 
                            </svg>
                        </div>  
                        <p id="q3"> 
                            Có.</p>
                    </section>  

                    <section class="minimizer">
                        <div onclick="dropdown4();">
                            <span>Tôi có thể tìm thấy những nhà hàng, quán ăn nào trong khu vực của mình?</span>
                            <svg height="15px" width="10px" id="a4">
                              <polygon points="1,3 8,9 1,15" style="fill:#262526;"/> 
                            </svg>
                        </div>  
                        <p id="q4"> 
                            Danh sách nhà hàng, quán ăn được sắp xếp dựa theo khoảng cách và thời gian giao hàng dự kiến từ Địa chỉ giao thức ăn đến vị trí của bạn.</p>
                    </section>  

                    <section class="minimizer">
                        <div onclick="dropdown5();">
                            <span>Làm sao tôi biết món ăn của mình đang được chuyển đến đâu?</span>
                            <svg height="15px" width="10px" id="a5">
                              <polygon points="1,3 8,9 1,15" style="fill:#262526;"/> 
                            </svg>
                        </div>  
                        <p id="q5"> 
                            Bạn có thể trực tiếp dõi theo tài xế ngay trên ứng dụng. Nếu không thấy vị trí của tài xế thay đổi trên bản đồ, bạn có thể trực tiếp liên lạc với tài xế theo số điện thoại được cấp trên ứng dụng.</p>
                    </section>  
                </div>
                <br><br><br><br><br><br>
                <div class="container">
                    <div class="card">
                        <div class="card-header" style="background-color: #d54d7b; font-weight: 650; font-size: 30px; color: #fff; text-align: center;">
                          Deli Food
                        </div>
                        <div class="card-body">
                          <h5 class="card-title" style="text-align: center;">Thèm món gì - Giao món đó</h5>
                          <p class="card-text" style="text-align: center;">Sau khi đã biết rõ về chúng tôi, còn chần chừ gì nữa mà không nhấn vào nút phía dưới để lên đơn ngay!</p>
                          <a href="..\Function_Method\back_to_index_page.php" class="btn" style="background-color: #6077A6;">Start Ordering Now</a>
                        </div>
                      </div>
                </div>
        </main>
        <br><br><br><br>
        <!-- footer -->
        <footer>
            <div class="container">
                <ul id="support-list">
                    <li>
                        <a href="..\Function_Method\back_to_index_page.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="Blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="#Q">Câu hỏi thường gặp</a>
                    </li>
                    <li>
                        <a href="contact_infor_for_user.php">Thông tin liên hệ</a>
                    </li>
                    <li id="network">
                        <a href="http://e-learning.hcmut.edu.vn/"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="http://e-learning.hcmut.edu.vn/"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="http://e-learning.hcmut.edu.vn/"><i class="fab fa-youtube fa-2x"></i></a>
                    </li>
                </ul>
                <div id="download-block">
                    <div id="download-info">
                        <a href="https://play.google.com/store?hl=vi&gl=US"><img src="https://apsi.vn/App_Themes/front/images/icon/GooglePlayTransparent.png" alt="Google Play symbol"></a>
                        <a href="https://www.apple.com/app-store/"><img src="https://foxfm.app/assets/app.png" alt="App Store symbol"></a>
                          
                    </div>
                    <div>
                        <p style="color: #fff;">&copy; 2021 Deli Food</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script lang="javaScript">
            function dropdown1() {
                if (document.getElementById('q1').style.display == 'block') {
                    document.getElementById('q1').style.display = 'none';
                    document.getElementById('a1').style.transform ="rotate(0deg)";
                } else	{
                    document.getElementById('q1').style.display = 'block';
                    document.getElementById('a1').style.transform ="rotate(90deg)";
                } 
            } 
            function dropdown2() {
                if (document.getElementById('q2').style.display == 'block') {
                    document.getElementById('q2').style.display = 'none';
                    document.getElementById('a2').style.transform ="rotate(0deg)";
                } else	{
                    document.getElementById('q2').style.display = 'block';
                    document.getElementById('a2').style.transform ="rotate(90deg)";
                } 
            } 
            function dropdown3() {
                if (document.getElementById('q3').style.display == 'block') {
                    document.getElementById('q3').style.display = 'none';
                    document.getElementById('a3').style.transform ="rotate(0deg)";
                } else	{
                    document.getElementById('q3').style.display = 'block';
                    document.getElementById('a3').style.transform ="rotate(90deg)";
                } 
            } 
            function dropdown4() {
                if (document.getElementById('q4').style.display == 'block') {
                    document.getElementById('q4').style.display = 'none';
                    document.getElementById('a4').style.transform ="rotate(0deg)";
                } else	{
                    document.getElementById('q4').style.display = 'block';
                    document.getElementById('a4').style.transform ="rotate(90deg)";
                } 
            } 
            function dropdown5() {
                if (document.getElementById('q5').style.display == 'block') {
                    document.getElementById('q5').style.display = 'none';
                    document.getElementById('a5').style.transform ="rotate(0deg)";
                } else	{
                    document.getElementById('q5').style.display = 'block';
                    document.getElementById('a5').style.transform ="rotate(90deg)";
                } 
            } 
        </script>
    </body>
</html>