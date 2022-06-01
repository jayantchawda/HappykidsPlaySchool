



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1088.158005353144!2d75.41880184958568!3d23.456400252363114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396475f73cdc39cb%3A0xb58fc30ee7d6f002!2sSankalp%20academy!5e0!3m2!1sen!2sin!4v1653986376478!5m2!1sen!2sin" width="1400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <!-- end google map js -->
</body>

</html>
<footer>
<!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="#">PremG Solutions</a>
    </p>
  </section>
  <!-- footer section -->
</footer>