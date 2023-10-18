<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    document.querySelector('.blur').addEventListener('click', function() {
        var image = document.querySelector('.blur');
        if (image.classList.contains('click-blur')) {
            image.classList.remove('click-blur');
        } else {
            image.classList.add('click-blur');
        }
    });

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        freeMode: true,
        spaceBetween: 15,
        initialSlide: 0,
        breakpoints: {
            1400: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 3,
            },
            460: {
                slidesPerView: 1,
            }
        }
    });
</script>
