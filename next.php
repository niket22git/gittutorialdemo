<?php 
//dipeshs809@gmail.com
            $to_mail = "b21111@students.iitmandi.ac.in";
            $subject ="Assignment 2 group 5";
            $message = "form details below"."\r\n". 
            "First Name :" .$_POST["first_name"]."\r\n".
            "Last Name :". $_POST["last_name"]."\r\n".
            "Email :". $_POST["email"]."\r\n".
            "Telephone :". $_POST["tele_number"]."\r\n".
            "Comments :".$_POST["comments"]."r/n"
            ;
            // $headers ="From :".$_POST["email"];
            $headers = "From: ".$_POST["email"]."\r\n".
            'Reply-To: '.$_POST["email"]."\r\n" . 'X-Mailer: PHP/' . phpversion();
            if(mail($to_mail,$subject,$message,$headers)){
                echo "Email successfully sent to ".$to_mail;
                
            }
            else{
                echo "failed";
            }
            echo "<br>";
            $JSON = file_get_contents("wizard.json");
            $jsonIterator  = json_decode($JSON,true);

            foreach ($jsonIterator as $item){
                echo $item["name"]. " 's wand is ";
                foreach($item["wand"] as $sub_element){
                    echo $sub_element["wood"] . ", ";
                    echo $sub_element["length"] ,", with a ";
                    echo $sub_element["core"] ." core.";
                }
                echo "<br>";
            }

        ?>
        