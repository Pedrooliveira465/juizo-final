<div class="container">
    <div classs="row">
        <div class="col-sm-6 offset-sm-3 my-5 ">
            <h3 class="text-center">Cadastro</h3>

            <!-- Formulário para a criação de um novo utilizador -->
            <form action="/cadastro_cliente" method="post" id="form">
                <div>
                    
                <!-- Email -->
                <div class="my-3">
                    <label for="">Email</label>
                    <input type="email" name="text_email" placeholder="Email" class="form-control" required>
                </div>

                <!-- Senha_1 -->
                <div class="my-3">
                    <label for="">Senha</label>
                    <input type="password" name="text_senha_1" placeholder="Senha" class="form-control" required>
                </div>

                <!-- Senha_2 -->
                <div class="my-3">
                    <label for="">Confirme sua senha</label>
                    <input type="password" name="text_senha_2" placeholder="Confirme sua senha" class="form-control" required>
                </div>


                <!-- nome_completo -->
                <div class="my-3">
                    <label for="">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" class="form-control" required>
                </div>

                <!-- Cidade -->
                <div class="my-3">
                    <label for="">Cidade</label>
                    <input type="text" name="text_cidade" placeholder="Cidade" class="form-control" required>
                </div>

                <!-- Telefone -->
                <div class="my-3">
                    <label for="">Telefone</label>
                    <input type="text" name="text_telefone" placeholder="Telefone" class="form-control">
                </div>

                <!-- Submit -->
                <div class="my-4">
                    <input type="submit" value="Criar conta" class="btn btn-primary">
                </div>

                </div>

                <br>
                <br>
            </form>

        </div>

    </div>

</div>