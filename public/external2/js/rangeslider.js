(function ($) {
    "use strict";
    $("#range_01").ionRangeSlider();

    $("#range_02").ionRangeSlider({
        min: 1000,
        max: 10000,
        from: 1500
    });

    $("#range_03").ionRangeSlider({
        type: "double",
        grid: true,
        min: 1,
        max: 1500,
        from: 500,
        to: 1000,
        prefix: "$"
    });

    $("#range_04").ionRangeSlider({
        type: "double",
        grid: true,
        min: -500,
        max: 2000,
        from: -800,
        to: 900
    });

    $("#range_05").ionRangeSlider({
        type: "double",
        grid: true,
        min: -2000,
        max: 2000,
        from: -600,
        to: 800,
        step: 300
    });

    $("#range_06").ionRangeSlider({
        grid: true,
        from: 2,
        values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    });

    $("#range_07").ionRangeSlider({
        grid: true,
        min: 10000,
        max: 10000000,
        from: 200000,
        step: 10000,
        prettify_enabled: true
    });

    $("#range_08").ionRangeSlider({
        min: 1000,
        max: 2000,
        from: 1200,
        disable: true
    });

    //Advance Year Search @DocSearch Page
    var $range = $(".js-range-slider"),
        instance,
        min = 1990,
        max = new Date().getFullYear(), //max value as Current Year
        from = min,
        to = max,
        $from_input = $("input[name = js-input-from]"),
        $to_input = $("input[name = js-input-to]");

    $range.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs,
        onChange: updateInputs
    });

    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
        var from = data.from;
        var to = data.to;
        $from_input.prop("value", from);
        $to_input.prop("value", to);
    }

    //input value validation set to at min or max
    $from_input.on("input", function () {
        var val = $(this).prop("value");

        // validate
        if (val < min) {
            val = min;
        } else if (val > to) {
            val = to;
        }

        instance.update({
            from: val
        });
    });

    $to_input.on("input", function () {
        var val = $(this).prop("value");

        // validate
        if (val < from) {
            val = from;
        } else if (val > max) {
            val = max;
        }

        instance.update({
            to: val
        });
    });
    //End of Advance Year Search @DocSearch Page


    //Advance Search @Hero-Home Page
    var $range01 = $(".js-range-slider-01"),
        min = 0,
        max = 3,
        from = min,
        to = max,
        $from_input = $("input[name = pricefrom]"),
        $to_input = $("input[name = priceto]"),
        $pricerange_input = $("input[name = pricerange]");

    $range01.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs01,
        onChange: updateInputs01,
        values: [
            "Below 1 M", "1M - 2M", "2M - 4M", "Above 4M"
        ]
    });

    function updateInputs01(data) {
        var from = data.from;
        var to = data.to;
        var printout = "";

        printout = "ช่วงราคา";
        if (from == to) {
            if (from == 0) { printout += "น้อยกว่า 1M"; }
            else if (from == 1) { printout += "ระหว่าง 1M - 2M"; }
            else if (from == 2) { printout += "ระหว่าง 2M - 4M"; }
            else if (from == 3) { printout += "มากกว่า 4M"; }
        }
        else {
            if (from == 0) { printout += "น้อยกว่า 1M "; }
            else if (from == 1) { printout += "ระหว่าง 1M "; }
            else if (from == 2) { printout += "ระหว่าง 2M "; }
            if (to == 1) { printout += "ถึง 2M"; }
            else if (to == 2) { printout += "ถึง 4M"; }
            else if (to == 3) { printout += "ถึงมากกว่า 4M"; }
        }
        $from_input.prop("value", from);
        $to_input.prop("value", to);
        $pricerange_input.prop("value", printout);
    }
    //End of Advance Search @Hero-Home Page



})(jQuery);