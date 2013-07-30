<div class='loggedin'>
    
    <h4>WELCOME</h4>
    <!--echo '<h2><span style=\'color:#000\'> '.$firstname.' '.$surname.' </span></h2>--->
    <br />
    <h4>Register your course and its goal !</h4>
    
    <form id='randomInsert' action='<?php echo URL; ?>dashboard/xhrInsert/' method='post'> <!-- xhrInsert is an ajax thing --->
      <input type='text' name='text' /><br />
      <input type='submit' />
    </form>
    
    <br />
    
    <div id="listInserts">
        
    </div>

</div>