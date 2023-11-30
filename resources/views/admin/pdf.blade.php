<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <style>
        .order_table{

        }
    </style>
</head>
<body>
    <h1>Order Detail</h1>

    <table class="order_table">
        <tr>
            <th>Customer ID:</th>
            <th>Customer Name:</th>
            <th>Email:</th>
            <th>Phone:</th>
            <th>Address:</th>
            <th>Product ID:</th>
            <th>Product:</th>
            <th>Product Price:</th>
            <th>Product Quantity:</th>
            <th>Payment Status:</th>
            <th>Iamge</th>
        </tr>

        <tr>
            <td>{{ $order->nuser_id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->email }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->product_id }}</td>
            <td>{{ $order->product_title }}</td>
            <td>{{ $order->product_price }}</td>
            <td>{{ $order->product_quantity }}</td>
            <td>{{ $order->payment_status }}</td>
            <td><img height="50" width="50" src="product/{{ $order->image }}"></td>
        </tr>
    </table>

</body>
</html>
