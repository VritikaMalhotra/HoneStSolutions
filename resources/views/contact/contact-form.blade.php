<div class="contact-form">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('sendemail/send') }}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="your_name">Full Name</label>
            <input name="name" type="text" class="form-control" id="your_name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="your_email">Email</label>
            <input name="email" type="email" class="form-control" id="your_email" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="your_subject">Subject</label>
            <input name="subject" type="text" class="form-control" id="your_subject" placeholder="Enter subject">
        </div>
        <div class="form-group">
            <label for="your_message">Message</label>
            <textarea name="message" id="your_massage" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-orange">Send Message</button>
    </form>
</div>
