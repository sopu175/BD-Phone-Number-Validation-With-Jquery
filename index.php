<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phone Number Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<section class="pt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" class="form" id="form">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter Your Phone Number" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="submit" class="btn btn-success" value="send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {

        if($('#form').length > 0){
            var regexPhoneNumber = /^(?:\+88|88)?(01[3-9]\d{8})$/;

            $("#phone").blur( function() {                   /* This function is called whenever input field with id "number" loses focus */
                var mobileNumber = $('#phone').val();
                console.log(mobileNumber.match(regexPhoneNumber) );
                if( regexPhoneNumber.test( mobileNumber ) ){
                    alert('Correct Number')
                    $('#submit').attr("disabled", false);
                }else{
                    alert('Please enter Valid Phone Number')
                    $('#submit').attr("disabled", true);
                }
            });

        }




    });
</script>

</body>
</html>