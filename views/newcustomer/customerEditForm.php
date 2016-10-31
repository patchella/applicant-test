<div class="container box body-content" >
<form action="?controller=newCustomer&action=updateCustomer" method="post">
<h2><strong>Edit Customer</strong></h2>
<div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       Customer Title
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" value="<?php echo $customer->title ?>" class="form-control" name="CustomerTitle" maxLength="30">
                </div>
</div>
<div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       Customer Name
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" value ='<?php echo $customer->name ?>' required class="form-control" name="CustomerName" maxLength="40">
                </div>
            </div>
<div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       Address
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" value ='<?php echo $customer->address ?>' name="Address" maxLength="60">
                </div>
</div>
            <div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       City
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" value ='<?php echo $customer->city ?>' name="City" maxLength="20">
                </div>
            </div>
            <div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       State
                    </strong>
                </div>
                <div class="col-md-6">
                    <select required value ='<?php echo $customer->stateID ?>' name=" state" class="form-control">
<option value="">--Select--</option>
	<?php foreach($states as $state) { ?>
        <option 

        value='<?php echo $state->id ?>' <?php if($customer->stateID == $state->id)  echo ' selected="selected"' ?> ><?php echo $state->name ?></option>
    <?php }?>
</select>
                </div>
            </div>
            <div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                      Postal Code
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="PostalCode" value ='<?php echo $customer->postalCode ?>' maxLength="10">
                </div>
            </div>
            <div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       Country
                    </strong>
                </div>
                <div class="col-md-6">
                    <select required name="country" class="form-control" value ='<?php echo $customer->countryID ?>'>
<option value="">--Select--</option>
    <?php foreach($countries as $country) { ?>
        <option value='<?php echo $country->id ?>' <?php if($customer->countryID == $country->id)  echo ' selected="selected"' ?>><?php echo $country->name ?>
        </option>
    <?php }?>
</select>
                </div>
            </div>
            <div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       Email
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" required class="form-control" value ='<?php echo $customer->email ?>' name="Email" maxLength="60">
                </div>
            </div>
            <div class="row pad-bottom">
                <div class="col-md-4 text-right-responsive">
                    <strong>
                       Modified By
                    </strong>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" required name="ModifiedBy" maxLength="30">
                </div>
  </div>

<input type="hidden" name="CustomerID" value='<?php echo $customer->id ?>'>
<input type="submit" name="update" value="Update" class="btn btn-primary" text="Update"/> 
<a href="index.php?controller=newCustomer&action=customerList">Cancel</a> 
</form>
 </div>
