<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex min-h-screen items-center justify-center">
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <h4
                class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Invoice
            </h4>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: {{ $order->name }}</td>
                </tr>
                <tr>
                    <td>Nomor WhatsApp</td>
                    <td>: {{ $order->phone }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:{{ $order->adress }}</td>
                </tr>
                <tr>
                    <td>Kuantitas</td>
                    <td>: {{ $order->qty }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>: {{ $order->total_price }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: {{ $order->status }}</td>
                </tr>
            </table>
        </div>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

    </div>
</body>

</html>
