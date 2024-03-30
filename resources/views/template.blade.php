<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Employees</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container" style="width: 1250px;">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row ">
                <div class="col-sm-6 ">
                    <h2>Manage <b>Employees</b></h2>
                </div>

                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead style="color: black">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Civil Status</th>
                    <th>Address</th>
                    <th>Municipality</th>
                    <th>Contact Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="employeeTableBody">
            </tbody>
        </table>
    </div>
</div>

    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addEmployeeForm" method="get" action="add">
                    @csrf
                    <div class="modal-header">                       
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">  
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Civil Status</label>
                            <select name="civilStatus" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Engage">Engaged</option>
                                <option value="Widow">Widow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Municipality</label>
                            <select name="municipality" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Bulan">Bulan</option>
                                <option value="Bulusan">Bulusan</option>
                                <option value="Casiguran">Casiguran</option>
                                <option value="Castilla">Castilla</option>
                                <option value="Donsol">Donsol</option>
                                <option value="Gubat">Gubat</option>
                                <option value="Irosin">Irosin</option>
                                <option value="Juban">Juban</option>
                                <option value="Magallanes">Magallanes</option>
                                <option value="Matnog">Matnog</option>
                                <option value="Pilar">Pilar</option>
                                <option value="Prieto Diaz">Prieto Diaz</option>
                                <option value="Sorsogon City">Sorsogon City</option>
                                <option value="Sta. Magdalena">Sta. Magdalena</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="tel" name="contactNumber" class="form-control" required>
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editEmployeeForm">
                    <div class="modal-header">                       
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">               
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="edit_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="edit_age" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Birthdate</label>
                            <input type="date" name="edit_birthdate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="edit_gender" class="form-control" required>
                                <option value="" disabled selected >--Choose--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Civil Status</label>
                            <select name="edit_civilStatus" class="form-control" required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Engage">Engaged</option>
                                <option value="Widow">Widow</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="edit_address" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Municipality</label>
                            <select name="edit_municipality" class="form-control"  required>
                                <option value="" disabled selected>--Choose--</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Bulan">Bulan</option>
                                <option value="Bulusan">Bulusan</option>
                                <option value="Casiguran">Casiguran</option>
                                <option value="Castilla">Castilla</option>
                                <option value="Donsol">Donsol</option>
                                <option value="Gubat">Gubat</option>
                                <option value="Irosin">Irosin</option>
                                <option value="Juban">Juban</option>
                                <option value="Magallanes">Magallanes</option>
                                <option value="Matnog">Matnog</option>
                                <option value="Pilar">Pilar</option>
                                <option value="Prieto Diaz">Prieto Diaz</option>
                                <option value="Sorsogon City">Sorsogon City</option>
                                <option value="Sta. Magdalena">Sta. Magdalena</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="tel" name="editN" class="form-control" required>
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Function to handle form submission for adding an employee
        $("#addEmployeeForm").submit(function(event){
            event.preventDefault(); // Prevent default form submission

            // Retrieve input values
            var name = $("input[name='name']").val(); 
            var email = $("input[name='email']").val();
            var age = $("input[name='age']").val();
            var birthdate = $("input[name='birthdate']").val();
            var gender = $("select[name='gender']").val();
            var civilStatus = $("select[name='civilStatus']").val();
            var municipality = $("select[name='municipality']").val();
            var address = $("textarea[name='address']").val();
            var contactNumber = $("input[name=N']").val();
        
            // Append new row to table body with edit and delete actions
            var newRow = "<tr>" + 
                            "<td>" + name + "</td>" +
                            "<td>" + email + "</td>" +
                            "<td>" + age + "</td>" +
                            "<td>" + birthdate + "</td>" +
                            "<td>" + gender + "</td>" +
                            "<td>" + civilStatus + "</td>" +
                            "<td>" + address + "</td>" +
                            "<td>" + municipality + "</td>" +
                            "<td>" + contactNumber + "</td>" +
                            "<td>" +
                            "<a href='#' class='edit' data-toggle='modal' data-target='#editEmployeeModal' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>" +
                            "<a href='#' class='delete' title='Delete' data-toggle='tooltip' ><i class='material-icons'>&#xE872;</i></a>" +
                            "</td>" +
                        "</tr>";
            $("#employeeTableBody").append(newRow); // Append the new row to the table body

            // Clear form fields
            $("#addEmployeeModal input, #addEmployeeModal select, #addEmployeeModal textarea").val('');

            // Close modal
            $("#addEmployeeModal").modal("hide");
        });
            // Function to handle form submission for editing an employee
        $("#editEmployeeForm").submit(function(event){
            event.preventDefault(); // Prevent default form submission

            // Retrieve input values
            var name = $("input[name='edit_name']").val();
            var email = $("input[name='edit_email']").val();
            var age = $("input[name='edit_age']").val();
            var birthdate = $("input[name='edit_birthdate']").val();
            var gender = $("select[name='edit_gender']").val();
            var civilStatus = $("select[name='edit_civilStatus']").val();
            var address = $("textarea[name='edit_address']").val();
            var municipality = $("select[name='edit_municipality']").val();
            var contactNumber = $("input[name='editN']").val();

            // Retrieve the row to be edited
            var row = $(".edit-active-row");

            // Update the selected row with the edited data
            row.find("td:eq(0)").text(name);
            row.find("td:eq(1)").text(email);
            row.find("td:eq(2)").text(age);
            row.find("td:eq(3)").text(birthdate);
            row.find("td:eq(4)").text(gender);
            row.find("td:eq(5)").text(civilStatus);
            row.find("td:eq(6)").text(address);
            row.find("td:eq(7)").text(municipality);
            row.find("td:eq(8)").text(contactNumber);

            // Clear form fields
            $(this).find("input, select, textarea").val('');

            // Close modal
            $("#editEmployeeModal").modal("hide");
        });

        // Function to handle edit action
        $(document).on("click", ".edit", function(){
            var row = $(this).closest("tr");
            var cells = row.find("td");
            $(".edit-active-row").removeClass("edit-active-row");
            row.addClass("edit-active-row");

            // Populate the edit form fields with the data from the selected row
            $("input[name='edit_name']").val(cells.eq(0).text());
            $("input[name='edit_email']").val(cells.eq(1).text());
            $("input[name='edit_age']").val(cells.eq(2).text());
            $("input[name='edit_birthdate']").val(cells.eq(3).text());
            $("select[name='edit_gender']").val(cells.eq(4).text());
            $("select[name='edit_civilStatus']").val(cells.eq(5).text());
            $("textarea[name='edit_address']").val(cells.eq(6).text());
            $("select[name='edit_municipality']").val(cells.eq(7).text());
            $("input[name='editN']").val(cells.eq(8).text());

            $("#editEmployeeModal").modal("show");
        });

            // Function to handle delete action
            $(document).on("click", ".delete", function(){
                if (confirm("Are you sure you want to delete this employee?")) {
                    $(this).closest("tr").remove(); // Remove the row from the table
                }
            });

            // Function to handle edit action
            $(document).on("click", ".edit", function(){
                // Retrieve the row to be edited
                var row = $(this).closest("tr");
                var cells = row.find("td");

            
            // Populate the edit form fields with the data from the selected row
            $("#editEmployeeForm .modal-body").empty(); // Clear previous content
            $("#editEmployeeForm .modal-body").append(

                "<div class='form-group'>" +
                    "<label>Name</label>" +
                    "<input type='text' name='edit_name' class='form-control' value='" + cells[0].textContent + "' required>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Email</label>" +
                    "<input type='email' name='edit_email' class='form-control' value='" + cells[1].textContent + "' required>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Age</label>" +
                    "<input type='number' name='edit_age' class='form-control' value='" + cells[2].textContent + "' required>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Birthdate</label>" +
                    "<input type='date' name='edit_birthdate' class='form-control' value='" + cells[3].textContent + "' required>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Gender</label>" +
                    "<select name='edit_gender' class='form-control' required>" +
                        "<option value='Male'>Male</option>" +
                        "<option value='Female'>Female</option>" +
                    "</select>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Civil Status</label>" +
                    "<select name='edit_civilStatus' class='form-control' required>" +
                        "<option value='Single'>Single</option>" +
                        "<option value='Married'>Married</option>" +
                        "<option value='Engage'>Engaged</option>" +
                        "<option value='Widow'>Widow</option>" +
                    "</select>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Address</label>" +
                    "<textarea name='edit_address' class='form-control' required>" + cells[6].textContent + "</textarea>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Municipality</label>" +
                    "<select name='edit_municipality' class='form-control' required>" +
                        "<option value='Barcelona'>Barcelona</option>" +
                        "<option value='Bulan'>Bulan</option>" +
                        "<option value='Bulusan'>Bulusan</option>" +
                        "<option value='Casiguran'>Casiguran</option>" +
                        "<option value='Castilla'>Castilla</option>" +
                        "<option value='Donsol'>Donsol</option>" +
                        "<option value='Gubat'>Gubat</option>" +
                        "<option value='Irosin'>Irosin</option>" +
                        "<option value='Juban'>Juban</option>" +
                        "<option value='Magallanes'>Magallanes</option>" +
                        "<option value='Matnog'>Matnog</option>" +
                        "<option value='Pilar'>Pilar</option>" +
                        "<option value='Prieto Diaz'>Prieto Diaz</option>" +
                        "<option value='Sorsogon City'>Sorsogon City</option>" +
                        "<option value='Sta. Magdalena'>Sta. Magdalena</option>" +
                    "</select>" +
                "</div>" +
                "<div class='form-group'>" +
                    "<label>Contact Number</label>" +
                    "<input type='tel' name='editN' class='form-control' value='" + cells[8].textContent + "' required>" +
                "</div>"
            );
        });

        // Function to handle form submission for editing an employee
        $("#editEmployeeForm").submit(function(event){$("#editEmployeeModal").modal("hide");
            event.preventDefault(); // Prevent default form submission

            // Retrieve input values
            var name = $("input[name='edit_name']").val(); 
            var email = $("input[name='edit_email']").val();
            var age = $("input[name='edit_age']").val();
            var birthdate = $("input[name='edit_birthdate']").val();
            var gender = $("select[name='edit_gender']").val();
            var civilStatus = $("select[name='edit_civilStatus']").val();
            var municipality = $("select[name='edit_municipality']").val();
            var address = $("textarea[name='edit_address']").val();
            var contactNumber = $("input[name='editN']").val();

            // Retrieve the row to be edited
            var row = $(this).closest("tr");
            var cells = row.find("td");

            // Update the selected row with the edited data
            $(cells[0]).html(name);
            $(cells[1]).html(email);
            $(cells[2]).html(age);
            $(cells[3]).html(birthdate);
            $(cells[4]).html(gender);
            $(cells[5]).html(civilStatus);
            $(cells[6]).html(address);
            $(cells[6]).html(municipality);
            $(cells[7]).html(contactNumber);

            // Clear form fields
            $(this).find("input, select, textarea").val('');

            // Close modal
            $("#editEmployeeModal");
        });
    </script>
</body>
</html>