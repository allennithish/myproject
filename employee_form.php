<html>
<body>
<head>
    <title> home </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="style.css">
</head>
    <form action="<?php echo site_url('employee/employee_form'); ?>" method="post">
      <table align="center">
          <div class="login-box">
  <h1>Register</h1>
  <div class="textbox">      
           <?php echo form_input(array('id'=>'emp_name', 'name'=>'emp_name', 'placeholder' => 'Name', 'size'=>25));?>
  </div>
  
       <div class="textbox">
          <?php echo form_input(array('id'=>'emp_gender', 'name'=>'emp_gender', 'placeholder' => 'Gender', 'size'=>25));?>
       </div>
        
  <div class="textbox">
          <?php echo form_input(array('id'=>'emp_email', 'name'=>'emp_email', 'placeholder' => 'Email', 'size'=>25));?>
  </div>
        
  <div class="textbox">
          <?php echo form_input(array('id'=>'emp_phone', 'name'=>'emp_phone', 'placeholder' => 'Phone', 'size'=>25));?>
        
  </div>
  <div class="textbox">
          <?php echo form_input(array('type'=>'textarea','id'=>'emp_address', 'name'=>'emp_address', 'placeholder' => 'Address', 'size'=>25));?>
  </div>   
         <button class="btn" type="submit" id="employee-submit">ADD</button>    
      </table>
    </form>
  </body>
 </html>
