<h3>Hi {{ $user->firstname }}!</h3>
<p>
Thanks for registering with us, please click the link below to activate your profile.
</p>

<a href="{{ route('user.verify', ['token' => $user->confirmation_code]) }}">{{ route('user.verify', ['token' => $user->confirmation_code]) }}</a>