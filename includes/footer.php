<footer id="response-text" class="response-text <?php if((isset($_SESSION["error"]) && $_SESSION["error"]) || (isset($_SESSION["valid_signup"]) && $_SESSION["valid_signup"])) echo "visible"; ?>">
	<p>
        <?php 
            if(isset($_SESSION["error"]) && $_SESSION["error"]){
                echo $_SESSION["error_message"];
                
                session_unset();
            } 
            else if(isset($_SESSION["valid_signup"]) && $_SESSION["valid_signup"]){
                echo $_SESSION["valid_signup_message"];
                
                session_unset();
            } 
        ?>
    </p>
</footer>
