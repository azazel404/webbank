<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="copyright">Copyright &copy; Your Website 2018</span>
      </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-inline quicklinks">
          <li class="list-inline-item">
            <a href="#">Privacy Policy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms of Use</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
@push('PageRelatedJs')
<script>
    function initMap() {
      var bprad = {lat: 1.146399, lng: 104.006868};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 20,
        center: bprad
        });
        var marker = new google.maps.Marker({
          position: bprad,
          map: map
          });
        }
  </script>
</script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcxFlNsLU43Lp89aXYhHnZNZWhJbAzI_E&callback=initMap">
  </script>
@endpush
