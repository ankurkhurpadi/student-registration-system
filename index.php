<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="registration-box">

            <h1>Student Registration</h1>

            <p>Enter your details to register</p>

            <form action="submit.php" method="POST">

                <label>Student Name</label>
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Enter student name"
                    required
                >

                <label>Email</label>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Enter email address"
                    required
                >

                <label>Phone Number</label>
                <input 
                    type="text" 
                    name="phone" 
                    placeholder="Enter phone number"
                    required
                >

                <label>Course</label>

                <select name="course" required>

                    <option value="">Select Course</option>
                    <option value="BCA">BCA</option>
                    <option value="BSc Computer Science">
                        BSc Computer Science
                    </option>
                    <option value="MCA">MCA</option>
                    <option value="MSc Computer Science">
                        MSc Computer Science
                    </option>

                </select>

                <label>Address</label>

                <textarea 
                    name="address" 
                    placeholder="Enter your address"
                    required
                ></textarea>

                <button type="submit">
                    Register Student
                </button>

            </form>

        </div>

    </div>

</body>
</html>