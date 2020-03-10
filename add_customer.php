<?php
extract($_POST);
if(isset($save))
{
if($fn=="" || $ln=="" || $date=="" || $gen=="" || $phone=="" || $email=="" ||$nationalId==""|| $dob )
{
    $err="<font color='red'>fill all the fileds first</font>";
}
else
{
    $sql=mysqli_query($conn,"select * from customer where first_name='$fn' and ");
    $r=mysqli_num_rows($sql);
    if($r!=true)

    {
        mysqli_query($conn,"insert into customer values('','$fn','$ln','$gen','$group',now())");

        $err="<font color='blue'>Congrats new member added successfully</font>";
    }

    else
    {

        $err="<font color='red'>This member  already exists</font>";

    }
}
}
}
}
?>

<h2> ADD NEW CUSTOMER</h2>
<form method="post">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><?php echo @$err;?></div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-sm-4">Enter Customer First Name</div>
        <div class="col-sm-5">
            <input type="text" name="fn" class="form-control" required/></div>
    </div>

    <div class="row" style="">
        <div class="col-sm-4">Enter Customer Last Name</div>
        <div class="col-sm-5">
            <input type="text" name="ln" class="form-control" required/></div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-sm-4">Gender</div>
        <div class="col-sm-5">
            Male <input type="radio" name="gen" value="m" required/>
            Female <input type="radio" name="gen" value="f" />
        </div>
    </div>
    <div class="row" style="">
        <div class="col-sm-4">Date Of Birth</div>
        <div class="col-sm-5">
            <input type="date" name="dob" class="form-control" required/></div>
    </div>
    <div class="row" style="">
        <div class="col-sm-4">Mobile Number</div>
        <div class="col-sm-5">
            <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" required/></div>
    </div>
    <div class="row" style="">
        <div class="col-sm-4">Email Address</div>
        <div class="col-sm-5">
            <input type="email" name="email " class="form-control" required/></div>
    </div>
    <div class="row">
        div class="row" style="">
        <div class="col-sm-4"> National ID Number</div>
        <div class="col-sm-5">
            <input type="text" name="nationalId" class="form-control" required/></div>
    </div>

    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">


            <input type="submit" value="Add  Member" name="save" class="btn btn-success"/>
            <input type="reset" class="btn btn-success"/>
        </div>
    </div>
</form>
