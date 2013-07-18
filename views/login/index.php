<div class="group">
    <h1>Login</h1>
    
    <form action="login/run" method="post" style="margin-left: 400px;">
        
        <label>Username</label>&nbsp;&nbsp;<input type="text" name="login" /><br><br> 
        <label>Password</label>&nbsp;&nbsp;<input type="password" name="password" /><br><br>
        <label></label><input type="submit" value="Submit"/>
    </form>

</div>

<div class="advices">
    <a href='<?php echo URL; ?>register'><div class="love">
            <h2>Want to study!</h2>
            <h4>Register</h4>
            <img src="public/images/heart.png" />
    </div></a>
    <a href='<?php echo URL; ?>login'><div class="plan">
            <h2>Know how to plan!</h2>
            <h4>Login</h4>
            <img src="public/images/pencil.png" />
    </div></a>
    <a href='<?php echo URL; ?>help'><div class="schedule">
            <h2>Respect your schedule!</h2>
            <h4>Contact</h4>
            <img src="public/images/clock.png" />
    </div></a>
</div>