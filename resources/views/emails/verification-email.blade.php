@component('mail::message')
	
Selamat anda telah berhasil mendaftar sebagai peserta ITCC 2018,
Langkah selanjutnya adalah aktivasi akun anda dengan menekan tombol dibawah ini

@component('mail::button', ['url' => url('/verifyemail/'.$email_token) ])
Aktivasi Akun
@endcomponent

Thanks,<br>
Best Regards,<br>
Admin {{ config('app.name') }}
@endcomponent