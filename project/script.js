$(document).ready(function() {
    // Validate Student Login
    $("#studentLoginForm").submit(function(event) {
        event.preventDefault(); // Prevent form submission

        var username = $("#studentUsername").val();
        var password = $("#studentPassword").val();
        var valid = true;
        const numberRegex = /^[0-9]+$/;

        $("#studentError").text(""); // Clear previous errors

        // Basic validation for username and password
        if (username === "" || password === "") {
            $("#studentError").text("All fields are required.");
            valid = false;
        } else if (!numberRegex.test(username)) {
            $("#studentError").text("Invalid student username.");
            valid = false;
        } else if (!numberRegex.test(password)  && password<9 ) {
            $("#studentError").text("Incorrect student password.");
            valid = false;
        }

        if (valid) {
            alert("Student login successful!");
            // Proceed with login logic or redirect
        }
    });

    // Validate Admin Login
    $("#adminLoginForm").submit(function(event) {
        event.preventDefault(); // Prevent form submission

        var username = $("#adminUsername").val();
        var password = $("#adminPassword").val();
        var valid = true;
        $("#adminError").text(""); // Clear previous errors

        // Basic validation for username and password
        if (username === "" || password === "") {
            $("#adminError").text("All fields are required.");
            valid = false;
        } else if (username !== "admin") {
            $("#adminError").text("Invalid admin username.");
            valid = false;
        } else if (password !== "rec") {
            $("#adminError").text("Incorrect admin password.");
            valid = false;
        }

        if (valid) {
            alert("Admin login successful!");
            // Proceed with login logic or redirect
        }
    });
});
$(document).ready(function () {
    // Initially show the attendance view
    $("#attendance").show();

    // Attendance Link
    $("#attendance-link").click(function () {
        $(".view").hide(); // Hide all sections
        $("#attendance").fadeIn(); // Show attendance section
    });

    // Internals Link
    $("#internals-link").click(function () {
        $(".view").hide(); // Hide all sections
        $("#internals").fadeIn(); // Show internals section
    });

    // Profile Link
    $("#profile-link").click(function () {
        $(".view").hide(); // Hide all sections
        $("#profile").fadeIn(); // Show profile section
    });
});
$(document).ready(function () {
    $("#profileForm").on("submit", function (event) {
        // Validate the Date of Birth to ensure it's a valid past date
        var dob = $("#dob").val();
        var dobDate = new Date(dob);
        var today = new Date();
        var valid1=true
        if (dobDate >= today) {
            alert("Date of Birth must be in the past.");
            event.preventDefault();
            valid=false
            return;
        }

        // Validate phone number length (10 digits)
        var phone = $("#phone").val();
        if (phone.length !== 10) {
            alert("Phone number must be 10 digits long.");
            event.preventDefault();
            valid1=false
            return;
        }

        // Validate year of passing is not in the past or too far in the future
        var passingYear = parseInt($("#passingYear").val());
        var currentYear = today.getFullYear();
        if (passingYear < currentYear || passingYear > currentYear + 10) {
            alert("Year of passing must be between the current year and 10 years in the future.");
            event.preventDefault();
            valid1=false
            return;
        }

        // Validate Roll No length (between 6 and 10 digits)
        var rollno = $("#rollno").val();
        if (rollno.length < 6 || rollno.length > 10) {
            alert("Roll number must be between 6 and 10 digits.");
            valid1=false
            event.preventDefault();
        }
        if(valid1)
        {
            alert("Student Registration  successful!");
        }
        
    });
    if(valid1)
        {
            alert("Student Registration  successful!");
        }
});
$(document).ready(function () {
    $("#marksForm").on("submit", function (event) {
        // Validate Roll No length (between 6 and 10 digits)
        var rollno = $("#rollno").val();
        
        if (rollno.length > 9) {
            alert("Roll number must be 9 digits.");
            event.preventDefault();
            valid2=false
            return;
        }

        // Validate marks for each subject (between 0 and 100)
        var valid2=true
        var cs19501 = parseInt($("#cs19501").val());
        var cs19541 = parseInt($("#cs19541").val());
        var cs19542 = parseInt($("#cs19542").val());
        var ai19341 = parseInt($("#ai19341").val());
        

        if (cs19501 < 0 || cs19501 > 76 || cs19541 < 0 || cs19541 > 76 || cs19542 < 0 || cs19542 > 76 || ai19341 < 0 || ai19341 > 76) {
            alert("Marks for each subject must be between 0 and 75.");
            event.preventDefault();
            valid2=false
            return;
        }
    });
    if(valid2)
        {
            alert("Internal details entered successfuly!");
        }
});
$(document).ready(function () {
    $("#attendanceForm").on("submit", function (event) {
        // Validate Roll No length (between 6 and 10 digits)
        
        var rollno = $("#rollno").val();
        if (rollno.length > 9) {
            alert("Roll number must be 9 digits.");
            event.preventDefault();
            valid3=false
            return;
        }

        // Validate attendance percentage for each subject (between 0 and 100)
        var valid3=true
        var cs19501 = parseInt($("#cs19501").val());
        var cs19541 = parseInt($("#cs19541").val());
        var cs19542 = parseInt($("#cs19542").val());
        var ai19341 = parseInt($("#ai19341").val());
        var oa1903 = parseInt($("#oa1903").val());

        if (cs19501 < 0 || cs19501 > 100 || cs19541 < 0 || cs19541 > 100 || cs19542 < 0 || cs19542 > 100 || ai19341 < 0 || ai19341 > 100 || oa1903 < 0 || oa1903 > 100) {
            alert("Attendance for each subject must be between 0% and 100%.");
            event.preventDefault();
            valid3=false
            return;
        }
        if(valid3)
            {
                alert("Attendance details entered successfuly!");
            }
    });
    
});


