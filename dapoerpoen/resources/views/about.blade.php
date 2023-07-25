@include('compartments.navbar')
<div class="aboutcontent">
        <h1>About</h1>
        <h2>DapoerPoen</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id
          laboriosam modi pariatur dolorum laborum ipsa nesciunt maiores neque
          sapiente consequatur, fugit tempore quo. Architecto, odit? Placeat,
          assumenda. Officia atque molestiae quis quae! Hic sint, sit aspernatur
          minus quod laboriosam atque eligendi molestiae earum iste, odio harum
          officiis officia delectus beatae.
        </p>
      </div>
      <div class="founders">
        <h1>Founders</h1>
        <table>
          <tr>
            <td class="images"><img src="{{asset('image/Untitled.jpeg')}}" alt=""></td>
            <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, repudiandae!</p></td>
          </tr>
        </table>
      </div>
      <div class="credits"><p>This Website was made by Zinedine Zethro & Darren Donovan</p></div>
      <div class="order">
        <h2 style="text-align: center">Order Now!</h2>
        <table class="ordernow">
          <tr>
            <td class="img">
              <a href="https://www.instagram.com/dapoerpoen/"><img class="ig" src="{{asset('image/ig.webp')}}" alt="" /></a>
            </td>
            <td>
              <a href="https://api.whatsapp.com/send?phone=6281211631788"><img class="wa" src="{{asset('image/whatsapp.png')}}" alt="" /></a>
            </td>
            <td>
              <a href="https://www.facebook.com/dapoer.poen"><img class="fb" src="{{asset('image/facebook.png')}}" alt="" /></a>
            </td>
          </tr>
        </table>
      </div>
    </div>
@include('compartments.footer')
</body>
<script src="{{asset('js/script.js')}}"></script>
</html>