<div style="text-align:right; font-size: 5px;color: #666;">
    <b>Tanggal : <?php echo $detail[0]->tanggal_transaksi; ?></b>
</div>
<br></br>
<div style="text-align:center; font-size: 12px;color: #000;">
    <b>MAJU MILK CENTER</b>
</div>
<br>
<div style="text-align:center; font-size: 7px;color: #000;">
    <b>Jl Semanggi Raya Mejasem</b>
</div>
<br></br>
<div style="text-align: left;border-top:1px solid #000;">
</div>
<div></div>

<div style="border-bottom:1px solid #000;">
    <table class="table" style="line-height: 2;">
        <table>
            <tr style="text-align: center;">
                <th style="text-align: center;  font-size: 5px;">No.</th>
                <th style="text-align: center;  font-size: 5px;">Nama Barang</th>
                <th style="text-align: center;  font-size: 5px;">Qty</th>
                <th style="text-align: center;  font-size: 5px;">Harga</th>
                <th style="text-align: center; font-size: 5px;">Sub Total</th>
                
            </tr>
            <?php $no = 1;
        $total = 0;
        foreach ($detail as $r) : ?>
            <tr class="gradeU">
                <td style="text-align: center;  font-size: 5px;"><?php echo $no ?></td>
                <td style="text-align: center; font-size: 5px;"><?php echo $r->nama_mn ?>
                </td>
                <td style="text-align: center;  font-size: 5px;"><?php echo $r->qty ?></td>
                <td style="text-align: center;  font-size: 5px;"> <?php echo number_format($r->harga_mn) ?></td>
                <td style="text-align: center;  font-size: 5px;">
                    <?php echo number_format($r->qty * $r->harga_mn) ?></td>
 
                </td>
            </tr>
            
            <?php $total = $total + ($r->qty * $r->harga_mn);
            $no++; ?>
            <?php endforeach ?>
            <tr class="gradeA" style="font-size: 5px;">
                <td style=" font-size: 5px;" colspan="4">T O T A L</td>
                <td style="text-align: center;  font-size: 5px;">Rp. <?php echo number_format($total); ?></td>
            </tr>
        </table>
    </table>
</div>
<p style="text-align:center; font-size: 10;color: #666;">Terima kasih<br />
</p>

<style type="text/css">
html {
    font-family: "Verdana, Arial";
}

.content {
    width: 80mm;
    font-size: 12px;
    padding: 2px;
}

.title {
    text-align: center;
    font-size: 13px;
    padding-bottom: 3px;
    border-bottom: 1px dashed;
}

.head {
    margin-top: 3px;
    margin-bottom: 3px;
    padding-bottom: 3px;
    border-bottom: 1px solid;
}

table {
    width: 100%;
    font-size: 12px;
}

.thanks {
    margin-top: 2px;
    padding-top: 2px;
    text-align: center;
    border-top: 1px dashed;
}

@media print {
    @page {
        width: 80mm;
        margin: 0mm;
    }
}
</style>