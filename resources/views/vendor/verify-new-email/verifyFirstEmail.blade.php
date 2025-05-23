@component('mail::message')
# Verify Email Address

Terima kasih telah mendaftar di Rencanakan.
Untuk menyelesaikan proses pendaftaran dan mulai menggunakan layanan kami, silakan verifikasi email Anda dengan mengklik tombol di bawah ini:

@component('mail::button', ['url' => $url])
Verifikasi Email
@endcomponent

Jika Anda tidak mendaftar di Rencanakan, abaikan email ini.

Terima kasih,<br>
<!-- {{ config('app.name') }} -->
Tim Rencanakan
@endcomponent