var VpsXSdk = {
    config : {
        SG : {
            price: '250.000',
            strikeprice: 'Rp. 350.000',
            url: 'https://member.jagoanhosting.com/cart.php?gid=121&region=SG'
        },
        ID : {
            price: '120.000',
            strikeprice: 'Rp. 220.000',
            url: 'https://member.jagoanhosting.com/cart.php?gid=121'
        },
    },
    configx2:{
        SG: {
            buttontext: "COMING SOON",
            disablebutton: true,
            url: '#'
        },
        ID:{
            buttontext: "BELI SEKARANG",
            disablebutton: false,
            url: 'https://member.jagoanhosting.com/cart.php?gid=122'
        }
    },
    configx3: {
        SG:{
            buttontext: "Coming Soon",
            disablebutton: true,
            url: 'javascript();'
        },
        ID:{
            buttontext: "BELI SEKARANG",
            disablebutton: false,
            url:"https://member.jagoanhosting.com/cart.php?gid=123"
        }
    },

    init: function () {
        jQuery('select#select-region').on('change', function (e) {
            e.preventDefault();
            var currentvalue = jQuery(this).val();
            jQuery('#strike-price-x1').html(VpsXSdk.config[currentvalue].strikeprice);
            jQuery('#price-x1').find('b').html(VpsXSdk.config[currentvalue].price);
            jQuery('#button-order-X1').attr('href', VpsXSdk.config[currentvalue].url);
        });

        jQuery('select#select-region-x2').on('change', function (e) {
            e.preventDefault();
            var currentvalue = jQuery(this).val();
            jQuery('#button-order-X2').html(VpsXSdk.configx2[currentvalue].buttontext);
            if(VpsXSdk.configx2[currentvalue].disablebutton==true){
                jQuery('#button-order-X2').addClass('orderbtndisbled');
                jQuery('#button-order-X2').removeAttr('href');

            }else{
                jQuery('#button-order-X2').removeClass('orderbtndisbled');
                jQuery('#button-order-X2').attr('href', VpsXSdk.configx2[currentvalue].url);
            }


        });

        jQuery('select#select-region-x3').on('change', function (e) {
            e.preventDefault();
            var currentvalue = jQuery(this).val();
            jQuery('#button-order-X3').html(VpsXSdk.configx3[currentvalue].buttontext);
            if(VpsXSdk.configx2[currentvalue].disablebutton==true){
                jQuery('#button-order-X3').addClass('orderbtndisbled');
                jQuery('#button-order-X3').removeAttr('href');
            }else{
                jQuery('#button-order-X3').removeClass('orderbtndisbled');
                jQuery('#button-order-X3').attr('href', VpsXSdk.configx3[currentvalue].url);
            }

        });

        jQuery('#button-order-X2.orderbtndisbled').on('click', function (e) {
            e.preventDefault();
            console.log('fdsfsdf');
        });
        jQuery('#button-order-X3.orderbtndisbled').on('click', function (e) {
            e.preventDefault();
            console.log('fsdfsdf');
        });

    }
};
VpsXSdk.init();


