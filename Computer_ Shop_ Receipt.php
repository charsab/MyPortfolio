<!DOCTYPE html>
<html>
<head>
    <title>Computer Shop Receipt</title>
</head>
<body>

<?php
$productName = "Mouse";
$unitPrice = 350;
$quantity = 2;

$subtotal = $unitPrice * $quantity;
?>

<h2>Computer Shop Receipt</h2>

<table BORDER ="1" ellpadding="8">
    <tr>
        <th>Details</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Product Name</td>
        <td><?php echo $productName; ?></td>
    </tr>
    <tr>
        <td>Unit Price</td>
        <td><?php echo "₱" . number_format($unitPrice, 2); ?></td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td><?php echo $quantity; ?></td>
    </tr>
    <tr>
        <td>Subtotal</td>
        <td><?php echo "₱" . number_format($subtotal, 2); ?></td>
    </tr>
</table>

</body>
</html>