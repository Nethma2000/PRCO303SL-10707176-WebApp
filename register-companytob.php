<?php

if(isset($_POST)) {

	//Escape Special Characters In String First
	$companyname = $_POST['companyname'];
	$contactno = $_POST['contactno'];
	$website =  $_POST['website'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$country =  $_POST['country'];
	$state = $_POST['state'];
	$city =  $_POST['city'];

	$aboutme = $_POST['aboutme'];
	$name =$_POST['name'];
    $status =  $_POST['active'];


	//Encrypt Password
	$password = base64_encode(strrev(md5($password)));


	//if email not found then we can insert new data
	if($result->num_rows == 0) {

			//This variable is used to catch errors doing upload process. False means there is some error and we need to notify that user.
		$uploadOk = true;

		//Folder where you want to save your image. THIS FOLDER MUST BE CREATED BEFORE TRYING
		$folder_dir = "uploads/logo/";

		//Getting Basename of file. So if your file location is Documents/New Folder/myResume.pdf then base name will return myResume.pdf
		$base = basename($_FILES['image']['name']); 

		//This will get us extension of your file. So myimage.pdf will return pdf. If it was image.doc then this will return doc.
		$imageFileType = pathinfo($base, PATHINFO_EXTENSION); 

		//Setting a random non repeatable file name. Uniqid will create a unique name based on current timestamp. We are using this because no two files can be of same name as it will overwrite.
		$file = uniqid() . "." . $imageFileType; 
	  
		//This is where your files will be saved so in this case it will be uploads/image/newfilename
		$filename = $folder_dir .$file;  

		//We check if file is saved to our temp location or not.
		if(file_exists($_FILES['image']['tmp_name'])) { 

			//Next we need to check if file type is of our allowed extention or not. I have only allowed pdf. You can allow doc, jpg etc. 
			if($imageFileType == "jpg" || $imageFileType == "png")  {

				//Next we need to check file size with our limit size. I have set the limit size to 5MB. Note if you set higher than 2MB then you must change your php.ini configuration and change upload_max_filesize and restart your server
				if($_FILES['image']['size'] < 500000) { // File size is less than 5MB

					//If all above condition are met then copy file from server temp location to uploads folder.
					move_uploaded_file($_FILES["image"]["tmp_name"], $filename);

				} else {
					//Size Error
					$_SESSION['uploadError'] = "Wrong Size. Max Size Allowed : 5MB";
					$uploadOk = false;
				}
			} else {
				//Format Error
				$_SESSION['uploadError'] = "Wrong Format. Only jpg & png Allowed";
				$uploadOk = false;
			}
		} else {
				//File not copied to temp location error.
				$_SESSION['uploadError'] = "Something Went Wrong. File Not Uploaded. Try Again.";
				$uploadOk = false;
			}

		//If there is any error then redirect back.
		if($uploadOk == false) {
			header("Location: register-company.php");
			exit();
		}

		//sql new registration insert query

        $con= new mysqli('localhost','root','123','git_repos_jobportal');
        if($con->connect_error){
            die("Connection failed");
        }
        
        else{
        
            $s = "select * from company where email='$email'";
            $result=mysqli_query($con,$s);
            $num=mysqli_num_rows($result);
            if($num==1){
                echo "Already registered";
        
            }
            else{
                $stmt=$con->prepare("INSERT INTO company(name, companyname, country, state, city, contactno, website, email, password, aboutme,active, logo) VALUES ('$name', '$companyname', '$country', '$state', '$city', '$contactno', '$website', '$email', '$password', '$aboutme', '$status','$file')");
            
                $stmt->execute();
                
                echo "Registration Successful";
           
        
        
                $stmt->close();
                $con->close();
            }
           
        
        }


    }
}