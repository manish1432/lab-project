<html>
<head>
  <title>lab-pro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/jq.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">


  <!--offline bootstrap--->
  <script src="<<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <link rel="<?php echo base_url(); ?>stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">

</head>
<body>

  <div class="container" >

    <script>
    function moveNumbers(num) {
      var txt=document.getElementById("result").value;
      txt= num;
      document.getElementById("result").value=txt;
    }
    </script>  

         
          <div  class="container-fluid">
            <div class="row">
              <br/><br/><br/>
              <h1 align="center">PACKAGES</h1>
              <hr/>
			  
			  
			  
           <!--   <div class="col-xs-12 col-md-4 ">
                <div class="panel panel-info">
                  <input class="form-control" type="text" id="myInput1" onkeyup="myFun()" placeholder="Search for names..">
            </div>
            </div> -->
			
            <div  class="col-xs-12 col-md-4 ">
                <!--insert form start--><h3>select date</h3>
                  <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 86400);?>" onclick="moveNumbers(this.value)">
                    <?php echo $tomorrow = date('d/m', time() + 86400);?></button>
                  <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 172800);?>" onclick="moveNumbers(this.value)">
                      <?php echo $tomorrow = date('d/m', time() + 172800);?></button>
                  <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 259200);?>" onclick="moveNumbers(this.value)">
                        <?php echo $tomorrow = date('d/m', time() + 259200);?></button>
                  <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 345600);?>" onclick="moveNumbers(this.value)">
                          <?php echo $tomorrow = date('d/m', time() + 345600);?></button>
                <form method="post" action="<?php echo base_url();?>user_main/package_form_validation">
                  
                  <p>Appointment date</p>
				  <?php echo form_input(array('id' => 'result', 'name' => 'result', 
				  'class' => 'form-control', 'readonly' => 'readonly', 'value' => set_value('result')  )); ?><br />
				 <!-- <input class="form-control" type="text" id="result" size="20" readonly><br/>-->
				  <div class="input-group">
				   <?php echo form_input(array( 'name' => 'fname', 'class' => 'form-control', 
				   'placeholder' => 'First Name', 'value' => set_value('fname')  )); ?><br />				 
						<span class="input-group-addon">+</span>
					<?php echo form_input(array( 'name' => 'lname', 'class' => 'form-control', 
				   'placeholder' => 'Last Name', 'value' => set_value('lname')  )); ?><br />
				  </div><br/>
					<?php echo form_input(array( 'name' => 'p_number', 'class' => 'form-control', 
				   'placeholder' => 'Enter phone Number', 'value' => set_value('p_number')  )); ?><br />
					<?php echo form_input(array( 'name' => 'e-mail', 'class' => 'form-control', 
				   'placeholder' => 'Enter Email Address', 'value' => set_value('e-mail')  )); ?><br /> 
					
					<?php echo form_label('Referred Dr. :'); ?> 
                	<?php echo form_input(array( 'name' => 'rfdr', 'class' => 'form-control', 
				   'placeholder' => 'Referred Doctor.', 'value' => set_value('rfdr')  )); ?><br /> 
				   
					<?php echo form_label('Note : If no doctor have referred you please Write self'); ?> 
					<?php echo form_label('Apointment Time:'); ?> 
					
					<?php echo form_input(array( 'name' => 'usr_time', 'class' => 'form-control', 
				   'type' => 'time', 'value' => set_value('rfdr')  )); ?><br /> 
				  
					
					
                            
                            <div class="form-group">
                              <label for="comment">Test</label>
                              <textarea class="form-control textfield"  rows="10"   name="Tests" readonly></textarea>
                              <span class="text-danger"><?php echo form_error("Tests"); ?></span>
                            </div>

                </form>            <!--insert form end-->

          </div>
		  
		  
		 <div class="col-xs-12 col-md-4 ">
						<div class="panel panel-info">
							<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

							<div class="taglist">
								<table class="table table-sm table-hover" id="myTable">

									<tr class="header">
										<th>#</th>
										<th>package</th>
										<th>Delete</th>
									</tr>
									<?php
									if($package_fetch_data->num_rows() > 0)
									{?><?php $a=0;
										foreach ($package_fetch_data->result() as $row)
										{?><?php $a=$a+1;
											?>
											<tr>
												<td><?php echo $a; ?></td>
												<td><?php echo $row->name; ?></td>
												<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>"  title="Delete">
													<span class="glyphicon glyphicon-trash"></span>
												</a></td>
												<td><a href="<?php echo base_url(); ?>user_main/package_update_data/<?php echo $row->id; ?> " title="Edit">
													<span class="glyphicon glyphicon-edit"></span>
												</a></td>

											</tr>

											<?php
										}
									}
									else
									{
										?>
										<tr>
											<td colspan="3"><h1>No Data Found</h1></td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div><!--calss packages-->
            
			<div class="col-xs-12 col-md-4  ">
					<div class="panel panel-info">
						<input class="form-control" type="text" id="myInput1" onkeyup="myFun()" placeholder="Search for names..">

						<div class="taglist">
						<div style=" overflow-y:scroll;">
							<table class="table table-sm table-hover" id="myTable1">

								<tr class="header">
									<th>#</th>
									<th>Tests</th>
									<th>Select</th>
								</tr>
								<?php
								if($fetch_data->num_rows() > 0)
								{?><?php $a=0;
									foreach ($fetch_data->result() as $row)
									{?><?php $a=$a+1;
										?>
										<tr>
											<td><?php echo $a; ?></td>
											<td><?php echo $row->first_name; ?></td>
											<td><input type="checkbox" value="<?php echo $row->first_name; ?>"></td>
										</tr>

										<?php
									}
								}
								else
								{
									?>
									<tr>
										<td colspan="3"><h1>No Data Found</h1></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div><!--calss test-->
			
			</div> <!--calss row-->
			
           
            </div>
        </div>
        </div>
       </div>
      </body>
      </html>
