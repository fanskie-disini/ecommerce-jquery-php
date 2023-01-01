<?php
include "koneksi.php";
include "rp.php";

$dataCart = mysqli_query($koneksi, "SELECT * FROM cart c JOIN product p ON c.idProduct = p.idProduct ORDER BY p.product ASC");

?>

<div class="content">
  <div class="container">
    <div class="title">
      <h2>Cart</h2>
    </div>
    <table class="table table-striped ">
      <thead class="thead-inverse">
        <tr>
          <th class="fa fa-close"></th>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Sub Total</th>
        </tr>

      </thead>
      <tbody>
        <?php $subtotal = 0;
        $total = 0;
        while ($row = mysqli_fetch_object($dataCart)) { ?>
          <tr>
            <td><button class="btn btn-sm btn-danger" onclick="deleteCart(<?= $row->idProduct ?>)"><i
                  class="fa fa-close"></i></button></td>
            <td>
              <?= $row->product ?>
            </td>
            <td>Rp <?= rupiah($row->price) ?></td>
            <td>
              <?= $row->qty ?>
            </td>
            <td>Rp <?php $subtotal = $row->price * $row->qty;
            echo rupiah($subtotal); ?></td>
          </tr>
          <?php $total += $subtotal;
        } ?>
      </tbody>
    </table>

    <div class="card-checkout">
      <div class="card border-primary">
        <div class="card-body">
          <h4 class="card-title">Checkout</h4>
          <p class="card-text">Total : Rp <?php echo rupiah($total); ?></p>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary btn-block">Checkout</button>
        </div>
      </div>
    </div>

  </div>
</div>