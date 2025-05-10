@component('mail::message')
# Verify New Email Address

Terima kasih telah mendaftar di Kraflo.
Untuk menyelesaikan proses pendaftaran dan mulai menggunakan layanan kami, silakan verifikasi email Anda dengan mengklik tombol di bawah ini:

@component('mail::button', ['url' => $url])
Verify New Email Address
@endcomponent

Jika Anda tidak memperbarui alamat email di Kraflo, abaikan email ini.

Terima kasih,<br>
<!-- {{ config('app.name') }} -->
Tim Kraflo
@endcomponent