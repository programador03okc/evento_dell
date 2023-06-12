require('./bootstrap');
require('owl.carousel');
require('jquery.numeric');
require('select2');
//node_modules\jquery.numeric\jquery.numeric.min.js
$(document).ready(function () {


    //obtener valores Utm url inicio
    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        nulo = ""
        return nulo;
    }


    document.fomr1.utm_source.value = getQueryVariable('utm_source');
    document.fomr1.utm_medium.value = getQueryVariable('utm_medium');
    document.fomr1.utm_campaign.value = getQueryVariable('utm_campaign');
    document.fomr1.utm_term.value = getQueryVariable('utm_term');
    document.fomr1.utm_content.value = getQueryVariable('utm_content');

    source = document.getElementById("utm_source").value;
    medium = document.getElementById("utm_medium").value;
    campaign = document.getElementById("utm_campaign").value;
    term = document.getElementById("utm_term").value;
    content = document.getElementById("utm_content").value;
    procedencia = document.getElementById("procedencia");

    if ((source.length == 0) && (medium.length == 0) && (campaign.length == 0) && (term.length == 0) && (content.length == 0)) {
        procedencia.value = "Orgánico";
    } else {
        procedencia.value = "Pauta";
    }
    //obtener valores Utm url Fin



    // carusel
    $('#caruselspeakers').owlCarousel({
        loop: true,
        items: 2,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 8000,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });

    $('#caruselauspicia').owlCarousel({
        loop: true,
        items: 2,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });

    $('#caruselprogramas').owlCarousel({
        loop: true,
        items: 1,
        margin: 10,
        responsiveClass: true,
        autoplay: false,
       // autoplayTimeout:9999,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });
   
    // $(function () {
    //     $(window).scroll(function () {
    //         var scrolltop = $(this).scrollTop();
    //         if (scrolltop >= 60) {
    //             $(".tituloinscribete").fadeIn();
    //         } else {
    //             $(".tituloinscribete").fadeOut();
    //         }

    //     });

    // });
 
    $(document).ready(function() {
        $('#botoninscribete').hide(0);
         
         
                $(window).scroll(function(){
                        var windowHeight = $(window).scrollTop();
                        var contenido2 = $("#formualrioregistro").offset();
                        contenido2 = contenido2.top;
         
                            if(windowHeight >= contenido2  ){
                            $('#botoninscribete').fadeIn(500);
         
                            }else{
                            $('#botoninscribete').fadeOut(500);
                        }
                               });
                        });


    $(function () {
        $(window).scroll(function () {
            var scrolltop = $(this).scrollTop();
            if (scrolltop >= 50) {
                $(".back-top").fadeIn();
            } else {
                $(".back-top").fadeOut();
            }

        });

    });
    //

    var listMenus = $('#navbarTogglerLanding'),
        navbarToggler = jQuery('.navbar-toggler');

    $('.navbar').on('click', 'a.nav-link', function (e) {
        var currentSelect = $(this);
        listMenus.find('li').removeClass('active');

        if (currentSelect.length) {
            currentSelect.closest('li').addClass('active');

            if (!navbarToggler.hasClass('collapsed'))
                navbarToggler.trigger('click');

            // var itemSection = $(currentSelect[0].hash);

            // if(itemSection.length){
            //     // console.log(itemSection.offset());
            //      $('html, body').animate({
            //         scrollTop: (itemSection.offset().top - 60)
            //     }, 2000);
            // }
        }

    });

    // el menu se muestra cuando das escroll
    var menu = document.getElementById('menuscroll');

    if (menu) {
        var altura = menu.offsetTop;

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > altura) {
                menu.classList.add('menufixed');
            } else {
                menu.classList.remove('menufixed');
            }
        })
    }


    //indicador de carga para ingreso de Formulario
    var frmCliente = $('#frmCliente'),
        loading = $('#loading'),
        emailError = $('#emailError'),
        nombresError = $('#nombresError'),
        apellidosError = $('#apellidosError');

    loading.removeClass('show');

    frmCliente.on('submit', function () {
        loading.addClass('show');
    });

    if (frmCliente) {
        $('#telefono').numeric({
                negative: false
            },
            function () {
                this.value = '';
                this.focus();
            }
        );

        $("#email").blur(function () {
            var regexEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var currentElement = $(this);
            var valEmail = currentElement.val().trim();

            if (!valEmail.length) {
                if (emailError) emailError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }

            if (!regexEmail.test(valEmail)) {
                currentElement.addClass('is-invalid');
                //currentElement.focus();
                if (emailError) emailError.text('El campo email debe ser una dirección de correo válida.')
            } else {
                currentElement.removeClass('is-invalid');
                if (emailError) emailError.text('')
            }

        });

        $("#nombres").blur(function () {
            var regexLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
            
            var currentElement = $(this);
            var valNombre = currentElement.val().trim();

            if (!valNombre.length) {
                if (nombresError) nombresError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }

            if (!regexLetters.test(valNombre)) {
                currentElement.addClass('is-invalid');
                if (nombresError) nombresError.text('El campo nombres solo puede contener letras.')
            } else {
                currentElement.removeClass('is-invalid');
                if (nombresError) nombresError.text('')
            }

        });

        $("#apellidos").blur(function () {
            var regexLetters = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
            var currentElement = $(this);
            var valApellido = currentElement.val().trim();

            if (!valApellido.length) {
                if (apellidosError) apellidosError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }

            if (!regexLetters.test(valApellido)) {
                currentElement.addClass('is-invalid');
                if (apellidosError) apellidosError.text('El campo apellidos solo puede contener letras.')
            } else {
                currentElement.removeClass('is-invalid');
                if (apellidosError) apellidosError.text('')
            }

        });

        // $.fn.select2.defaults.set( "theme", "bootstrap" );
        $.fn.modal.Constructor.prototype.enforceFocus = function () {};
        $("#cboCarrera").select2({
            dropdownParent: $('#modalregistarse'),
            // width: 'resolve',
            // allowClear: true,
            scrollAfterSelect: true
        });

    }

});
