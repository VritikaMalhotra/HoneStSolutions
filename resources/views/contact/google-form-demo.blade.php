<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" 
onload="if(submitted) {
$('#exampleModal').modal('toggle')
}"></iframe>
    <form method="POST" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScsH4KEBzW89xpDoOB3BX6l2x-i5he1GeyST0Z8Dml4h2cv3w/formResponse"
        target="hidden_iframe" onsubmit="submitted=true;"
         >
       
        <div class="form-group">
            <label for="your_email">Email</label>
            <input name="entry.1045781291" type="email" class="form-control" id="your_email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="your_name">Full Name</label>
            <input name="entry.2005620554" type="text" class="form-control" id="your_name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="your_age">Age</label>
            <input name="entry.1065046570" type="text" class="form-control" id="your_age" placeholder="Enter age">
        </div>
        
  
        <div class="form-group">
            <label for="your_sex">Sex</label>
            <select class="form-control" id="your_sex"  name="entry.530954629">
                <option>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <!-- <div class="form-group">
            <label for="your_sex">Sex</label>
            <select class="form-control" id="your_sex" name="entry.138515813">
                <option>Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div> -->
        <!-- <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">Sex</legend>
            <div class="col-sm-12">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="entry.762205503" id="gridRadiossex1" value="Male">
                <label class="form-check-label" for="gridRadiossex1">
                    Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="entry.762205503" id="gridRadiossex2" value="Female">
                <label class="form-check-label" for="gridRadiossex2">
                    Female
                </label>
                </div>
                
            </div>
            </div>
        </fieldset> -->
        <div class="form-group">
            <label for="your_phonenumber">Phone Number</label>
            <input name="entry.1166974658" type="tel" class="form-control" id="your_phonenumber" placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label for="your_city">City</label>
            <input name="entry.657065569" type="text" class="form-control" id="your_city" placeholder="Enter city">
        </div>
      
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">RadiHow did you come to know about this batch?os</legend>
            <div class="col-sm-12">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="entry.1554937966" id="gridRadios1" value="Social Media (Facebook, Whatsapp, Instagram, Twitter)">
                <label class="form-check-label" for="gridRadios1">
                    Social Media (Facebook, Whatsapp, Instagram, Twitter)
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="entry.1554937966" id="gridRadios2" value="Friend">
                <label class="form-check-label" for="gridRadios2">
                    Friend
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="entry.1554937966" id="gridRadios2" value="Reference">
                <label class="form-check-label" for="gridRadios2">
                    Reference
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="entry.1554937966" id="gridRadios3" value="Other" >
                <label class="form-check-label" for="gridRadios3">
                    Other
                </label>
                </div>
            </div>
            </div>
        </fieldset>
        <div class="form-group">
            <label for="your_expectations">What are your expectations?</label>
            <input name="entry.367285302" type="text" class="form-control" id="your_expectations" placeholder="Enter expectations">
        </div>
        <button type="submit" name="submit" class="btn btn-orange">SUBMIT</button>
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gita Chanting Is Enchanting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location='attend-form';">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Submit Done
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location='attend-form';">Close</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>