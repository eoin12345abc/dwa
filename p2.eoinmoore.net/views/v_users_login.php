<form method='POST' action='/users/p_login'>
 
    Email<br>
    <input type='text' name='email'>    
    <br><br>
    
    Password<br>
    <input type='password' name='password'>
    <br><br>
	<! generate a random number so as to have a randomized login-failed message !>
    <? $num = rand(1,4)?>  
    <? if($error&&$num==1): ?>
            My esteemed colleague.  Your login has failed.  I am terribly sorry.  Please check your email and password.
        </div>
        <br>
	<? elseif($error&&$num==2): ?>
            If I told you your email and password combination failed, would you still come back to me tomorrow?
        </div>
        <br>
	<? elseif($error&&$num==3): ?>
            It is a terrible thing, to have a failed email and password combination.  
        </div>
        <br>
	<? elseif($error&&$num==4): ?>
            I wanted to tell you while you were typing, but you messed up your email and password combination.
        </div>
        <br>	
    <? endif; ?>
 
    <input type='submit'>
 
</form>