<html>

<body>

<script type="text/javascript">

function display()
{
    var x = new XMLHttpRequest();

    var n = document.getElementById("n").value;

    x.open("GET", "book.php?n=" + n, true);

    x.send();

    x.onreadystatechange = function()
    {
        if (x.readyState == 4 && x.status == 200)
        {
            document.getElementById("show").innerHTML =
                x.responseText;
        }
    };
}

</script>

Search Book:

<input type="text" id="n" onchange="display()">

<h3 id="show"></h3>

</body>
</html>
