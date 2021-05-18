<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        window.onload = function() {
            document.addEventListener("contextmenu", function(e){
                e.preventDefault();
                if(event.keyCode == 123) {
                disableEvent(e);
            }
            }, false);
        function disableEvent(e) {
                if(e.stopPropagation) {
                    e.stopPropagation();
                } else if(window.event) {
                    window.event.cancelBubble = true;
                }
            }
        }
        $(document).contextmenu(function() { return false;});
        // url = "http://127.0.0.1:8000/storage/project_reports/LC_64BF-0662/0.pdf";
        // url = "https://www.jobprocess.landmarkcon.net/storage/project_reports/LC_64BF-0662/5.%20LC-64BF-0662-A.pdf";
        var fns = <?php echo json_encode($fn); ?>;

        console.log(fns);
        url = fns;
        
        var thePdf = null;
        var scale = 1;
        pdfjsLib.getDocument(url).promise.then(function(pdf) {
                thePdf = pdf;
                viewer = document.getElementById('pdf-viewer');
                for(page = 1; page <= pdf.numPages; page++) {
                    canvas = document.createElement("canvas");
                    canvas.className = 'pdf-page-canvas';
                    viewer.appendChild(canvas);
                    renderPage(page, canvas);
                }
            });
            function renderPage(pageNumber, canvas) {
                thePdf.getPage(pageNumber).then(function(page) {
                    viewport = page.getViewport(scale);
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    page.render({canvasContext: canvas.getContext('2d'), viewport: viewport});
            });
            }
    </script>
    
</head>
<body>
    <div id="pdf-viewer">
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/pdf_forms/viewpdf.blade.php ENDPATH**/ ?>