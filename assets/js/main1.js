$(document).ready(function()
        {
            $('.slider').bxSlider(
                {
                    controls: false,
                    auto: true,
                    pager: false,
                });
            $('.eltunik').click(function()
                {
                    $('.tajekoztatas').hide();
                });
            $('.mobilmenu').click(function()
                {
                    var navbarclass = $('.navbar').attr("class");
                    if (navbarclass=="navbar")
                        {
                        $('.navbar').addClass('navbar2');
                        }
                    else
                        {
                        $('.navbar').removeClass('navbar2');
                        }
                });
            
        });