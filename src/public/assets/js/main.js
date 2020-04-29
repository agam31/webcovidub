if (typeof jQuery === "undefined") {
    throw new Error("jQuery required");
}

+(function ($) {
    "use strict";

    // SEARCHBAR CLASS DEFINITION
    // =========================

    var backdrop = ".searchbar-backdrop";
    var toggle = '[data-toggle="searchbar"]';
    var Searchbar = function (element) {
        $(element).on("click.mr.searchbar", this.toggle);
    };

    Searchbar.VERSION = "1.0.0";

    Searchbar.prototype.toggle = function (e) {
        var $this = $(this);

        if ($this.is(".disabled, :disabled")) return;

        var $parent = getParent($this);
        var isActive =
            $parent.hasClass("open") || (typeof isXS == "function" && isXS());

        if (!isActive) {
            clearMenus();
            if (
                "ontouchstart" in document.documentElement &&
                !$parent.closest(".navbar-nav").length
            ) {
                // if mobile we use a backdrop because click events don't delegate
                $('<div class="searchbar-backdrop"/>')
                    .insertAfter($(this))
                    .on("click", clearMenus);
            }

            var relatedTarget = { relatedTarget: this };
            $parent.trigger((e = $.Event("show.mr.searchbar", relatedTarget)));

            if (e.isDefaultPrevented()) return;
            e.preventDefault();

            $parent.find("input").trigger("focus");

            $parent.toggleClass("open").trigger("shown.mr.searchbar", relatedTarget);

            return false;
        }
    };

    function clearMenus(e) {
        if (e && e.which === 3) return;
        $(backdrop).remove();
        $(toggle).each(function () {
            var $parent = getParent($(this));
            var relatedTarget = { relatedTarget: this };
            if (!$parent.hasClass("open")) return;
            $parent.trigger((e = $.Event("hide.mr.searchbar", relatedTarget)));
            if (e.isDefaultPrevented()) return;
            $parent.removeClass("open").trigger("hidden.mr.searchbar", relatedTarget);
        });
    }

    function getParent($this) {
        var selector = $this.attr("data-target");

        if (!selector) {
            return $this.parents("form");
        }

        var $parent = selector && $(selector);

        return $parent && $parent.length ? $parent : $this.parent();
    }

    // SEARCHBAR PLUGIN DEFINITION
    // ==========================

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this);
            var data = $this.data("mr.searchbar");

            if (!data) $this.data("mr.searchbar", (data = new Searchbar(this)));
            if (typeof option == "string") data[option].call($this);
        });
    }

    var old = $.fn.searchbar;

    $.fn.searchbar = Plugin;
    $.fn.searchbar.Constructor = Searchbar;

    // SEARCHBAR NO CONFLICT
    // ====================

    $.fn.searchbar.noConflict = function () {
        $.fn.searchbar = old;
        return this;
    };

    // APPLY TO STANDARD SEARCHBAR ELEMENTS
    // ===================================

    $(document)
        .on("click.mr.searchbar.data-api", clearMenus)
        .on("click.mr.searchbar.data-api", ".searchbar", function (e) {
            e.stopPropagation();
        })
        //.on('focus.mr.searchbar.data-api', toggle, Searchbar.prototype.toggle) // this causes the focus event to trigger twice
        .on("click.mr.searchbar.data-api", toggle, Searchbar.prototype.toggle);
})(jQuery);


$('.responsive').slick({
    dots: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

/*Iframe Javascript*/
// $('#map-covid-iframe').on('load', function(){
//     var iframe = document.getElementById("map-covid-iframe");
//     var elmnt = iframe.contentWindow.document.getElementsByTagName("H1")[0];
//     console.log(elmnt);
// });
var WebCovidUBSDK = {
    dataset: {
        getPositifJatim: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22POSITIF%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-positif-jatim').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getDiedJatim: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22MENINGGAL%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-died-jatim').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getCuredJatim: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22SEMBUH%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-cured-jatim').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getODPJatim: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22ODP%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-odp-jatim').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getPDPJatim: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22PDP%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-pdp-jatim').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getPositiMalang: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Kota_Malang_2_0/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22POSITIF%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-positif-malang').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getDiedMalang: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=KAB_KOTA%3D%27Kota%20Malang%27&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22MENINGGAL%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-died-malang').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getCuredMalang: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Jatim/FeatureServer/0/query?f=json&where=KAB_KOTA%3D%27Kota%20Malang%27&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22SEMBUH%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-cured-malang').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getODPMalang: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Kota_Malang_2_0/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22ODP%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-odp-malang').find('.data-covid-number').html(valueparse);
                }
            });
        },
        getPDPMalang: function () {
            $.ajax({
                url: 'https://services8.arcgis.com/yTQgcgZWR10MGhD2/arcgis/rest/services/Data_Covid_Kota_Malang_2_0/FeatureServer/0/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22PDP%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&outSR=102100&resultType=standard&cacheHint=true',
                type: 'GET',
                // dataType: 'json',
                success: function(data) {
                    var jsondata    = JSON.parse(data);
                    console.log(jsondata);
                    var valueparse  = jsondata.features[0].attributes.value;
                    console.log(valueparse);
                    $('#data-pdp-malang').find('.data-covid-number').html(valueparse);
                }
            });
        }
    },
    init:function () {
        WebCovidUBSDK.dataset.getPositifJatim();
        WebCovidUBSDK.dataset.getDiedJatim();
        WebCovidUBSDK.dataset.getCuredJatim();
        WebCovidUBSDK.dataset.getODPJatim();
        WebCovidUBSDK.dataset.getPDPJatim();
        WebCovidUBSDK.dataset.getPositiMalang();
        WebCovidUBSDK.dataset.getDiedMalang();
        WebCovidUBSDK.dataset.getCuredMalang();
        WebCovidUBSDK.dataset.getODPMalang();
        WebCovidUBSDK.dataset.getPDPMalang();
    }
};
WebCovidUBSDK.init();





// $.get( "https://ub-gis.maps.arcgis.com/apps/opsdashboard/index.html#/9064df11534047f3a85dd98420018bff", function( data ) {
//     $( ".result" ).html( data );
//     alert( "Load was performed." );
// });
