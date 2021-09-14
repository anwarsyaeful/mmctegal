<table border="1">
    <tr>
        <th>No</th>
        <th>Tanggal Transaksi</th>
        <th>Nama barang</th>
        <th>Jumlah Barang</th>
        <th>Harga</th>
        <th>Total</th>
    </tr>
    <?php
    $no = 1;
    $total = 0;
    foreach ($record->result() as $r) {
        echo "<tr>
            <td width='30'>$no</td>
            <td width='160'>$r->tanggal</td>
            <td>$r->nama</td>
            <td>$r->qty</td>
            <td>$r->harga_mn</td>
            <td>$r->total</td>
            </tr>";
        $no++;
        $total = $total + $r->total;
    }
    ?>
    <tr>
        <td colspan="5">Total</td>
        <td><?php echo $total; ?></td>
    </tr>
</table>