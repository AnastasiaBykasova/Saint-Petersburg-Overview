<form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ФИО'">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите email'">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите тему'">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Напишите сообщение'"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button">Отправить</button>
                            </div>
                        </form>
                        <?php
                        $day_today = date("Y-m-d H:i:s"); //текущее время
                        include "php_extra/db_connect.php";
                        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
                            $query = "INSERT INTO messages (message_name, message_email, message_subject, message_text, message_day, message_time) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['subject']}', '{$_POST['message']}', '{$day_today}', '{$day_today}')"; 
                    
                            $result = mysqli_query($link, $query);
                        }
                        ?>