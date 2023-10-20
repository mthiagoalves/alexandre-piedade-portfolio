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

    let isLeftHidden = false;

    document.querySelector('.container-text-in-mobile').addEventListener('click', function() {
        const divLeft = document.querySelector('.div-text-left-in-mobile');
        const divRight = document.querySelector('.div-text-right-in-mobile');

        if (isLeftHidden) {
            // Se o estado atual é que divLeft está oculta, mostre-a novamente.
            divLeft.style.left = '0';
            divRight.style.left = '100vw';
        } else {
            // Caso contrário, esconda divLeft e mostre divRight.
            divLeft.style.left = '-100vw';
            divRight.style.left = '0';
        }

        // Inverta o estado atual.
        isLeftHidden = !isLeftHidden;
    });


    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        freeMode: true,
        spaceBetween: 15,
        initialSlide: 0,
        breakpoints: {
            1200: {
                slidesPerView: 3
            },
            850: {
                slidesPerView: 2,
            },
            450: {
                slidesPerView: 2,
            },
            250: {
                slidesPerView: 1
            }
        }
    });
</script>
