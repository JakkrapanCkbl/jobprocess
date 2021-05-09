// const { debounce } = require("lodash"); //????? Not Sure How's Its bug.

(function($) {
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


    //ADV. Search V.2
    var max_int = "999999999999";
    var condo_range_min = [0, 50000, 70000, 100000, 150000, 200000, 300000];
    var condo_range_max = [50000, 70000, 100000, 150000, 200000, 300000, max_int];
    var house_range_min = [0, 3000000, 5000000, 10000000, 20000000, 40000000];
    var house_range_max = [3000000, 5000000, 10000000, 20000000, 40000000, max_int];
    var townhome_range_min = [0, 2000000, 4000000, 7000000, 15000000, 30000000];
    var townhome_range_max = [2000000, 4000000, 7000000, 15000000, 30000000, max_int];
    var wasteland_range_min = [0, 3000000, 10000000, 50000000, 100000000, 500000000];
    var wasteland_range_max = [3000000, 10000000, 50000000, 100000000, 500000000, max_int];
    var wasteland_area_range_min = [0, 1, 10, 30, 50, 100];
    var wasteland_area_range_max = [1, 10, 30, 50, 100, max_int];

    var condo_range_grade = ["F : น้อยกว่า 50,000", "E : 50,000 - 70,000", "D : 70,000 - 100,000", "C : 100,000 - 150,000", "B : 150,000-200,000", "A : 200,000 - 300,000", "A+ : มากกว่า 300,000"];
    var house_range_grade = ["F : น้อยกว่า 3,000,000", "E : 3,000,000 - 5,000,000", "D : 5,000,000 - 10,000,000", "C : 10,000,000 - 20,000,000", "B : 20,000,000 - 40,000,000", "A : มากกว่า 40,000,000"];
    var townhome_range_grade = ["F : น้อยกว่า 2,000,000", "E : 2,000,000 - 4,000,000", "D : 4,000,000 - 7,000,000", "C : 7,000,000 - 15,000,000", "B : 15,000,000 - 30,000,000", "A : มากกว่า 30,000,000"];
    var wasteland_range_grade = ["F : น้อยกว่า 3,000,000", "E : 3,000,000 - 10,000,000", "D : 10,000,000 - 50,000,000", "C : 50,000,000 - 100,000,000", "B : 100,000,000 - 500,000,000", "A : มากกว่า 500,000,000"]
    var wasteland_area_range_grade = ["F : น้อยกว่า 1 ไร่", "E : 1 - 10 ไร่", "D : 10 - 30 ไร่", "C : 30 - 50 ไร่", "B : 50 - 100 ไร่", "A : มากกว่า 100 ไร่"]

    var array_range = [condo_range_grade, house_range_grade, townhome_range_grade, wasteland_range_grade];

    var $range01 = $(".js-range-slider-01"),
        min = 0,
        max = 7,
        from = min,
        to = max,
        $from_input01 = $("input[name = pricefrom-slider-01]"),
        $to_input01 = $("input[name = priceto-slider-01]");

    $range01.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs_Price_Range01,
        onChange: updateInputs_Price_Range01,
        values: array_range[0],
    });

    function updateInputs_Price_Range01(data) {
        $from_input01.prop("value", condo_range_min[data.from]);
        $to_input01.prop("value", condo_range_max[data.to]);
    }

    var $range02 = $(".js-range-slider-02"),
        min = 0,
        max = 6,
        from = min,
        to = max,
        $from_input02 = $("input[name = pricefrom-slider-02]"),
        $to_input02 = $("input[name = priceto-slider-02]");

    $range02.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs_Price_Range02,
        onChange: updateInputs_Price_Range02,
        values: array_range[1],
    });

    function updateInputs_Price_Range02(data) {
        $from_input02.prop("value", house_range_min[data.from]);
        $to_input02.prop("value", house_range_max[data.to]);
    }

    var $range03 = $(".js-range-slider-03"),
        min = 0,
        max = 6,
        from = min,
        to = max,
        $from_input03 = $("input[name = pricefrom-slider-03]"),
        $to_input03 = $("input[name = priceto-slider-03]");

    $range03.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs_Price_Range03,
        onChange: updateInputs_Price_Range03,
        values: array_range[2],
    });

    function updateInputs_Price_Range03(data) {
        $from_input03.prop("value", townhome_range_min[data.from]);
        $to_input03.prop("value", townhome_range_max[data.to]);
    }

    var $range04 = $(".js-range-slider-04"),
        min = 0,
        max = 6,
        from = min,
        to = max,
        $from_input04 = $("input[name = pricefrom-slider-04]"),
        $to_input04 = $("input[name = priceto-slider-04]");

    $range04.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs_Price_Range04,
        onChange: updateInputs_Price_Range04,
        values: array_range[3],
    });

    function updateInputs_Price_Range04(data) {
        $from_input04.prop("value", wasteland_range_min[data.from]);
        $to_input04.prop("value", wasteland_range_max[data.to]);
    }

    var $range05 = $(".js-range-slider-05"),
        min = 0,
        max = 6,
        from = min,
        to = max,
        $from_input05 = $("input[name = areafrom]"),
        $to_input05 = $("input[name = areato]");

    $range05.ionRangeSlider({
        type: "double",
        grid: true,
        min: min,
        max: max,
        from: min,
        to: max,
        onStart: updateInputs_Price_Range05,
        onChange: updateInputs_Price_Range05,
        values: wasteland_area_range_grade,
    });

    function updateInputs_Price_Range05(data) {
        $from_input05.prop("value", wasteland_area_range_min[data.from]);
        $to_input05.prop("value", wasteland_area_range_max[data.to]);
    }


    //End of Advance Search @Hero-Home Page

})(jQuery);