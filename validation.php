<?php 
$fname = $_POST["fname"];
$midname = $_POST["midname"];
$lname = $_POST["lname"];
$add = $_POST["add"];
$DoB = $_POST["DoB"];
$PlacOfBirth = $_POST["PlacOfBirth"];
$Guardianfname = $_POST["Guardianfname"];
$Guardianmidname = $_POST["Guardianmidname"];
$Guardianlname = $_POST["Guardianlname"];
$ContactNum = $_POST["ContactNum"];
$CivilStatus = $_POST["CivilStatus"];
$Schoolyear = $_POST["Schoolyear"];
$yearlevel = $_POST["yearlevel"];
$course = $_POST["course"];
$email = $_POST["email"];
$gender = $_POST["gender"];
//validation test
echo "FIRST NAME: ";
validatesName($fname);
echo "MIDDLE NAME: ";
validatesName($midname);
echo "LAST NAME: ";
validatesName($lname);
echo "ADDRESS: ";
validatesName($add);
echo "PLACE OF BIRTH: ";
validatesName($PlacOfBirth);
echo "Guardian's First Name: ";
validatesName($Guardianfname);
echo "Guardian's Middle Name: ";
validatesName($Guardianmidname);
echo "Guardian's Last Name: ";
validatesName($Guardianlname);
echo "CONTACT NUMBER: ";
isnumincorrect($ContactNum);
echo "CIVIL STATUS: ";
validatesCivilStatus($CivilStatus);
echo "SCHOOL YEAR: ";
isSchoolYearinvalid($Schoolyear);
echo "EMAIL: ";
invalidEmail($email);



function validatesName($str = null){
    if ($str) {
        if    (isEmpty($str) || startswithNum($str) || islenincorrect($str) || startSpecialChar($str) || isTags($str)){
            echo " is invalid<br>";
        }else
        echo " is valid<br>";
    }
}
function validatesCivilStatus($str = null){
    if ($str) {
    if    (isEmpty($str) || startswithNum($str) || islenincorrect($str) || startSpecialChar($str) || isTags($str) || iscivilstatvalid($str)){
        echo "it is invalid<br>";
    }else
    echo "it is valid<br>";
    }
}
// 1.validates if null or empty
function isEmpty($str = null){
    if ($str) {
        $cleanstr = trim($str);
        if (strlen($cleanstr)<=0) {
            echo  "input is Empty<br>";
            return true;
    }else
        return false;
}}
//7.name should not start with number
function startswithNum($str = null){
    $firstChar =substr($str,0 ,1);
    if (is_numeric($firstChar)) {
            echo "input starts with a Number<br>";
            return true;
        }else
        return false;
}

//5.name should contain not less 2 lenght
function islenincorrect($str = null){
    if ($str) {
        if (strlen($str)<2 || strlen($str)>50 ) {
            echo "input is less than 2 or more than 20 Characters<br>";
            return true;
        }else
        return false;
    }
}
//6.input should not start with special character
function startSpecialChar($str = null){
    if ($str) {
        $firstChar =substr($str,0 ,1);
        if (preg_match('/[^a-zA-Z\d]/', $firstChar)) {
            echo "input starts with a Special Character<br>";
            return true;
        }else
        return false;
    }
}

//8.input should not contain any html tags
function isTags($str = null){
    if ($str) {
        if (preg_match('/[^a-zA-Z\d ]/',$str)){
            echo "input has a tag<br>";
            return true;
        }else
        return false;
    }
}


/*3.contact number should only be a number not a string
*4.contact number should follow a pattern +63 prefix and followed by 10 digits only*/
function isnumincorrect($str = null){
    if ($str) {
        if (strlen($str)==13) 
            if (($str[0]=="+") &&  ($str[1]==6) && ($str[2]==3) && ($str[3]==9)){
                echo "is valid<br>";
                return false;
            }else{
                echo "input is Incorrect Number or Incorrect Format<br>";
                return true;
        }else{
        echo "input is Incorrect format<br>";
                return true;
        }
    }
}
//9. email should be in correct format
function invalidEmail($str =null){
    if ($str) {
            if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
                echo "is valid<br>";
                return false;
              } else {
                echo("$str is not a valid email address<br>");
                return true;
              }
    }
}
//civil status should be true
//married,single,widowed,separated,divorced
function iscivilstatvalid($str = null){
    if ($str) {
            if (!$str =="married" || !$str == "single" || !$str == "widowed" || !$str == "separated"|| !$str == "separated") {
                echo "input is invalid civil status<br>";
                return true;
            }else
            echo "is valid<br>";
            return false;
    }
}


//validation of school year
function isSchoolYearinvalid($str = null){
    if ($str) {
        $year1 =substr($str,0 ,4);
        $year2 =substr($str,5 ,4);
        if ((strlen($str)==9) && ($str[4])=="-" && is_numeric($year1) && is_numeric($year2)){
            echo "is valid<br>";
            return false;
        }else
            echo "invalid<br>";
            return true;
    }
}
?>
<form action="index.php">
    <input type="submit" value="Back to Registration form">
</form>