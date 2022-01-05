require('./bootstrap');

$( document ).ready(function() {

    let base_url = location.origin

    // Geet a Cookie
    function getCookie(cName) {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie); //to be careful
        const cArr = cDecoded .split('; ');
        let res;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
        })
        return res;
    }

    if ( getCookie('confirmation') === 'yes') {
        $('.confirmation__wrapper').hide()
    } else {
        $('.cf').append(`
        <div class="confirmation__wrapper">
            <div class="confirmation">
                <img src="${base_url}/images/bg-confirmation.png" alt="">
                <div class="box">
                    <h3>THE INFORMATION PROVIDED HERE IS EXCLUSIVELY FOR SMOKERS ABOVE THE AGE OF 18.</h3>
                    <div>
                        <h4>Are You Above 18 Years Old?</h4>
                        <div class="btn_wrapper">
                            <button class="btn-yes">YES</button>
                            <button class="btn-no">NO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `)
    }

    // Set a Cookie
    function setCookie(cName, cValue, expDays) {
        let date = new Date();
        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
    }


    $('.btn-yes').on('click',function () {
        // Apply setCookie
        setCookie('confirmation', 'yes', 30);
        $('.confirmation__wrapper').hide()
        $('.modal_sorry').hide()
    })

    $('.btn-no').on('click',function (){
        $('.modal_sorry').show()
        $('.confirmation__wrapper').hide()
    })

    $('.btn-backToWeb').on('click',function (params) {
        $('.confirmation__wrapper').show()
    })

    $('#menu-hamburger').on('click',function () {
        $(this).addClass('open')
        $('.menu__showcase').addClass('show-menu')
    })

    $('.btn-close').on('click',function () {
        $('#menu-hamburger').removeClass('open')
        $('.menu__showcase').removeClass('show-menu')
    })


    // PARALLAX


    $(window).scroll(function (event) {
        let scroll = $(document).scrollTop();
        let transVal

        if ($(window).width() < 800) {
            transVal = '-50%';
        } else {
            transVal = '43px';
        }

        // Logo banner home
        $('.img_on_bg').css('transform',`translate(${transVal},${scroll * 2 / 5}px)`)

        //Testimonials
        $('.animate-testimonials').css('transform',`translateY(${-scroll * 2 / 10 }px)`)
        $('[page=testimonials]').css('margin-bottom',`${-scroll * 2 / 20 }px`)

        $('[page=about] .right-1').css('transform',`translateY(${-scroll * 2 / 10 }px)`)
        $('[page=about] .left-2').css('transform',`translateY(${-scroll * 2 / 10 }px)`)


        // $('.section__first title__sf').css('transform',`translateY(${scroll * 2 / 20 + 50}px)`)

    });

});