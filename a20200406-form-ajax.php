<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  </head>
  <body>
    
    <form action="" name="form1" onsubmit="return mysubmit()">
        <input type="number" id="a" name="a"> + <input type="number" id="b" name="b"> <button>=</button>
        <input type="text" id="c" disabled="disabled">
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>  
    <script>
        function mysubmit() {
            $.post('a20200406-form-ajax-api.php',$(document.form1).serialize(),function(data){
                console.log(data);
                $('#c').val(data.c);
            },'json');

            return false;
        }
        //以下跟上方是一樣的
        // function mysubmit() {
        //     $.post('a20200406-form-ajax-api.php',{
        //         // a:document.queryselector('#a').value,
        //         // b:document.queryselector('#b').value
        //         a:$('#a').val(),
        //         b:$('#b').val()
        //     },function(data){
        //         console.log(data);
        //         $('#c').val(data.c);
        //     },'json');

        //     return false;
        // }
    </script>
  </body>
</html>