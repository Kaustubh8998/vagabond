Hi, <br><br>

Contact Form from Website - <br>
Type - {{ $type }}<br>
Name - {{ $name }}<br>
Email - {{ $email }}<br>
Number - {{ $number }}<br>
@if($trip != '')
Trip Name - {{ $trip }}<br>
@endif

@if($type === 'Inquiry')

<br>
{{ $comments }}<br><br>

@else

Experience - {{ $experience }}<br>
Date - {{ $date_of_trip }}<br>
<br>
{{ $comments }}<br><br>

@endif


Regards,<br>
The Website God