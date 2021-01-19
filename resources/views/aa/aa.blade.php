<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('dashboard.head')

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>

<body class="app">

    <!-- Global Loader-->
    <div id="global-loader"><img src="{{asset('external2/images/svgs/loader.svg')}}" alt="loader"></div>

    <div class="page">
        <div class="page-main">

            @include('dashboard.nav')

            @include('dashboard.menubar')


            <div class="container content-area">

                <style>
                    .btn {
                        background-color: grey;
                        display: flex;
                        justify-content: center;
                        margin-bottom: 5px;
                    }

                    .pageborder {
                        width: 400px;
                        height: 500px;
                        padding: 10px;
                        border: 5px solid gray;
                        margin: 0;
                    }

                    .plus-sign {
                        font-size: 70px;
                        text-align: center;
                        vertical-align: middle;

                        width: 50px;
                        height: 50px;

                    }

                    .center_button {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                </style>

                <div class="container">
                    <div class="d-flex justify-content-left">

                        @include('aa.button_group')


                        <!-- <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="checkbox" checked autocomplete="off" id="toggle-one"> Checked
                            </label>
                            <label class="btn btn-secondary">
                                <input type="checkbox" checked autocomplete="off" id="toggle-two"> Checked
                            </label>
                            <label class="btn btn-secondary active">
                                <input type="checkbox" checked autocomplete="off"> Checked
                            </label>
                            <br>
                            <label class="btn btn-primary">
                                <input type="checkbox" checked autocomplete="off" id="toggle-four">
                                หนังสือสัญญาขายที่ดิน (ท.ด13)
                            </label>
                        </div> -->

                        <div id="more-box">
                        </div>

                        <div class="center_button">
                            <div class="container">
                                <span class="bg-primary text-white py-3 px-4 rounded plus-sign">&#43;</span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $hello = 'hahah';
                ?>
                <div class="container">
                    <!-- <a href="{{route('aa.cover-printout' ,['document.innerHTML(array)'])}}"> -->
                    <a href="" id="hreflink"></a>
                    <button class="btn btn-primary" id="submit">GO NEXT</button>
                    </a>
                </div>


            </div>
        </div>
    </div>

    <!-- <script>
        function myFunction() {
            console.log($(this).find('btn-toggle[aria-pressed]').attr('aria-pressed'));
        }
        console.log($(this).find('btn-toggle[aria-pressed]').attr('aria-pressed'));
    </script> -->

    <?php
    // $Child =  (include '../resources/views/aa/button_group.blade.php');
    // $Child2 = "Some Tetx";
    // var_dump($Child);
    ?>

    <script>
        let childNumber = 1;


        const add_box = document.getElementsByClassName('plus-sign');
        add_box[0].addEventListener('mouseup', e => {
            var parent = document.getElementById('more-box');
            var newChild = '<div class="d-flex justify-content-center pageborder"> <div class="btn-group-vertical" role="group" aria-label="Vertical button group"> <button type="button" class="btn btn-primary btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off"> สำเนาเอกสารสิทธิ์ที่ดินทรัพย์สินที่ประเมินมูลค่า </button> <button type="button" class="btn btn-primary btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">หนังสือสัญญาขายที่ดิน (ท.ด13)</button><button type="button" class="btn btn-primary btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">หนังสือสัญญาจำนองที่ดิน (ท.ด15)</button><button type="button" class="btn btn-primary btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">บัญชีราคาประเมินราชการ</button><button type="button" class="btn btn-primary btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">ระวางที่ดิน</button></div></div>';
            parent.insertAdjacentHTML('afterend', newChild);
            childNumber = childNumber + 1;
            console.log(childNumber);
        });

        const submit = document.getElementById('submit');
        submit.addEventListener('mouseup', e => {
            for (i = 0; i < childNumber; i++) {
                console.log("Child: " + childNumber);
                // console.log("button 1 is " + $('#toggle-one').prop('checked') );
            }
            const array = [
                $('.toggle-one').prop('checked') ? [$('.toggle-one').val()] : [],
                $('.toggle-two').prop('checked') ? [$('.toggle-two').val()] : [],
                $('.toggle-three').prop('checked') ? [$('.toggle-three').val()] : [],
                $('.toggle-four').prop('checked') ? [$('.toggle-four').val()] : [],
                $('.toggle-five').prop('checked') ? [$('.toggle-five').val()] : [],
                $('.toggle-six').prop('checked') ? [$('.toggle-six').val()] : [],
            ];

            console.log($('.toggle-one').prop('checked') + " " + $('.toggle-two').prop('checked') + " " +
                $('.toggle-three').prop('checked') + " " + $('.toggle-four').prop('checked') + " " +
                $('.toggle-five').prop('checked') + " " + $('.toggle-six').prop('checked')
            );

            console.log(array);

            // var action = " {{route('aa.cover-printout' ,[' " + array + " '])}} ";
            var word1 = "{{route('aa.cover-printout' ,['";
            
            var word2 = "'])}}";
            var action = word1.concat(array, word2);
            console.log(action);

            // var action = "google.com"
            // $(".hreflink").attr('href', action);

            var link = document.getElementById("hreflink");
            // window.open(
            //     link.href,
            //     '_blank'
            // );

            link.innerHTML = "ปกหน้า";
            link.setAttribute('href', action);

        });
    </script>
    @include('aa.footer')