<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    @csrf
    <input type="text" name="description" placeholder="mo ta san pham">
    <input type="text" name="price" placeholder="gia san pham">
    <input type="text" name="percent" placeholder="ti le giam gia">
    <button type="submit">change</button>

</form>

</body>
</html>
