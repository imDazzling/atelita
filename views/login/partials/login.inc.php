<div id="logreg-forms">
        <form class="form-signin" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Inicia Sesión</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Iniciar con Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google"></i> Iniciar con Google</span> </button>
            </div>
            <p style="text-align:center"> O  </p>
            <input name="usuario" type="text" id="userlogin" class="form-control" placeholder="Usuario" required="" autofocus="">
            <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
            
            <a href="#"><button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Ingresar</button></a>
            <a href="#" id="forgot_pswd">¿Te olvidaste tu contraseña?</a>

            <p><?php echo $mensaje_alerta ?></p>

            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Registrarse</button>
            </form>

            <form class="form-reset" method="POST">
                <input type="email" id="resetEmail" class="form-control" placeholder="Dirección de Email" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Cambia tu contraseña</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Atrás</a>
            </form>
            
            <form class="form-signup" method="POST">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Iniciar con Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google"></i> Iniciar con Google</span> </button>
                </div>
                
                <p style="text-align:center">O</p>

                <input name="usuario_reg" type="text" id="user-name" class="form-control" placeholder="Nombre de usuario" required="" autofocus="">
                <input name="email_reg" type="email" id="user-email" class="form-control" placeholder="Dirección de Email" required autofocus="">
                <input name="pass_reg" type="password" id="user-pass" class="form-control" placeholder="Contraseña" required autofocus="">
                <input name="copypass_reg" type="password" id="user-repeatpass" class="form-control" placeholder="Repite tu contraseña" required autofocus="">

                <a href="#"><button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Registrarse</button></a>
                <p><?php echo $mensaje_reg ?></p>

                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Atrás</a>
            </form>
            <br>
            
    </div>