<?php

$a[] = "Abhishek";
$a[] = "Bhavesh";
$a[] = "Chetan";
$a[] = "Dhruv";
$a[] = "Eshaan";
$a[] = "Farhan";
$a[] = "Gaurav";
$a[] = "Harsh";
$a[] = "Ishaan";
$a[] = "Jayant";
$a[] = "Karan";
$a[] = "Lokesh";
$a[] = "Manish";
$a[] = "Naveen";
$a[] = "Omkar";
$a[] = "Pranav";
$a[] = "Qasim";
$a[] = "Rajesh";
$a[] = "Sagar";
$a[] = "Tarun";
$a[] = "Umesh";
$a[] = "Vivek";
$a[] = "Waseem";
$a[] = "Xavier";
$a[] = "Yash";
$a[] = "Zubair";
$a[] = "Aayush";
$a[] = "Arjun";
$a[] = "Ayaan";
$a[] = "Ankit";
$a[] = "Anil";
$a[] = "Apoorv";
$a[] = "Akash";
$a[] = "Aditya";
$a[] = "Anish";
$a[] = "Amitesh";
$a[] = "Amitabh";
$a[] = "Ajay";
$a[] = "Aman";
$a[] = "Avinash";
$a[] = "Amrit";
$a[] = "Amol";
$a[] = "Ashish";
$a[] = "Ashwin";
$a[] = "Ameya";
$a[] = "Akhil";
$a[] = "Aayansh";
$a[] = "Bhanu";
$a[] = "Bharat";
$a[] = "Brijesh";
$a[] = "Balram";
$a[] = "Basavaraj";
$a[] = "Bhaskar";
$a[] = "Biren";
$a[] = "Bimal";
$a[] = "Binod";
$a[] = "Bipin";
$a[] = "Bhupendra";
$a[] = "Chirag";
$a[] = "Chandan";
$a[] = "Chetanya";
$a[] = "Chandresh";
$a[] = "Chintan";
$a[] = "Cyrus";
$a[] = "Charan";
$a[] = "Chethan";
$a[] = "Deepak";
$a[] = "Devendra";
$a[] = "Darshan";
$a[] = "Dilip";
$a[] = "Dinesh";
$a[] = "Daksh";
$a[] = "Devesh";
$a[] = "Dhananjay";
$a[] = "Dushyant";
$a[] = "Dhaval";
$a[] = "Devansh";
$a[] = "Divyansh";
$a[] = "Ekansh";
$a[] = "Eklavya";
$a[] = "Eshwar";
$a[] = "Emmanuel";
$a[] = "Faiz";
$a[] = "Faisal";
$a[] = "Farooq";
$a[] = "Firoz";
$a[] = "Fardeen";
$a[] = "Fahad";
$a[] = "Ganesh";
$a[] = "Gautam";
$a[] = "Girish";
$a[] = "Govind";
$a[] = "Gauransh";
$a[] = "Gopal";
$a[] = "Ghanshyam";
$a[] = "Gokul";
$a[] = "Himanshu";
$a[] = "Harish";
$a[] = "Hitesh";
$a[] = "Hemant";
$a[] = "Hardik";
$a[] = "Hariom";
$a[] = "Hrithik";
$a[] = "Harshal";
$a[] = "Harjit";
$a[] = "Inderjit";
$a[] = "Irfan";
$a[] = "Ishan";
$a[] = "Ibrahim";
$a[] = "Indrajit";
$a[] = "Imran";
$a[] = "Iqbal";
$a[] = "Jitendra";
$a[] = "Jignesh";
$a[] = "Jaspal";
$a[] = "Jagdish";
$a[] = "Jaidev";
$a[] = "Jeevan";
$a[] = "Junaid";
$a[] = "Jagdish";
$a[] = "Kabir";
$a[] = "Keshav";
$a[] = "Krishna";
$a[] = "Kunal";
$a[] = "Kuldeep";
$a[] = "Kishore";
$a[] = "Kailash";
$a[] = "Kartik";

$mystr = $_GET['q'];
$result = "";

if($mystr !== ""){
    $mystr = strtolower($mystr);
    $len = strlen($mystr);

    foreach($a as $element){
        
        if(stristr($mystr, substr($element, 0, $len))){
            $result= $result."$element ,"; 
        }
    }
}




// echo "This is Hint .php";
echo $result;
?>