<!DOCTYPE html>
<html>
<head>
    <title>Users DataTable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
    .am{
        display: flex;
        flex-direction: column;   
    }
    .h{
        height: 100vh;
        align-items: start;
    }
    .en{
         display: flex;
        flex-direction: column;  
        gap: 12px; 
    }
</style>
    <div class="row">
        <div class="col-2">
         <nav class="navbar bg-body-secondary h">
          <div class="container p-2">
           <p class="navbar-brand am">
            <h3 class="me-4 pe-3 mb-4">Employee list</h3>
            <div class="en">
                <div class="dropdown">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Employee Portal
  </button>
  <ul class="dropdown-menu">
    <li> <a href="#" class="text-black text-decoration-none mt-1 dropdown-item" data-filter="all">All</a></li>
  </ul>
</div>
             <div class="dropdown">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Employees
  </button>
  <ul class="dropdown-menu">
    <li> <a href="#" class="text-black text-decoration-none mt-1 dropdown-item" data-filter="employee">employee intro</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Skills
  </button>
  <ul class="dropdown-menu">
    <li> <a href="#" class="text-black text-decoration-none mt-1 dropdown-item" data-filter="skills">employee skills</a></li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    employee details
  </button>
  <ul class="dropdown-menu">
    <li> <a href="#" class="text-black text-decoration-none mt-1 dropdown-item" data-filter="empdetails">details</a></li>
  </ul>
</div>
</div>  
        </p>
          </div>
         </nav>  
        </div>


<div class="modal" id="add" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Employee List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('addmodal') ?>">
          <div class="form-group mb-2">
            <label>Employee</label>
             <input type="text" name="employee" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <label>skills</label>
             <input type="text" name="skills" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <label>employee details</label>
             <input type="text" name="empdetails" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <label>role</label>
             <input type="text" name="role" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <label>gender</label>
             <input type="text" name="gender" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <label>qualification</label>
             <input type="text" name="qualification" class="form-control" required>
          </div>
          <div class="form-group mb-2">
            <label>phone</label>
             <input type="number" name="phone" class="form-control" required>
          </div>
           <div class="form-group mb-2">
            <label>computer skills</label>
             <input type="text" name="computerskills" class="form-control" required>
          </div>
           <div class="form-group mb-2">
            <label>experience</label>
             <input type="text" name="experience" class="form-control" required>
          </div>
           <div class="form-group mb-2">
            <label>other skills</label>
             <input type="text" name="otherskills" class="form-control" required>
          </div>  
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </form>
     </div>
    </div>
  </div>
</div>

<div class="col-10 mt-3">
<table id="usersTable" class="display table table-bordered">
    <thead>
        <tr>
            <th class="bg-success" scope="col">Id</th>
            <th class="bg-success" scope="col">Employee</th>
            <th class="bg-success" scope="col">Skills</th>
            <th class="bg-success" scope="col">Employee details</th>
            <th class="bg-success" scope="col">role</th>
            <th class="bg-success" scope="col">gender</th>
            <th class="bg-success" scope="col">qualification</th>
            <th class="bg-success" scope="col">phone</th>
            <th class="bg-success" scope="col">computerskills</th>
            <th class="bg-success" scope="col">experience</th>
            <th class="bg-success" scope="col">otherskills</th>
            <th class="bg-success" scope="col">date_time</th>
            <th class="bg-success" scope="col">Action</th>
        </tr>  
    </thead>
    <tbody>
        <?php if(!empty($rice)): ?>
            <?php foreach($rice as $rices): ?>
            <tr data-id="<?= esc($rices['id']) ?>">
                <td><?= esc($rices['id']) ?></td>
                <td class="employee-col editable"  data-field="employee"><?= esc($rices['employee']) ?></td>
                <td class="employee-col2 skills-col editable" data-field="skills"><?= esc($rices['skills']) ?></td>      
                <td class="employee-col3  empdetails-col editable" data-field="empdetails"><?= esc($rices['empdetails']) ?></td> 
                <td class="role-col editable"  data-field="role"><?= esc($rices['role']) ?></td>
                <td class="gender-col editable"  data-field="gender"><?= esc($rices['gender']) ?></td>
                <td class="qualification-col editable"  data-field="qualification"><?= esc($rices['qualification']) ?></td>
                <td class="phone-col editable"  data-field="phone"><?= esc($rices['phone']) ?></td>
                <td class="computerskills-col editable"  data-field="computerskills"><?= esc($rices['computerskills']) ?></td>
                <td class="experience-col editable"  data-field="experience"><?= esc($rices['experience']) ?></td>
                <td class="otherskills-col editable"  data-field="otherskills"><?= esc($rices['otherskills']) ?></td>  
                <td><?=  esc($rices['reg_date']) ?></td>
                <td style="display: flex; gap:5px;">      
                    <button class="btn btn-warning btn-sm view" style="width: 100px;" data-id="<?= esc($rices['id']) ?>">View Details</button>          
                    <button class="btn btn-success btn-sm viewBtn" style="width: 100px;" data-id="<?= esc($rices['id']) ?>">View Skills</button>  
                    <button class="btn btn-sm btn-secondary addBtn" style="width: 100px;">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add" style="width: 100px;" >Add</button>  
                    <button class="btn btn-danger btn-sm deleteBtn" style="width: 100px;" data-id="<?= esc($rices['id']) ?>">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<!-- View User Modal -->
<div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewUserModalLabel">Users List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody id="userDetailsBody">
            <!-- Details will be injected here -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<script>
    // Handle View button click

    /*
$(document).ready(function() {
    $('#usersTable').DataTable();
    

    // When Add button is clicked -> show input box
    $(document).on("click", ".addBtn", function() {
        let row = $(this).closest("tr");
        let inputBox = `
            <div class="added-box mt-1">
                Name: <input type="text" class="form-control newEmpInput d-inline-block w-auto"
                             placeholder="Enter Employee Name">
            </div>
        `;
        row.find(".employee-col").append(inputBox);
    });

    // When user enters name -> insert into DB
    $(document).on("keypress blur", ".newEmpInput", function(e) {
        if (e.type === "blur" || e.which === 13) {
            let input = $(this);
            let newValue = input.val().trim();

            if (newValue !== "") {
                $.ajax({
                    url: "<?= site_url('/users/insert') ?>",
                    type: "POST",
                    data: { employee: newValue, 
                    },
                           

                    success: function(response) {
                        console.log(response);

                        // Replace input with saved employee name
                        input.closest(".added-box").html("Name: " + newValue);

                        // Append new empty input for next employee
                        let newBox = `
                            <div class="added-box mt-1">
                                Name: <input type="text" class="form-control newEmpInput d-inline-block w-auto"
                                             placeholder="Enter Employee Name">
                            </div>
                        `;
                        $(".employee-col").last().append(newBox);

                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert("Error saving data!");
                    }
                });
            }
        }
    });
});*/

/*
$(document).ready(function() {
    $('#usersTable').DataTable();

    // When Add button is clicked -> show 3 input boxes
    $(document).on("click", ".addBtn", function() {
        let row = $(this).closest("tr");

        // Prevent multiple input boxes if already added
        if (row.find(".added-box").length > 0) return;

        let inputBoxes = `
            <div class="added-box mt-1">
                <input type="text" class="form-control newEmpInput" placeholder="Employee">
            </div>
        `;
         let inputBoxes2 = `
            <div class="added-box2 mt-1">
         <input type="text" class="form-control newSkillsInput" placeholder="Skills">
          </div>
        `;
         let inputBoxes3 = `
            <div class="added-box3 mt-1">
         <input type="text" class="form-control newDetailsInput" placeholder="Skills">
          </div>
        `;
         row.find(".employee-col").append(inputBoxes);
          row.find(".employee-col2").append(inputBoxes2);
           row.find(".employee-col3").append(inputBoxes3);
    });

    // When user presses enter in any input -> check all three fields
    $(document).on("keypress blur", ".newEmpInput, .newSkillsInput, .newDetailsInput", function(e) {
        if (e.type === "blur" || e.which === 13) {
            let box = $(this).closest(".added-box");
             let box2 = $(this).closest(".added-box2");
              let box3 = $(this).closest(".added-box3");
            let employee = box.find(".newEmpInput").val().trim();
            let skills = box2.find(".newSkillsInput").val().trim();
            let details = box3.find(".newDetailsInput").val().trim();

            // Only send if all fields are filled
            if (employee !== "" && skills !== "" && details !== "") {
                $.ajax({
                    url: "<?= site_url('/users/insert') ?>",
                    type: "POST",
                    data: {
                        employee: employee,
                        skills: skills,
                        empdetails: details
                    },
                    success: function(response) {
                        console.log(response);

                        // Replace input boxes with plain text
                        box.html(`Employee: ${employee} | Skills: ${skills} | Details: ${details}`);

                        // Optional: remove the add button to prevent duplicates
                        // row.find(".addBtn").remove();
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert("Error saving data!");
                    }
                });
            }
        }
    });
});
*/
$(document).ready(function() {
    var table=$('#usersTable').DataTable({
        responsive:true
    });
     $(document).on("click", ".addBtn", function() {
        let row = $(this).closest("tr");

        row.find(".employee-col").html(`
            <input type="text" class="form-control newInput employeeInput" placeholder="Enter Employee">
        `);

        row.find(".skills-col").html(`
            <input type="text" class="form-control newInput skillsInput" placeholder="Enter Skills">
        `);

        row.find(".empdetails-col").html(`
            <input type="text" class="form-control newInput empdetailsInput" placeholder="Enter Empdetails">
        `);

         row.find(".role-col").html(`
            <input type="text" class="form-control newInput roleInput" placeholder="Enter Employee">
        `);

         row.find(".gender-col").html(`
            <input type="text" class="form-control newInput genderInput" placeholder="Enter Employee">
        `);

         row.find(".qualification-col").html(`
            <input type="text" class="form-control newInput qualificationInput" placeholder="Enter Employee">
        `);

         row.find(".phone-col").html(`
            <input type="text" class="form-control newInput phoneInput" placeholder="Enter Employee">
        `);

         row.find(".computerskills-col").html(`
            <input type="text" class="form-control newInput computerskillsInput" placeholder="Enter Employee">
        `);

         row.find(".experience-col").html(`
            <input type="text" class="form-control newInput experienceInput" placeholder="Enter Employee">
        `);

         row.find(".otherskills-col").html(`
            <input type="text" class="form-control newInput otherskillsInput" placeholder="Enter Employee">
        `);

        

        // focus first input
        row.find(".employeeInput").focus();
    });

    // 2️⃣ On Enter inside any input → insert into DB
    $(document).on("keypress", ".newInput", function(e) {
        if (e.type === "blur" ||e.which === 13) { 
            let row = $(this).closest("tr");

            let employee = row.find(".employeeInput").val().trim();
            let skills = row.find(".skillsInput").val().trim();
            let empdetails = row.find(".empdetailsInput").val().trim();
            let role = row.find(".roleInput").val().trim();
            let gender = row.find(".genderInput").val().trim();
             let qualification = row.find(".qualificationInput").val().trim();
            let phone = row.find(".phoneInput").val().trim();
            let computerskills = row.find(".computerskillsInput").val().trim();
            let experience = row.find(".experienceInput").val().trim();
            let otherskills = row.find(".otherskillsInput").val().trim();



           
                $.ajax({
                    url: "<?= site_url('/users/insert') ?>",
                    type: "POST",
                    data: {
                        employee: employee,
                        skills: skills,
                        empdetails: empdetails,
                        role:role,
                        gender:gender,
                        qualification:qualification,
                        phone:phone,
                        computerskills:computerskills,
                        experience:experience,
                        otherskills:otherskills
                    },
                    success: function(response) {
                        let res = JSON.parse(response);

                        // 3️⃣ Add new row in DataTable
                        table.row.add([
                            res.id,
                            res.employee,
                            res.skills,
                            res.empdetails,
                            res.role,
                            res.gender,
                            res.qualification,
                            res.phone,
                            res.computerskills,
                            res.experience,
                            res.otherskills,
                           `
    <button class="btn btn-warning btn-sm view" style="width: 100px;" data-id="${res.id}">View Details</button>          
    <button class="btn btn-success btn-sm viewBtn" style="width: 100px;" data-id="${res.id}">View Skills</button>      
    <button class="btn btn-sm btn-primary addBtn" style="width: 100px;">+ Add</button>
    <button class="btn btn-danger btn-sm deleteBtn" style="width: 100px;" data-id="${res.id}">Delete</button>
    `
                        ]).draw(false);
                        // reset current row inputs
                        row.find(".employee-col").text(res.employee);
                        row.find(".skills-col").text(res.skills);
                        row.find(".empdetails-col").text(res.empdetails);
                        row.find(".role-col").text( res.role);
                        row.find(".gender-col").text( res.gender);
                        row.find(".qualification-col").text( res.qualification);
                        row.find(".phone-col").text( res.phone);
                        row.find(".computerskills-col").text( res.computerskills);
                        row.find(".experience-col").text(res.experience);
                        row.find(".otherskills-col").text(res.otherskills);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert("Error saving data!");
                    }
                });
        }
    });
    // When Add button is clicked -> show 3 input boxes
    $(document).on("click", ".editBtn", function() {
        let row = $(this).closest("tr");

        // Prevent multiple inputs
        if (row.find(".newEmpInput").length) return;

        row.find(".employee-col").html('<input type="text" class="form-control newEmpInput mt-1" placeholder="Employee">');
        row.find(".employee-col2").html('<input type="text" class="form-control newSkillsInput mt-1" placeholder="Skills">');
        row.find(".employee-col3").html('<input type="text" class="form-control newDetailsInput mt-1" placeholder="Empdetails">');
    });
    // When user presses enter in any input -> check all three fields
    $(document).on("keypress blur", ".newEmpInput, .newSkillsInput, .newDetailsInput", function(e) {
           if (e.type === "blur" || e.which === 13) {
            let row = $(this).closest("tr");
            let employee = row.find(".newEmpInput").val().trim();
            let skills = row.find(".newSkillsInput").val().trim();
            let details = row.find(".newDetailsInput").val().trim();

            // Only send if all fields are filled
            if (employee !== "" && skills !== "" && details !== "") {
                $.ajax({
                    url: "<?= site_url('/users/insert') ?>",
                    type: "POST",
                    data: {
                        employee: employee,
                        skills: skills,
                        empdetails: details
                    },
                    success: function(response) {
                        console.log(response);

                        // Replace inputs with saved values
                        row.find(".employee-col").text(employee);
                        row.find(".employee-col2").text(skills);
                        row.find(".employee-col3").text(details);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert("Error saving data!");
                    }
                });
            }
        }
    });
     $('#usersTable').on('click', '.editable', function() {
        let cell = $(this);
        if (!cell.hasClass('editing')) {
            cell.addClass('editing');
            let original = cell.text();
            let input = $('<input type="text" class="form-control">').val(original);

            cell.html(input);

            input.focus();

            input.on('blur', function(e) {
                 if (e.type === "blur" || e.which === 13) {
                let newValue = $(this).val();
                let id = cell.closest('tr').data('id');
                let field = cell.data('field');

                cell.removeClass('editing').text(newValue);
                    if (newValue !== original) {
                    // AJAX update
                    $.ajax({
                        url: "<?= site_url('/users/update') ?>",
                        type: "POST",
                        data: {
                            id: id,
                            field: field,
                            value: newValue,
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });
                }
            }
        
            });
        }        
    });   
    //filter 
    // Navbar click filtering
    $('[data-filter]').on('click', function(e) {
        e.preventDefault();
        let filter = $(this).data('filter');

        if (filter === 'all') {
            table.columns().visible(true); // show all columns
            table.draw();
        } else if (filter === 'employee') {
            table.columns([0,1,4,5,3]).visible(true);      // show Id + Employee
            table.columns([2,6,7,8,9,10]).visible(false);   // hide Skills, Empdetails, Action
        } else if (filter === 'skills') {
            table.columns([0,1,2,8,9,10]).visible(true);      // show Id + Skills
            table.columns([3,4,5,6,7]).visible(false);   // hide others
        } else if (filter === 'empdetails') {
            table.columns([0,1,4,5,6,7]).visible(true);      // show Id + Empdetails
            table.columns([2,3,8,9,10]).visible(false);   // hide others
        }
    });   
    // ✅ View Button Click -> Fetch row by ID
$('#usersTable').on('click', '.viewBtn', function () {
    let id = $(this).data('id');

    $.ajax({
        url: "<?= site_url('/users/view') ?>/" + id,
        type: "GET",
        dataType: "json",
        success: function (response) {
            if (response.status === 'success') {
                let d = response.data;

                // Build table rows dynamically
                let detailsHtml = `
                    <tr><th>ID</th><td>${d.id}</td></tr>
                    <tr><th>Employee</th><td>${d.employee}</td></tr>
                    <tr><th>Skills</th><td>${d.skills}</td></tr>
                    <tr><th>Computer Skills</th><td>${d.computerskills}</td></tr>
                    <tr><th>Experience</th><td>${d.experience}</td></tr>
                    <tr><th>Other Skills</th><td>${d.otherskills}</td></tr>
                `;

                $('#userDetailsBody').html(detailsHtml);

                // Show modal
                $('#viewUserModal').modal('show');
            } else {
                alert("User not found!");
            }
        },
        error: function () {
            alert("Error fetching user data.");
        }
    });
});

// ✅ View Button Click -> Fetch row by ID
$('#usersTable').on('click', '.view', function () {
    let id = $(this).data('id');

    $.ajax({
        url: "<?= site_url('/users/view') ?>/" + id,
        type: "GET",
        dataType: "json",
        success: function (response) {
            if (response.status === 'success') {
                let d = response.data;

                // Build table rows dynamically
                let detailsHtml = `
                    <tr><th>ID</th><td>${d.id}</td></tr>
                    <tr><th>Employee</th><td>${d.employee}</td></tr>
                    <tr><th>Employee Details</th><td>${d.empdetails}</td></tr>
                    <tr><th>Role</th><td>${d.role}</td></tr>
                    <tr><th>Gender</th><td>${d.gender}</td></tr>
                    <tr><th>Qualification</th><td>${d.qualification}</td></tr>
                    <tr><th>Phone</th><td>${d.phone}</td></tr>
                `;

                $('#userDetailsBody').html(detailsHtml);

                // ✅ Show modal
                let modal = new bootstrap.Modal(document.getElementById('viewUserModal'));
                modal.show();
            } else {
                alert("User not found!");
            }
        },
        error: function () {
            alert("Error fetching user data.");
        }
    });
});

// ✅ Delete button
$('#usersTable').on('click', '.deleteBtn', function () {
    let row = $(this).closest('tr');
    let id = $(this).data('id');

    if (confirm("Are you sure you want to delete this user?")) {
        $.ajax({
            url: "<?= site_url('/users/delete') ?>/" + id,
            type: "POST",
            dataType: "json",
            success: function (response) {
                if (response.status === 'success') {
                    // ✅ Remove row from DataTable
                    $('#usersTable').DataTable().row(row).remove().draw(false);
                } else {
                    alert("Failed to delete user!");
                }
            },
            error: function () {
                alert("Error deleting user.");
            }
        });
    }
});

});
</script>
</body>
</html>
