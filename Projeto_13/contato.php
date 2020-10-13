<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icone.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Projeto 13</title>
    </head>
    <body>

        <section class="topo">
            <div class="center">
                <header>
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png">
                        </a>
                    </div><!--logo-->
                </header>
                <ul class="desktop">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre</a>
                    </li>
                    <li>
                        <a href="">Contato</a>
                    </li>
                </ul><!--desktop-->
                <div class="mobile">
                    <i class="fas fa-align-right"></i>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="sobre.php">Sobre</a>
                        </li>
                        <li>
                            <a href="">Contato</a>
                        </li>
                    </ul>
                </div><!--mobile-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </section><!--topo-->

        <section class="contato">
            <div class="center">
                <div class="w50 contato-info">
                    <h2>A mais importante,<br>primeira conversa.</h2>
                    <br>
                    <p><b>Telefone: </b>(11) 9XXXX-XXXX</p>
                    <p><b>E-mail: </b>contato@contato.com.br</p>
                    <p><b>Endereço: </b>Rua do Expressionismo, 190 - Jardim do Tiro - São Paulo - SP, 02842-130</p>
                    <br>
                    <div class="map-container">
                        <div id="mapa"></div><!--mapa-->
                    </div><!--map-container-->
                </div><!--w50 contato-info-->
                <div class="w50 contato-form">
                    <form>
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="email" name="email" placeholder="E-mail">
                        <select name="select-box" placeholder="Contato comercial">
                            <option value="">Geral</option>
                            <option value="">Suporte</option>
                        </select>
                        <input type="text" name="empresa" placeholder="Empresa">
                        <textarea name="mensagem" placeholder="Fale mais sobre sua necessidade..."></textarea>
                        <input type="submit" value="Enviar Formulário">
                    </form>
                </div><!--w50 contato-form-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </section><!--contato-->

        <footer style="padding: 30px 0">
            <div class="center">
                <div class="col-footer">
                    <h2>Suporte</h2>
                    <a href="">Contato</a>
                    <a href="">Blog</a>
                    <a href="">FAQ's</a>
                </div><!--col-footer-->
                <div class="col-footer">
                    <h2>Consultoria</h2>
                    <a href="">Metodologia</a>
                    <a href="">Cases</a>
                </div><!--col-footer-->
                <div class="col-footer">
                    <h2>Empresa</h2>
                    <a href="">Sobre</a>
                    <a href="">Política de Privacidade</a>
                </div><!--col-footer-->
                <div style="width: 40%; text-align: right;" class="col-footer">
                    <img src="images/logo-dummy.png">
                </div><!--col-footer-->
            </div><!--center-->
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/menu-responsivo.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA-viP9c4u8mTdyWG7wGtDA3DymgvOHi-k"></script>
        <script src="js/map.js"></script>

    </body>
</html>