
<p style="text-align: left;font-size:16px;">Hi {{ $first_name }},</p>

<p style="text-align: left;font-size:16px;">{{trans(edc.email_reset)}}</p>

<p style="text-align: left;font-size:16px;">Please click on following link <a target="_blank" href="{{ route('auth.reset', ['token' => $token]) }}">Reset Password</a>.</p>


<p style="text-align: left;font-size:15px;">Sincerely,</p>

<p style="text-align: left;font-size:15px;">{{trans(edc.email_footer)}}</p>

