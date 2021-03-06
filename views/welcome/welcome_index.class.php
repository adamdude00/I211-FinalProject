<?php
/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: index.class.php
 * Description: This class defines the method "display" that displays the home page.
 */

class WelcomeIndex extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("Cash Money Bank");
        ?>    

        <html>
            <head>
                <title> <?php echo $page_title ?> </title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/style.css' />
                <script>
                    //create the JavaScript variable for the base url
                    var base_url = "<?= BASE_URL ?>";
                </script>
            </head>
            <body>

                <div class="buttons">
                    <a href="<?= BASE_URL ?>/user/register">Register</a>
                    <a href="<?= BASE_URL ?>/account/login">Login</a>
                    <a href="account/index/">View Accounts</a>
                    <a href="user/index/">View Users</a>
                    <a href ="about.html">About</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tellus tellus, finibus nec porta ac, mattis ac lacus. Praesent accumsan odio felis, ut consectetur odio facilisis sit amet. Suspendisse semper urna a commodo aliquet. Duis ac tortor vitae erat interdum iaculis. Donec congue vitae nisl et efficitur. Integer id justo vitae enim ultricies fermentum. Sed non arcu fringilla, imperdiet risus ut, porttitor mauris. Vivamus at elit tincidunt, vulputate odio sed, vulputate augue.</p>
                <br>
                <p>Suspendisse consequat maximus sem, vel malesuada dui convallis nec. Donec blandit metus nisi, ac feugiat neque viverra vel. Fusce luctus rhoncus aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sapien lacus, tempus efficitur mi ut, porta vestibulum dolor. Nulla vel facilisis est. In purus metus, pellentesque tristique quam vel, consectetur pretium nibh.</p>
                <br>
                <p>Nullam et eros vestibulum, mollis dui sed, sagittis dolor. Suspendisse lacinia orci ut fringilla feugiat. Donec eget sem accumsan, ullamcorper sapien ac, mollis risus. Donec vitae massa non eros congue tincidunt vitae ut nulla. Nam maximus egestas lectus a iaculis. Vivamus eget ornare nibh. Morbi faucibus arcu eu tellus posuere, pellentesque pulvinar diam hendrerit. Vestibulum ut nisl luctus, eleifend lorem vitae, malesuada neque. Donec eu lectus ante. Pellentesque non euismod risus. Suspendisse vel molestie libero. Quisque a porta lacus, a aliquet purus. Integer sit amet leo rutrum, laoreet urna in, pharetra ligula. Suspendisse aliquet posuere urna et pellentesque.</p>
                <br>
                <p>Phasellus blandit ac nunc vitae varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque sem orci, interdum sed mollis ac, sollicitudin ut mauris. Aliquam finibus nisl ut metus egestas, et hendrerit diam efficitur. Integer lectus enim, aliquam ac enim a, viverra porttitor nisi. Aliquam risus odio, laoreet nec facilisis quis, rutrum vitae mi. Nulla interdum interdum pretium. Suspendisse in est venenatis, convallis quam ut, bibendum felis.</p>
                <br>
                <p>Aliquam vitae bibendum sapien. Etiam tincidunt leo nulla, nec laoreet velit porttitor malesuada. Pellentesque lacinia laoreet aliquam. Aenean in placerat risus, ut cursus arcu. Suspendisse ac dolor maximus diam fermentum imperdiet. Duis posuere diam ac felis viverra, euismod facilisis odio pharetra. In non vulputate est.</p>



            </body>
        </html>
        <?php
        //display page footer
        // parent::displayFooter();
    }

}
