<form method="POST" action="">
    <input type="text" name="nom" placeholder="Votre nom" value="<?php if (isset($_POST['nom'])) {
                                                                        echo $_POST['nom'];
                                                                    } ?>" /><br /><br />
    <input type="email" name="mail" placeholder="Votre email" value="<?php if (isset($_POST['mail'])) {
                                                                            echo $_POST['mail'];
                                                                        } ?>" /><br /><br />
    <textarea name="message" placeholder="Votre message"><?php if (isset($_POST['message'])) {
                                                                echo $_POST['message'];
                                                            } ?></textarea><br /><br />
    <input type="submit" value="Envoyer !" name="mailform" />
</form>