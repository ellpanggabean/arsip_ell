<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="{{ Storage::url($item->foto) }}" target="_blank">
                    <img src="{{ Storage::url($item->foto ?? '') }}" alt="" class="img img-fluid" width="150" height="150"></td>
                  </a>
</body>
</html>