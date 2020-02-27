<?php 



?><div class="wrapper text-center" style="background-color: #c3c3fb">
<div class="container" >
    <div class="row" >
        <div class="card-header bg-secondary bg-sample"  style="border:1px solid black; margin:auto">
        <div class="card mt-2" >
        <h1 class="bg-info">REGISTRATION FORM</h1>
    </div>
    <div class="card-body">
        <form method="POST" action="validation.php">
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                <label for="input">FIRST NAME</label>
                </div>
                <div class="col-6">
                <input type="text" name="fname" id="" placeholder="FIRST NAME" required>
                </div>
            </div>

            <div class="form-group row col-12 text-center">
                <div class="col-6">
                <label for="input">MIDDLE NAME</label>  
                </div>
                <div class="col-6">
                <input type="text" name="midname" id="" placeholder="MIDDLE NAME" required>
                </div>
            </div>

            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">LAST NAME</label>
                </div>
                <div class="col-6">
                <input type="text" name="lname" id="" placeholder="LAST NAME" required>
                </div>
            </div>

            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">ADDRESS</label>
                </div>
                <div class="col-6">
                <input type="text" name="add" id="" placeholder="ADDRESS" required>
                </div>
            </div>

            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">DATE OF BIRTH</label>
                </div>
                <div class="col-6">
                <input type="date" name="DoB" id="" required>
                </div>
            </div>

            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">PLACE OF BIRTH</label>
                </div>
                <div class="col-6">
                <input type="text" name="PlacOfBirth" id="" placeholder="Birth Place" required>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">GUARDIAN</label>
                </div>
                <div class="col-6">
                <input type="text" name="Guardianfname" id="" placeholder="Guardian's First Name" required><br>
                <input type="text" name="Guardianmidname" id="" placeholder="Guardian's Middle Name" required><br>
                <input type="text" name="Guardianlname" id="" placeholder="Guardian's Last Name" required><br>
                </div>
               
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">CONTACT NUMBER</label>
                </div>
                <div class="col-6">
                <input type="text" name="ContactNum" id="" placeholder="ex.+639124758369" required>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">CIVIL STATUS</label>
                </div>
                <div class="col-6">
                <input type="text" name="CivilStatus" id="" placeholder="Civil Status" required>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                   <label for="input">SCHOOL YEAR</label>
                </div>
                <div class="col-6">
                <input type="text" name="Schoolyear" id="" placeholder="ex. 2017-2018" required>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">YEAR LEVEL</label>
                </div>
                <div class="col-6">
                    <select name="yearlevel" id="" required>
                <option value="1styr">1st YEAR</option> 
                <option value="2ndyr">2nd YEAR</option>
                <option value="3rdyr">3rd YEAR</option> 
                <option value="4thyr">4th YEAR</option>
                </select>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">COURSE</label>
                </div>
                <div class="col-12">
                    <select name="course" id="" required>
                <option default>Please select your course</option>
                <option>B.S. in Automotive Mechanical Technology</option>
                <option>B.S. in Electrical and Technology Management</option>
                <option>B.S. in Electro-Mechanical Technology</option>
                <option>B.S. in Electronics and Communication Technology</option>
                <option>B.S. in Applied Mathematics</option>
                <option>B.S. in Applied Physical Sciences</option>
                <option>B.S. in Chemistry</option>
                <option>B.S. in Environmental Science and Technology</option>
                <option>B.S. in Food Science and Technology</option>
                <option>M.S. in Applied Mathematical Sciences</option>
                <option>M.S. in Environmental Science and Technology</option>
                <option>B.S. in Architecture</option>
                <option>B.S. in Civil Engineering</option>
                <option>B.S. in Electrical Engineering</option>
                <option>B.S. in Electronics Engineering</option>
                <option>B.S. in Mechanical Engineering</option>
                <option>Bachelor of Elementary Education</option>
                <option>Bachelor of Public Administration</option>
                <option>Bachelor of Secondary Education</option>
                <option>Bachelor of Technical Teacher Education</option>
                <option>B.S. in Computer Engineering</option>
                <option>B.S. in Information Technology</option>
                <option>B.S. in Technology Communication Management</option>
                <option>B.S. in Data Science</option>
                </select>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">EMAIL</label>
                </div>
                <div class="col-6">
                    <input type="email" name="email" id="email" placeholder="ex. hello@world.com" required>
                </div>
            </div>
            <div class="form-group row col-12 text-center">
                <div class="col-6">
                    <label for="input">GENDER</label>
                </div>
                <div class="col-6">
                    <input type="radio" name="gender" id="" checked> <label for="input">MALE</label>
                    <input type="radio" name="gender" id=""> <label for="input">FEMALE</label>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary form control" value="submit">
            </div>
    </form>
    </div>
    </div>
</div>
<div class="card-footer text-center">
    Copyright &copy; 2020
</div>