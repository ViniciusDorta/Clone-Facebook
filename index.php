<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Facebook</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <form method="POST" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email" placeholder="e-mail" />
                </div>
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" placeholder="senha" />
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar" />
                </div>
            </form>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="./image/facebook-login.jpg">
            </div>
            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <p>É gratuito e sempre será!</p>

                <form method="POST" class="criar-conta">
                    <div class="w50">
                        <input type="text" placeholder="Nome" />
                    </div>
                    <div class="w50">
                        <input type="text" placeholder="Sobrenome" />
                    </div>
                    <div class="w100">
                        <input type="email" placeholder="Celular ou email" />
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="Nova senha" />
                    </div>
                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select class="nascimento" name="nacsDia">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select class="nascimento" name="nacsMes">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Setembro</option>
                            <option value="9">Agosto</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select class="nascimento" name="nacsAno">
                        <?php
                                for($i = 1960; $i <= 2023; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar">
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="linguas">
        <div class="center">
            <a class="selected-linguas" href="#">Português(BR)</a>
            <a href="#">English(US)</a>
            <a href="#">Español</a>
            <a href="#">Français(France)</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsch</a>
        </div>
    </section>
</body>

</html>