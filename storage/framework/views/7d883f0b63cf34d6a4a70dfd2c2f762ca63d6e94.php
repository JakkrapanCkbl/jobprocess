<html>
<head>
    <title>HTML5 Files Object</title>
</head>
<body>
   
      

    <input type="file" accept="*.pdf" onchange="showFile(this)">  

    

    <input type="file" id="files" name="files[]" multiple />
    <output id="list"></output>
</body>

<script>
    // Check for the various File API support.
    if (window.File && window.FileReader && window.FileList && window.Blob) {
      // Great success! All the File APIs are supported.
    } else {
      alert('The File APIs are not fully supported in this browser.');
    }

    
  function showFile(input) {
    let file = input.files[0];

    alert(`File name: ${file.name}`); // e.g my.png
    alert(`Last modified: ${file.lastModified}`); // e.g 1552830408824
  }

    function readFile(input) {
      let file = input.files[0];

      let reader = new FileReader();

      reader.readAsText(file);

      reader.onload = function() {
        console.log(reader.result);
      };

      reader.onerror = function() {
        console.log(reader.error);
      };

    }



    function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                  '</li>');
    }
    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);


  


</script> 




</html><?php /**PATH C:\xampp\htdocs\jobprocess\resources\views/test/test2.blade.php ENDPATH**/ ?>