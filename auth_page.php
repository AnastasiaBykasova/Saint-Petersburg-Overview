<?php
echo "Авторизуйтесь, чтобы иметь полный доступ к личному кабинету";
// require "auth_page.php";
echo '
                <section class="ftco-section contact-section">
                    <div class="container">
                    <div class="row block-9 justify-content-center mb-5">
                        <div class="col-md-8 mb-md-5">
                        <h2 class="text-center">Авторизация</h2>
                        <form formmethod=POST action="#" class="bg-light p-5 contact-form">
                            <div class="form-group">
                            <input type="text" name="user_email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <input type="password" name="user_password" class="form-control" placeholder="Пароль">
                            </div>
                            <div class="form-group">
                            <input type="submit" formmethod=POST value="Отправить" class="btn btn-primary py-3 px-5">
                            </div>
                            <p class="if_no_acc">Нет аккаунта? <a href="regist_page.php">Зарегистрироваться</a></p>
                        </form>
                        </div>
                    </div>
                    </div>
                </section>';
?>