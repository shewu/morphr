<!DOCTYPE html>
<html lang=en>
<head>
<title>6.815/6.865 Image Morphr</title>
<link href=main.css rel=stylesheet type=text/css />
<script src=js/r.js></script>
<script src=js/jq.js></script>
<script src=js/vendor/jquery.ui.widget.js></script>
<script src=js/jquery.fileupload.js></script>
<script src=js/jquery.fileupload-ui.js></script>
</head>
<body>

<article>
<table width="800" border="0">
  <tr>
    <td height="450" class=container>
        <input id=leftWell type=file name=leftFiles[] />
        <script>
        $(function() {
            $('leftWell').fileupload({
                dataType: 'json',
                url: 'server/php/',
                done: function(e, data) {
                    $.each(data.result, function(index, file) {
                        $('<p/>').text(file.name).appendTo(document.body);
                    });
                }
            });
        });
        </script>
        <p style=text-align:center><em>Drag an image here to upload.</em></p>
    </td>
    <td height="450" class=container>
        <p style=text-align:center><em>Drag an image here to upload.</em></p>
    </td>
  </tr>
  <tr>
    <td width=500><code id="seg1">segmentsBefore=numpy.array([</code></td>
    <td width=400><code id="seg2">segmentsAfter=numpy.array([</code></td>
  </tr>
</table>
</article>

<p id="debug"></p>

<footer>&copy; 2012 <a href=mailto:shewu19@gmail.com>Sherry Wu</a>.</footer>
</body>
</html>

