
<?php include 'common/header.php'?>

<style>

    
form {
  width: 500px;
  margin: auto;
  position: auto;
}

.formStyle { 
  background-color: #128f8d;
  padding: 10px; 
  width: 400px; 
  margin-bottom: 20px; 
  border-bottom-width: 1px; 
  border-bottom-style: solid; 
  border-bottom-color: #ecf0f1; 
  border-top-style: none; 
  border-right-style: none; 
  border-left-style: none; 
  font-size: 1em;
  font-weight: 100;
  color: #ffffff;
}


/*To remove the outline that appears on clicking the input textbox*/
input:focus {
  outline: none;
}

/* To format the placeholder text color */
::-webkit-input-placeholder {
   color: #ecf0f1;
}

:-moz-placeholder { /* Firefox 18- */
   color: #ecf0f1;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #ecf0f1;  
}

:-ms-input-placeholder {  
   color: #ecf0f1;  
}

.search
{
  
    margin-left: 25%;
    /* margin: 2px; */
    padding-bottom: 10px;
}
</style>


<div class="container-fluid bg-light my-3 h-100 text-center">
    <div class="row">
        <div class="col-lg-12">
        <h1>Students Fees Management</h1>
        </div>
    </div>
</div>

<div class="search input-group rounded w-50">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<div class="form">
  <form action="">
    <input type="text" name="name" class="formStyle" placeholder="Student Name" required />
    <input type="date" name="" class="formStyle" placeholder="Adminssion Date" required />
    <input type="text" name="" class="formStyle" placeholder="Branch" required />
    <input type="text" name="" class="formStyle" placeholder="Batch" required />
    <input type="text" name="" class="formStyle" placeholder="Division" required />
    <input type="text" name="" class="formStyle" placeholder="Course" required />
    <input type="text" name="" class="formStyle" placeholder="Total Fees" required />
    <input type="text" name="" class="formStyle" placeholder="Paid Fees" required />
    <input type="text" name="" class="formStyle" placeholder="Remaining Fees" required />
    <input type="text" name="" class="formStyle" placeholder="Remaining Upcoming Instalment" required />
    <div class="button">
    <input type="button" class="btn btn-info w-50" value="Submit">
    </div>
  </form>
</div>



<!-- 
<center>
<div class="container">
<form action="" method="">
  <div class="form-group w-50 my-3">
    <label for="nameofstud">Name of Student</label>
    <input type="text" class="form-control" aria-describedby="Name of Student" placeholder="Enter Name of Student">
  </div>
  <div class="form-group w-50 my-3">
    <label for="adminssion date">Admission Date</label>
    <input type="date" class="form-control">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Branch">Branch</label>
    <input type="text" class="form-control" placeholder="Select Branch">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Batch">Batch</label>
    <input type="text" class="form-control" placeholder="Select Batch">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Division">Division</label>
    <input type="text" class="form-control"  placeholder="Select Division">
  </div>

  <div class="form-group w-50 my-3">
    <label for="course">Course</label>
    <input type="text" class="form-control" placeholder="Select Course">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Total Fees">Total Fees</label>
    <input type="text" class="form-control" placeholder="Enter Fees">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Paid Fee">Paid Fees</label>
    <input type="text" class="form-control" placeholder="Enter Paid Fees">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Remaining Fees">Remaining Fees</label>
    <input type="text" class="form-control" placeholder="Enter Remaining Fees">
  </div>

  <div class="form-group w-50 my-3">
    <label for="Upcoming Installment">Upcoming Installment</label>
    <input type="text" class="form-control" placeholder="Remaining Upcoming Installment">
  </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</center> -->


    <?php include 'common/footer.php'?>