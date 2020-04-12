
<html>
    <header>
        <title> Slam book </title>
        <link rel="stylesheet" href="creat.css">
		
		

    </header>

    <body>
        <body>
            <div class="container">
                <div class="card">
                        
                    <div class="form-group">
						<form method="get">
                           <input type="text" name="creater_name" class="form-control inpt" placeholder="Enter your name" required>
                    </div>
                 
                            <div class="card-body1">
                         
                                <div class="card-body2">
                            
                    <input type="submit" name="submit_creater" class="save_btn" value="Save"/>
									</form>
                            </div>
                          

                            
                         
                      <?php
						
						if(isset($_GET["submit_creater"]))
						{
							
							$name = $_GET["creater_name"];
							?>
						<div class="form">
                   
                           
                   <a href="whatsapp://send?text=https:dareforyoufrd.000webhostapp.com/all_dare/what_you_think_about_me/index.php?creater_name=<?php echo($name);?>" data-action="share/whatsapp/share"> <input type="submit" name="submit" class="save_btn" value="share with friends"/></a>
                </div>
						<?php
						}
						
						?>
                 
                
            </div>
            </div> 
                            
        
 </body>
</html>