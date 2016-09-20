<!DOCTYPE html>
<html>
<body>
<h2><strong>Customer List:</strong></h2>
<form action="?controller=newCustomer&action=insertCustomer" method="post">
<table id="customerTable" class="table table-striped table-bordered" cellspacing="0" width="100%" >
 <thead>
      <tr><th>Customer</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Email</th>
      <th>Country</th>
      <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($customers as $customer) { ?>
	<tr>
        <th ><?php echo $customer->title ?>  <?php echo $customer->name ?></th>
        <th ><?php echo $customer->address ?></th>
        <th ><?php echo $customer->city ?></th>
        <th >
        <?php 
        $state = State::getStateByID($customer ->stateID);
              echo
               $state->name ?>
                 
               </th>
        <th ><?php echo $customer->email ?></th>
        
        <th><?php 
        $country = Country::getCountryByID($customer ->countryID);
              echo
               $country->name ?></th>
        <th>
        <form action="?controller=newCustomer&action=insertCustomer" method="post">
        <input type="hidden" name="CustomerID" value='<?php echo $customer->id ?>'>
        <input type="submit" name="delete" onclick="return confirm('Are you sure?')" value="delete"  class="btn btn-danger" >
        <input type="submit" name="edit" value="edit"  class="btn" >
        </form>
        </th>
    </tr>
    <?php }?>
    </tbody>

</table>

	
<script type="text/javascript">
  $(function(){
    $("#customerTable").dataTable();
  })
  </script>
</body>
</html>

