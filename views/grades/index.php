<div class="loggedin">

    <?php echo $this->msg; ?><br />
    
    <h4>Register your course's grades</h4>
    
    <form id='randomInsert' action='<?php echo URL; ?>grades/xhrInsert/' method='post'><!-- xhrInsert is an ajax thing ---> 
      <input type='text' name='text' /><br /><br />
      <input type='submit' value='Submit' />
    </form>
   
    <br />
    
    <div id="listInserts">
        
    </div>
    
</div>