<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Facebook</title>
    <link rel="stylesheet" href="css/style.css">
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
                <img src="">
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
                    <div class="clear"></div>
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar">
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

</body>

</html>