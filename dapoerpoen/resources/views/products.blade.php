@include('compartments.navbar')
    <div class="product">
        <table style="width: 100%; text-align: center">
          <tr>
            <td>
              <div class="image-container">
                <img class="modal-trigger" src="{{asset('image/whatsapp.png')}}" alt="" />
              </div>
              <p>Makanan 1</p>
            </td>
            <td>
              <div class="image-container">
                <img class="modal-trigger" src="{{asset('image/whatsapp.png')}}" alt="" />
              </div>
              <p>Makanan 2</p>
            </td>
            <td>
              <div class="image-container">
                <img class="modal-trigger" src="{{asset('image/whatsapp.png')}}" alt="" />
              </div>
              <p>Makanan 3</p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="image-container">
                <img class="modal-trigger" src="{{asset('image/whatsapp.png')}}" alt="" />
              </div>
              <p>Makanan 4</p>
            </td>
            <td>
              <div class="image-container">
                <img class="modal-trigger" src="{{asset('image/whatsapp.png')}}" alt="" />
              </div>
              <p>Makanan 5</p>
            </td>
            <td>
              <div class="image-container">
                <img class="modal-trigger" src="{{asset('image/whatsapp.png')}}" alt="" />
              </div>
              <p>Makanan 6</p>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h3>Nama Makanan</h3>
        </div>
        <div class="modal-body">
          <img src="{{asset('image/Untitled.jpeg')}}" alt="" style="width: 60%" />
          <h4>Nama Makanan</h4>
          <p class="kontenmodal">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat
            quisquam nihil sed cupiditate explicabo in eaque beatae accusamus
            distinctio repellendus, illo quibusdam eligendi rem voluptatibus
            voluptates accusantium facilis dicta et placeat qui voluptas
            deleniti sequi. Rem animi ex ea minus exercitationem ad velit
            voluptas culpa? Fuga reprehenderit quibusdam debitis? Fugiat!
          </p>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
@include('compartments.footer')
</body>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/scriptmodal.js')}}"></script>
</html>