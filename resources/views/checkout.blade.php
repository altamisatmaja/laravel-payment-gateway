<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key='{{ config('midtrans.client_key') }}'></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

</head>

<body>
    <div class="flex min-h-screen items-center justify-center">
        <div class="relative flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <h4
                class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Detail pesanan
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
            </table>
            <button id="pay-button">Pay!</button>


        </div>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result) {
                        /* You may add your own implementation here */
                        alert("payment success!");
                        window.location.href = '/invoice/{{ $order->id }}'
                        console.log(result);
                    },
                    onPending: function(result) {
                        /* You may add your own implementation here */
                        alert("wating your payment!");
                        console.log(result);
                    },
                    onError: function(result) {
                        /* You may add your own implementation here */
                        alert("payment failed!");
                        console.log(result);
                    },
                    onClose: function() {
                        /* You may add your own implementation here */
                        alert('you closed the popup without finishing the payment');
                    }
                })
            });
        </script>

    </div>
</body>

</html>
