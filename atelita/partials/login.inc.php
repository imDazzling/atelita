<div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Inicia Sesión</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Iniciar con Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Iniciar con Google</span> </button>
            </div>
            <p style="text-align:center"> O  </p>
            <input name="usuario" type="text" id="userlogin" class="form-control" placeholder="User ID" required="" autofocus="">
            <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
            <a href="#" id="forgot_pswd">¿Te olvidaste tu contraseña?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Registrarse</button>
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Dirección de Email" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Cambia tu contraseña</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Atrás</a>
            </form>
            
            <form action="/signup/" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Iniciar con Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Iniciar con Google</span> </button>
                </div>
                
                <p style="text-align:center">O</p>

                <input type="text" id="user-name" class="form-control" placeholder="Nombre completo" required="" autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Dirección de Email" required autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Contraseña" required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repite tu contraseña" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Registrarse</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Atrás</a>
            </form>
            <br>
            
    </div>