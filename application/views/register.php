<div class="container" style="width: 300px" ">
        <h3 style="color: cadetblue; text-align: center;">Registration</h3>

    <div class="row" style="margin-left: 50px; color: <?php if($message == 'Registration Successfully !') echo 'green'; else echo 'red'; ?>">
        <?= $message ?>
    </div>
    <div class="row">
        <form class="col s12" action="register" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="email" id="email" type="email" class="validate valid" name="username">
                    <label for="email" class="active">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="password" id="password" type="password" class="validate valid" name="password">
                    <label for="password" class="active">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input  id="first_name" type="text" class="validate" name="first_name">
                    <label for="first_name" class="active">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate" name="last_name">
                    <label for="last_name" class="active">Last Name</label>
                </div>
            </div>

            <a class="waves-effect waves-light btn right"><input type="submit" value="Register"></a>

        </form>
    </div>
</div>