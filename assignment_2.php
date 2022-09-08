<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2</title>
        <link rel="stylesheet" type="text/css" href="assignment.css">
    </head>
    <body>
        <form action="next.php" method="POST">
            <label class="inputs">First Name *</label>
            
            <input type="text" name="first_name"  placeholder="First name" id="first_name" style="margin-left: 70px;"required><br>
            
            
            <label for="last_name" class="inputs">Last Name *</label>
            
            <input type="text" name="last_name" placeholder="Last name" id="last_name" style="margin-left: 74px;"required><br>
           
            <label for="email" class="inputs">Email Address</label>
            
            <input type="email"name="email" id="email"style="margin-left: 58px;" required><br>
            
            <label for="tele_number" class="inputs">Telephone Number</label>
            <input type="number" name="tele_number" id="tele_number" style="margin-left: 20px;"required><br>
            <label for="comments" class="inputs" style="vertical-align:top;"> Comments</label>
            <textarea name="comments"  style="margin-left: 88px; margin-top: 5px;" rows="5" ></textarea><br>
            <input type="submit" name="submit" id="submit">
            <!-- <button type="submit" name="Submit" style="margin-left: 200px; margin-top: 5px;"> Submit</button> -->
        </form>
        
    </body>
</html>