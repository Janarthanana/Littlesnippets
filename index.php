<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Testing Button Click</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="">
            <!-- <input type="button" value="button 1" class="myBtn">
            <input type="button" value="button 2" class="myBtn"> -->

            <input id='Click Logistics' type='button' value='Click Logistics' class='myclassname'/>
            <input id='Extraviz' type='button' value='Extraviz' class='myclassname'/>
            <input id='Another Company' type='button' value='Another Company' class='myclassname'/>
        </form>
    </body>
    </html>

    <script type="text/javascript">
   /*jQuery(document).ready(function(){
      jQuery('.myBtn').on('click', function(){
            var b = document.getElementsByClassName("jsBtnContainer");
            var a = $(".jsBtnContainer");
            alert(a);
            alert('You have clicked');
      });
        });*/

        $(document).ready(function() {
   $('.myclassname').each(function() {
      $(this).click(function(){
          var id = $(this).attr('id');
          alert(id);
          
      });
   });
});
    </script>