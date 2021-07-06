jQuery(document).ready(function () {
  jQuery('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      1000: {
        items: 3,
        nav: true
      }
    }
  })
})
