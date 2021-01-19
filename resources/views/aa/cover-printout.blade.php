<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>template</title>

    <style>
        body {
            background: rgb(204, 204, 204);
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }
        }

        body {
            transform: translate(0%, 0%);
        }

        .text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            border-radius: 15px;
            padding: 20px;
            background: #eff0f1;
            box-shadow: 8px 8px #c2c2c3, -17px -17px 43px #ffffff;
            /*background-color: rgba(0,0,0,.05);
   
    padding: 10px;
    box-shadow: 8px 8px rgba(0,0,0,.15);*/
        }

        /*
#border{ 
  border: 15px solid transparent;
  padding: 15px;
  border-image-source: url(border.png);
  border-image-repeat: repeat;
  border-image-slice: 30;
}
*/
    </style>
</head>

<body>
    <div>
        <page size="A4" class="page1">
            <div class="text">
                <span>
                    {{$headers}}
            </div>
        </page>
        <!--page size="A4" layout="landscape"></page-->
    </div>
    <!--div>
           <h2>border-image-repeat: repeat:</h2>
<p id="border">Here, the image tiles to fill the area. Tiles are divided if necessary.</p>

        </div-->

</body>

<script>
    console.log($headers);
</script>


</html>