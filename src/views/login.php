
<form class="form-login" action="#" method="post">
    <div class="login-card card">
        <div class="card-header">
            <i class="icofont-travelling mr-2"></i>

            <span class="font-weight-light">IN</span>
            <span class="font-weight-bold mx-2">N'</span>
            <span class="font-weight-light">OUT</span>

            <i class="icofont-runner-alt-1 ml-2"></i>
        </div>

        <div class="card-body">
            <?php include(TEMPLATE_PATH . '/messages.php') ?>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email"
                       class="form-control
                       <?= isset($exception) ? ($exception->get('email') ? 'is-invalid' : '') : '' ?>"
                       placeholder="Informe a senha">
                <div class="invalid-feedback">
                    <?= isset($exception) ? ($exception->get('email')) : ''?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password"
                       class="form-control
                     <?= isset($exception) ? ($exception->get('password') ? 'is-invalid' : '') : '' ?>"                       placeholder="Informe a senha">
                <div class="invalid-feedback">
                    <?= isset($exception) ? ($exception->get('password')) : ''?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-lg btn-primary">Entrar</button>
        </div>
    </div>
</form>

