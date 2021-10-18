<html>

<head>
    <title> enkripsi </title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/c
ss/bootstrap.min.css" 
    integrity="sha384-
JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ 0Z"
    crossorigin="anonymous">
</head>

<div class="container">
    <h1> Vigenere -Enkripsi </h1>
    <hr>

    <form action="encrypsi_act.php" method="post" data- ajax="false" class="ui-body ui-body-a
            ui-corner-all">

    <label for="basic"> Masukkan Plain Text : </label>
    <textarea class="form-
control" name="plain" id="textarea-a"> </textarea>

    <label for="basic"> Masukkan kunci : </label>
    <textarea class="form-
control" name="kunci" id="textarea-a"> </textarea> <br>
    <input type="submit" class="btn btn- success" value="Encrypt" data-theme="a">
    <input type="reset" class="btn btn- primary" value="hapus" data-theme="a">
    </form>
</div>

</html>
