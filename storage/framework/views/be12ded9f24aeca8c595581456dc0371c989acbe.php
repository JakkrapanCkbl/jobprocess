<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Vie PDF with JQuery</title>
  <!--
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src=”https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf.js”></script>
  <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js”></script>

  


</head>
<body>
	<div  class="container">
		<h5><?php echo e(public_path('img/test.pdf')); ?></h5>		
		<div id="viewpdf">			
			<embed src="<?php echo e(asset('img/test.pdf')); ?>#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="900px" /> 
		</div>
	</div>
	
</body>

<script>
    window.onload = function() {
        document.addEventListener(“contextmenu”, function(e){
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
    url = “fileUrl”;
    var thePdf = null;
    var scale = 1;
    pdfjsLib.getDocument(url).promise.then(function(pdf) {
              thePdf = pdf;
              viewer = document.getElementById(‘pdf-viewer’);
              for(page = 1; page <= pdf.numPages; page++) {
                canvas = document.createElement(“canvas”);
                canvas.className = ‘pdf-page-canvas’;
                viewer.appendChild(canvas);
                renderPage(page, canvas);
              }
          });
          function renderPage(pageNumber, canvas) {
              thePdf.getPage(pageNumber).then(function(page) {
                viewport = page.getViewport(scale);
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                page.render({canvasContext: canvas.getContext(‘2d’), viewport: viewport});
          });
          }
    </script>

	
</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/viewpdf.blade.php ENDPATH**/ ?>