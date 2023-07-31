<?php
  use Illuminate\Support\Facades\Session;

  $lang = session::get('language');
  $arr = session::get('arr');
  $dscr = "dscr".$lang;
  $name = "name".$lang;
  $test = "test".$lang;
?>

@include('compartments.navbar')
      <div class="homecontent">
        <table class="hometable" style="padding: 30px;">
          <tr>
            <td>
              <img src="{{ asset('image/' . $arr[0]->id . '.jpeg') }}" alt="" style="width: 250px" />
            </td>
            <td>
              <p style="text-align: left;">
                <?php echo $arr[0]->$dscr ?>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p style="text-align: right;">
              <?php echo $arr[1]->$dscr ?>
              </p>
            </td>
            <td>
              <img src="{{ asset('image/' . $arr[1]->id . '.jpeg') }}" alt="" style="width: 250px" />
            </td>
          </tr>
          <tr>
            <td>
              <img src="{{ asset('image/' . $arr[2]->id . '.jpeg') }}" alt="" style="width: 250px" />
            </td>
            <td>
              <p style="text-align: left;">
              <?php echo $arr[2]->$dscr ?>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </html>

