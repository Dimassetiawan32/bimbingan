@component('mail::message')
# Transaksi 

Terima Kasih Sudah Memesan.

@component('mail::button', ['url' => 'http://localhost/bimbingan/public/transaksi/index'])
Klik Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
