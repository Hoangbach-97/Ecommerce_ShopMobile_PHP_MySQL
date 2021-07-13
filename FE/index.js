// call the Owl initializer function and your carousel is ready.

// jQuery thực hiện sau khi DOM đã loaded được toàn bộ document: sử dụng hàm ready(): 
// Cụ thể:  make a function available after the document is loaded: $(document).ready(function(){....})
$(document).ready(function(){

    // banner carousel
    // $(id section - class div)
    $("#banner-area .owl-carousel").owlCarousel({
        // dots: Hiển thị dạng chấm
        dots: true,
        // item: 1 số lượng banner hiển thị 
        items:1,
        autoplay: true,
        autoplayTimeout: 3000,
        
    });

    // Top Sales
    $("#top-sale .owl-carousel").owlCarousel({

        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }

    });

    // UI
    // init isotope filter-  Dùng filter khi button được click

    var $grid = $(".grid").isotope({
        // options
        itemSelector:'.grid-item',
        layoutMode: 'fitRows'
    });


    // filter items on click

    $(".button-group").on("click","button", function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    });


    // New phone

    $("#new-phone .owl-carousel").owlCarousel({

        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }

    });

    // Blogs

    $("#blog .owl-carousel").owlCarousel({

        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            },
        }

    });

    // Quantity Products-jQuery
    // Tăng giảm số lượng sản phẩm user chọn

    // UP
    let $quantity_up = $('.quantity .quantity-up');
    // Down
    let $quantity_down = $('.quantity .quantity-down');
    // Input-lấy giá trị trường input
    // let $quantity_input = $('.quantity .quantity-input');

    // Khi user click

    $quantity_up.click(function (e) {

        let $quantity_input = $(`.quantity-input[data-id='${$(this).data("id")}']`);

        // Hàm val(): tìm hiểu trong jQuery
        // $(selector.val()=>return value attribute)
        if($quantity_input.val() >=1 && $quantity_input.val() <=9)
        {   

            // Set value Attribute using function
            // $(selector).val(function(index,currentvalue))
            $quantity_input.val(function (i, currentValue) {
                // console.log(oldValue++);
                // console.log(oldValue++);
                return ++currentValue;
            })
        }

    });

    $quantity_down.click(function (e) {
        // Hàm val(): tìm hiểu trong jQuery
        // $(selector.val()=>return value attribute)
        let $quantity_input = $(`.quantity-input[data-id='${$(this).data("id")}']`);

        if($quantity_input.val() >1 && $quantity_input.val() <=10)
        {   
            // Set value Attribute using function
            // $(selector).val(function(index,currentvalue))
            $quantity_input.val(function (i, currentValue) {
                // console.log(oldValue++);
                // console.log(oldValue++);
                return --currentValue;
            })
        }

    });

    // Quantity Products-jQuery



});