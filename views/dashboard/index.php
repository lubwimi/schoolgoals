<div class='loggedin'>
    
   <?php echo $this->msg; ?>
    <br />
    <h4>Register your course and your goal !</h4>
    
    <form id='randomInsert' action='<?php echo URL; ?>dashboard/xhrInsert/' method='post'> <!-- xhrInsert is an ajax thing --->
      <input type='text' name='text' /><br /><br />
      <input type='submit' value='Submit'/>
    </form>
    
    <br />
    
    <div id="listInserts">
        
    </div>

</div>