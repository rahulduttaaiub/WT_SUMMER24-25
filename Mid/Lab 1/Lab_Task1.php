<!DOCTYPE html>
<html lang="en">
<head>

 
</head>
<body>
 
 <div class="form-container">
    <h2>Student Registration Form</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <!-- Name -->
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
 
        <!-- Student ID -->
        <div class="form-group">
            <label for="studentId">Student ID:</label>
            <input type="text" id="studentId" name="studentId" required>
        </div>
 
 
       
        <!-- Email -->
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>
 
        <!-- Department -->
        <div class="form-group">
            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="">--Select Department--</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
                <option value="Architecture">Architecture</option>
            </select>
        </div>
 
        <!-- Profile Picture -->
        <div class="form-group">
            <label for="profile">Profile Picture:</label>
            <input type="file" id="profile" name="profile" accept="image/*" required>
        </div>
 
        <!-- Submit -->
        <button type="submit" class="submit-btn">Register</button>
 
 
    <button type="reset" class="submit-btn" style="background-color: #6c757d; margin-top: 10px;">
 
   
   
        Reset
    </button>
</div>      
    </form>
</div>
 
</body>
</html>
 
   
 
 
 