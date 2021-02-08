<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Directory Contents</title>
  <!-- <link rel="stylesheet" href=".style.css"> -->
  <style>
      * {
        padding:0;
        margin:0;
        }

        body {
        color: #333;
        font: 14px Sans-Serif;
        padding: 50px;
        background: #eee;
        }

        h1 {
        text-align: center;
        padding: 20px 0 12px 0;
        margin: 0;
        }

        h2 {
        font-size: 16px;
        text-align: center;
        padding: 0 0 12px 0; 
        }

        #container {
        box-shadow: 0 5px 10px -5px rgba(0,0,0,0.5);
        position: relative;
        background: white; 
        }

        table {
        background-color: #F3F3F3;
        border-collapse: collapse;
        width: 100%;
        margin: 15px 0;
        }

        th {
        background-color: #FE4902;
        color: #FFF;
        cursor: pointer;
        padding: 5px 10px;
        }

        th small {
        font-size: 9px; 
        }

        td, th {
        text-align: left;
        }

        a {
        text-decoration: none;
        }

        td a {
        color: #663300;
        display: block;
        padding: 5px 10px;
        }

        th a {
        padding-left: 0
        }

        td:first-of-type a {
        background: url(./.images/file.png) no-repeat 10px 50%;
        padding-left: 35px;
        }

        th:first-of-type {
        padding-left: 35px;
        }

        td:not(:first-of-type) a {
        background-image: none !important;
        } 

        tr:nth-of-type(odd) {
        background-color: #E6E6E6;
        }

        tr:hover td {
        background-color:#CACACA;
        }

        tr:hover td a {
        color: #000;
        }

        /* icons for file types (icons by famfamfam) */

        /* images */
        table tr td:first-of-type a[href$=".jpg"], 
        table tr td:first-of-type a[href$=".png"], 
        table tr td:first-of-type a[href$=".gif"], 
        table tr td:first-of-type a[href$=".svg"], 
        table tr td:first-of-type a[href$=".jpeg"] {
        background-image: url(./.images/image.png);
        }

        /* zips */
        table tr td:first-of-type a[href$=".zip"] {
        background-image: url(./.images/zip.png);
        }

        /* css */
        table tr td:first-of-type a[href$=".css"] {
        background-image: url(./.images/css.png);
        }

        /* docs */
        table tr td:first-of-type a[href$=".doc"],
        table tr td:first-of-type a[href$=".docx"],
        table tr td:first-of-type a[href$=".ppt"],
        table tr td:first-of-type a[href$=".pptx"],
        table tr td:first-of-type a[href$=".pps"],
        table tr td:first-of-type a[href$=".ppsx"],
        table tr td:first-of-type a[href$=".xls"],
        table tr td:first-of-type a[href$=".xlsx"] {
        background-image: url(./.images/office.png)
        }

        /* videos */
        table tr td:first-of-type a[href$=".avi"], 
        table tr td:first-of-type a[href$=".wmv"], 
        table tr td:first-of-type a[href$=".mp4"], 
        table tr td:first-of-type a[href$=".mov"], 
        table tr td:first-of-type a[href$=".m4a"] {
        background-image: url(./.images/video.png);
        }

        /* audio */
        table tr td:first-of-type a[href$=".mp3"], 
        table tr td:first-of-type a[href$=".ogg"], 
        table tr td:first-of-type a[href$=".aac"], 
        table tr td:first-of-type a[href$=".wma"] {
        background-image: url(./.images/audio.png);
        }

        /* web pages */
        table tr td:first-of-type a[href$=".html"],
        table tr td:first-of-type a[href$=".htm"],
        table tr td:first-of-type a[href$=".xml"] {
        background-image: url(./.images/xml.png);
        }

        table tr td:first-of-type a[href$=".php"] {
        background-image: url(./.images/php.png);
        }

        table tr td:first-of-type a[href$=".js"] {
        background-image: url(./.images/script.png);
        }

        /* directories */
        table tr.dir td:first-of-type a {
        background-image: url(./.images/folder.png);
        }
  </style>
  <!-- <script src=".sorttable.js"></script> -->
  <script src="../external2/js/sorttable.js"></script>
</head>

<body>

  <div id="container">
  
    <h1>Directory Contents</h1>
    <input type="file" id="files" name="files[]" multiple />
    <output id="list"></output>

    <table id="TableList" class="sortable">
      <thead>
        <tr>
          <th>Filename</th>
          <th>Type</th>
          <th>Size <small>(bytes)</small></th>
          <th>Date Modified</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>a.doc</td>
            <td>Ms Word</td>
            <td>1 MB</td>
            <td>07-02-2021</td>
          </tr>   
      </tbody>
    </table>
  
    <h2></h2>
    
  </div>
  
  <script>
    
    // Check for the various File API support.
    if (window.File && window.FileReader && window.FileList && window.Blob) {
      // Great success! All the File APIs are supported.
    } else {
      alert('The File APIs are not fully supported in this browser.');
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
</body>

</html>