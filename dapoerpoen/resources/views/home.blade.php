@include('compartments.navbar')
      <div class="homecontent">
        <table class="hometable">
          <tr>
            <td>
              <img src="{{asset('image/whatsapp.png')}}" alt="" style="width: 50px" />
            </td>
            <td>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Facilis, veritatis.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Repudian, expedita?
              </p>
            </td>
            <td>
              <img src="{{asset('image/whatsapp.png')}}" alt="" style="width: 50px" />
            </td>
          </tr>
          <tr>
            <td>
              <img src="{{asset('image/whatsapp.png')}}" alt="" style="width: 50px" />
            </td>
            <td>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aliquam, quasi?
              </p>
            </td>
          </tr>
          <tr>
            <td> 
              <div class="Testimoni">
              <h2>Testimoni</h2>
              </div>
            </td>
            <td><div class="testikonten">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Distinctio voluptate dignissimos fugiat quam quidem. Reprehenderit
                nulla eius asperiores libero ratione!
              </p>
            </div></td>
          </tr>
        </table>
       
        <div class="highlight">
          <h2 style="text-align: center">Highlight</h2>

          <!-- Carousel Start -->
          <!-- Slideshow container -->
          <div class="slideshow-container">
            <div class="mySlides w3-animate-left">
              <div class="numbertext">1 / 3</div>
              <img src="{{asset('image/Untitled.jpeg')}}" style="width: 60%" />
              <div class="text">Food 1</div>
            </div>

            <div class="mySlides w3-animate-right">
              <div class="numbertext">2 / 3</div>
              <img src="{{asset('image/Untitled.jpeg')}}" style="width: 60%" />
              <div class="text">Food 2</div>
            </div>

            <div class="mySlides w3-animate-right">
              <div class="numbertext">3 / 3</div>
              <img src="{{asset('image/Untitled.jpeg')}}" style="width: 60%" />
              <div class="text">Food 3</div>
            </div>
          </div>
          <br />

          <div style="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
          <!-- Carousel End -->

        </div>

        <div class="order">
          <h2 style="text-align: center">Order Now!</h2>
          <table class="ordernow">
            <tr>
              <td>
                <a href="https://www.instagram.com/dapoerpoen/"><img class="ig" src="{{asset('image/ig.webp')}}" alt="" /></a>
              </td>
              <td>
                <a href="https://api.whatsapp.com/send?phone=6281211631788"
                  ><img class="wa" src="{{asset('image/whatsapp.png')}}" alt=""
                /></a>
              </td>
              <td>
                <a href="https://www.facebook.com/dapoer.poen"
                  ><img class="fb" src="{{asset('image/facebook.png')}}" alt=""
                /></a>
              </td>
            </tr>
          </table>
        </div>


      </div>
    </div>
 @include('compartments.footer')
 </body>
  <script src="{{asset('js/script.js')}}"></script>
  </html>

