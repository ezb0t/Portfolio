<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css ">
        <title>Projeto_AppAnotações</title>
    </head>
    <body>
        <div class="container">
            
        </div><!--container-->

        <div class="btn-add">+</div><!--btn-add-->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(function(){
                $('.btn-add').click(function(){
                    var el = '<div class="anotacao-single"><textarea placeholder="Nova anotação"></textarea></div>';
                    $('.container').append(el);

                    var textArea = $('.anotacao-single').last().find('textarea');

                    var date = new Date();
                    var hh = date.getHours();
                    var mm = date.getMinutes();

                    var finalTime = hh+"h"+mm;
                    textArea.html("Nova anotação: "+finalTime);
                })
            })
        </script>
    </body>
</html>