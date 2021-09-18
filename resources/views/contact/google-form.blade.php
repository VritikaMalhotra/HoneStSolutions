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
onload="if(submitted) {window.location='attend-form';}"></iframe>

    <form method="POST" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfMwfI0tVpHWSfU_MP6SSyR2r582Gs8uBKFcujXtC2-_rfNcA/formResponse" target="hidden_iframe" onsubmit="submitted=true;">
       
        <div class="form-group">
            <label for="your_name">Full Name</label>
            <input name="entry.1240843089" type="text" class="form-control" id="your_name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="your_email">Email</label>
            <input name="entry.591953512" type="email" class="form-control" id="your_email" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="your_subject">Subject</label>
            <input name="entry.553335156" type="text" class="form-control" id="your_subject" placeholder="Enter subject" >
        </div>
        <div class="form-group">
            <label for="your_message">Message</label>
            <textarea name="entry.1932199715" id="your_massage" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-orange">SUBMIT</button>
    </form>
</body>
</html>