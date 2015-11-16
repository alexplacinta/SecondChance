<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Second Chance Moldova</title>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="/assets/materialize.min.css">
    <link rel="stylesheet" href="/assets/style/style.css">
    <script src="/assets/jquery-2.1.4.min (1).js"></script>
    <script src="/assets/materialize.min.js"></script>
    
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo"><img src="/assets/img/LOGO4.png" style="width: 120px; margin-top: -0px;"></a>
        <a class="link_large left" href="/product"><span class="link">PRODUCTS</span></a>
        <a class="link left" href="/project"><span class="link">PROJECTS</span></a>
        <?php
        if (isset($this->session->userdata['current_user'])) {
        ?>
            <a class="link right" style="margin-left: -20px; font: bold; color: gray;" href="/login/logout"><span class="link">Log out</span></a>
            <a class="link right" ><span class="link" style="margin-left: 30px;text-decoration: underline;"><?= $this->session->userdata['current_user']['username'].'('.$this->session->userdata['current_user']['role'].')' ?></span></a>
                
            <?php if ($this->session->userdata['current_user']['role'] == 'user') { ?>
                <a class="link right" ><span class="link">Create project</span></a>
            <?php } else { ?>
                <a class="link right"><span class="link"><img src="/assets/img/approve_notes.png" style="width: 20px;">Approve projects</span></a>
            <?php } ?>
        <?php } else { ?>
        <a class="link right" href="/login"><span class="link">Login</span></a>
        <a class="link right" href="/register"><span class="link">Sign Up</span></a>

<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <form class="col s12" action="register" method="post">-->
<!--                    <div class="row">-->
<!--                        <div class="input-field col s6">-->
<!--                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">-->
<!--                            <label for="first_name">First Name</label>-->
<!--                        </div>-->
<!--                        <div class="input-field col s6">-->
<!--                            <input id="last_name" type="text" class="validate">-->
<!--                            <label for="last_name">Last Name</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="input-field col s12">-->
<!--                            <input disabled value="I am not editable" id="disabled" type="text" class="validate">-->
<!--                            <label for="disabled">Disabled</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="input-field col s12">-->
<!--                            <input id="password" type="password" class="validate">-->
<!--                            <label for="password">Password</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="input-field col s12">-->
<!--                            <input id="email" type="email" class="validate">-->
<!--                            <label for="email">Email</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->

        <div id="modal_signin" class="modal">
            <div class="modal-content">
                        <div class="container">
                            <div class="row">
                                <form class="col s12" action="login" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email" type="email" class="validate" name="username">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="waves-effect waves-light btn right"><input type="submit" value="Login"></a>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>

        </div>
        <?php } ?>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>