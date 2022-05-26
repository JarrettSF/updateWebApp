<!DOCTYPE html>


<html>
     <!--    formal header   -->  
    
    <head>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Calendar</title>
        
        <meta name="description" content="A Calendar">
        
        <link rel="stylesheet" href="cal5.css">
        
    </head>
    
    
    <body>

        
       
      <!--   event    -->      
        <div class="one">Add Events</div>
        
         <!--  form begins     -->  
      
        
        
       <form  action="connect.php" method="POST"> 
            
                   <?php
        include("cal5.php");
            ?>
                 
             <!--  div/ class that holds instructions about labels and input styling   --> 
            <div class ="two">
                
  <label class ="alpha" for="birthday">Add A Birthday</label><br>
            
  <input id = "e" class ="alpha" type="date" name="party" min="2022-01-01" max="2022-12-31" ><span class="error"> <?php echo $partyErr;?></span><br>
                
                <label class ="alpha" for="guest">How many guest?</label><br>
            
                <input id = "em" class ="alpha" type="int" id="G" name="gs" min="1" max="100">
                <span class="error"> <?php echo $gsErr;?></span><br>
        
                
                <div class="k">
                    
  <label class ="delta" for="reminder">Add A Reminder</label><br>
            
  <input id = "emp" class ="delta" type="date" name="reminder" min="2000-04-01" max="2017-04-30" >
                <span class="error"> <?php echo $reminderErr;?></span><br>
                    
                    <label class ="delta" for="notes">Add A note</label><br>
                <input id = "empt" class ="delta" type="text"  name="note" placeholder="Write note...">
                    <span class="error"> <?php echo $noteErr;?></span>
                </div>
                    
                
                    <div class="l">
  <label class ="sigma" for="appointment">Event Name</label><br>
            
  <input id = "empty" class ="sigma" type="text" name="apt"  >
                        <span class="error"> <?php echo $aptErr;?></span><br>    
                        <label class ="delta" for="time">Add A time</label><br>
                <input id = "emptyOut" class ="sigma" type="time"  name="time"  min="09:00" max="18:00" >
                   <span class="error"> <?php echo $timeErr;?>  
                       <br>
                       
                       
                       <label for="email">Email:</label>
<input type="email" id="email" name="email">
                       <span class="error"> <?php echo $emailErr;?>
                </div>      
                
                
                </div>
            <br > <input id = "submit" name = "submit" type="submit">
           
           
           
          
</form> <br > <br > <br > <br > <br > <br > <br > <br > <br > <br > 
    
         <div id = "myCalendar"> Calendar </div>
        
   <script src="cal5.js"></script>
    </body>
    
    
</html>