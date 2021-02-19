</div>
    <div class="footer">This site is developed by Ayondip Jana.</div>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 20,
          stretch: 0,
          depth: 300,
          modifier: 1,
          slideShadows: true,
        },
        loop: true,
        autoplay: { delay: 1000, disableOnInteraction: false },
      });
    </script>
  </body>
</html>