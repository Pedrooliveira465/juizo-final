<div class="container-fluid">
    <div classs="row">
        <div class=" my-3 col-sm-6 offset-sm-3">
            <div>
                <h3 class="text-center">login</h3>


                <form action="/lista" method="POST" id="form">
                    <div class="form">
                        <div clas="my-3">
                            <label> Email</label>
                            <input type="email" name="text_usuario" placeholder="Usuário" required class="form-control"><br>
                        </div>

                        <div class="my-3">
                            <label>Senha</label>
                            <input type="password" name="text_password" placeholder="Senha " required class="form-control"><br>
                        </div>

                        <div>
                            <input type="submit" value="Entrar" class="btn btn-primary"><br>
                        </div>

                    <div>
                        <button><a href="/cadastro">Cadastre-se</a></button>
                    </div>

                    </div>
                </form>

                <?php if (isset($_SESSION['erro'])) : ?>
                    <div class="alert alert-danger text-center">
                        <?= $_SESSION['erro'] ?>
                    </div>

                <?php endif; ?>

            </div>


        </div>

    </div>

</div>