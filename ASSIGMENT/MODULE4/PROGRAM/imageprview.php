<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<input type="file" id="uploadInput" accept="image/*"  onchange="previewImage(event)" />
<img id="previewImage" src="#" alt="Preview" width="243px" height="243px" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function previewImage(event) {
  var input = event.target;
  var reader = new FileReader();

  reader.onload = function () {
    var dataURL = reader.result;
    var preview = document.getElementById("previewImage");

    preview.src = dataURL;
    preview.style.display = "block";
  };

  reader.readAsDataURL(input.files[0]);
}
</script>

</body>
</html>