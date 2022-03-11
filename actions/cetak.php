<?php 
    session_start();
    require '../koneksi.php';

    $idIzin = $_GET['id_izin'];

    $query = "SELECT * FROM izin LEFT JOIN pegawai ON izin.id_pegawai = pegawai.id_pegawai WHERE id_izin = '$idIzin'";
    $izinDetail = $conn->query($query)->fetch_assoc();

    if($izinDetail['id_pegawai'] != $_SESSION['current_user'] || $izinDetail['isAccepted'] != 2) {
        header("Location: dashboard.php");
        exit;
    }
?>
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <style type="text/css">
            ol { 
                margin:0;padding:0
            }
            
            table td,table th {
                padding:0
            }
            
            .c7 {
                border-right-style:solid;
                padding:5pt 5pt 5pt 5pt;
                border-bottom-color:#000000;
                border-top-width:1pt;
                border-right-width:1pt;
                border-left-color:#000000;
                vertical-align:top;
                border-right-color:#000000;
                border-left-width:1pt;
                border-top-style:solid;
                border-left-style:solid;
                border-bottom-width:1pt;
                width:225.7pt;
                border-top-color:#000000;
                border-bottom-style:solid
                }
                .c10 {
                    border-right-style:solid;
                    padding:5pt 5pt 5pt 5pt;
                    border-bottom-color:#000000;
                    border-top-width:1pt;
                    border-right-width:1pt;
                    border-left-color:#000000;
                    vertical-align:top;
                    border-right-color:#000000;
                    border-left-width:1pt;
                    border-top-style:solid;
                    border-left-style:solid;
                    border-bottom-width:1pt;
                    width:451.4pt;
                    border-top-color:#000000;
                    border-bottom-style:solid
                }
                .c14 {
                    -webkit-text-decoration-skip:none;
                    color:#000000;
                    vertical-align:baseline;
                    text-decoration-skip-ink:none;
                    font-size:11pt;
                    font-family:"Times New Roman";
                    font-style:serif
                }
                .c6 {
                    color:#000000;
                    font-weight:400;
                    text-decoration:none;
                    vertical-align:baseline;
                    font-size:11pt;
                    font-family:"Arial";
                    font-style:normal
                }
                .c1 {
                    color:#000000;
                    font-weight:700;
                    text-decoration:none;
                    vertical-align:baseline;
                    font-size:7pt;
                    font-family:"Arial";
                    font-style:italic
                }
                .c12 {
                    padding-top:0pt;
                    padding-bottom:0pt;
                    line-height:1.15;
                    orphans:2;
                    widows:2;
                    text-align:left;
                    height:11pt
                } 
                .c0 {
                    color:#000000;
                    font-weight:700;
                    text-decoration:none;
                    vertical-align:baseline;
                    font-size:11pt;
                    font-family:"Arial";
                    font-style:normal
                }
                .c11 {
                    padding-top:0pt;
                    padding-bottom:0pt;
                    line-height:1.15;
                    orphans:2;
                    widows:2;
                    text-align:center;
                    height:11pt
                }
                .c13 {
                    padding-top:0pt;
                    padding-bottom:0pt;
                    line-height:1.15;
                    orphans:2;
                    widows:2;
                    text-align:center
                }
                .c20 {
                    font-size:14pt;
                    text-align:left;
                    font-style:serif;
                    font-family:"Times New Roman"
                }
                .c21 {
                    line-height:1;
                    font-size:14pt;
                    text-align:left;
                    line-height: 150%;
                    font-style:serif;
                    font-family:"Times New Roman"
                }

                }
                .c15 {
                    color:#000000;
                    text-decoration:none;
                    vertical-align:baseline;
                    font-size:7pt;
                    font-family:"Arial";
                    font-style:normal
                } 
                .c8 {
                    margin-left:auto;
                    border-spacing:0;
                    border-collapse:collapse;
                    margin-right:auto
                }
                .c2 {
                    padding-top:0pt;
                    padding-bottom:0pt;
                    line-height:1.0;
                    text-align:center
                }
                .c9 {
                    padding-top:0pt;
                    padding-bottom:0pt;
                    line-height:1.0;
                    text-align:left
                }
                .c3 {
                    background-color:#ffffff;
                    max-width:451.4pt;
                    padding:72pt 72pt 72pt 72pt
                }
                .c5 {
                    height:0pt
                }
                .c4 {
                    font-weight:700
                }
                .title {
                    padding-top:0pt;
                    color:#000000;
                    font-size:26pt;
                    padding-bottom:3pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                } 
                .subtitle {
                    padding-top:0pt;
                    color:#666666;
                    font-size:15pt;
                    padding-bottom:16pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
                li {
                    color:#000000;
                    font-size:11pt;
                    font-family:"Arial"
                }
                p {
                    margin:0;
                    color:#000000;
                    font-size:11pt;
                    font-family:"Arial"
                }
                h1 {
                    padding-top:20pt;
                    color:#000000;
                    font-size:20pt;
                    padding-bottom:6pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
                h2 {
                    padding-top:18pt;
                    color:#000000;
                    font-size:16pt;
                    padding-bottom:6pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
                h3 {
                    padding-top:16pt;
                    color:#434343;
                    font-size:14pt;
                    padding-bottom:4pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
                h4 {
                    padding-top:14pt;
                    color:#666666;
                    font-size:12pt;
                    padding-bottom:4pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
                h5 {
                    padding-top:12pt;
                    color:#666666;
                    font-size:11pt;
                    padding-bottom:4pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
                h6 {
                    padding-top:12pt;
                    color:#666666;
                    font-size:11pt;
                    padding-bottom:4pt;
                    font-family:"Arial";
                    line-height:1.15;
                    page-break-after:avoid;
                    font-style:italic;
                    orphans:2;
                    widows:2;
                    text-align:left
                }
        </style>
    </head>
    <body class="c3">
    <head>
<style>
p.kecil {
    line-height: 70%;
}
 
p.besar {
    line-height: 40px;
}
</style>
</head>

        <p><pre class="c20">
                                                                                                    Lampiran II:
                                                                                                    SK Ketua  Mahkamah Agung RI
                                                                                                    Nomor : 071/KMA/SK/V/2008
                                                                                                    Tanggal : 14 Mei 2008
</pre></p>
<br></br>
        <p class="c13"><span class="c20">IZIN KELUAR KANTOR</span>
            <br></br>
            <br></br>
        </p>
        <pre class="c21">
Yang bertandatanagan di bawah ini       : </pre>
            
<pre class="c21">Selaku                                                    :
</pre>
<pre class="c21">Dengan ini memberikan IZIN
</pre>
<pre class="c21">
Kepada                                                   : <?= $izinDetail['nama_pegawai'] ?> 
                                                                NIP <?= $izinDetail['nip'] ?>                                                                
Untuk Keluar Kantor pada                     :             , <?= $izinDetail['tanggal_keluar']?> 
                                                                Pukul  <?=$izinDetail['jam_keluar'] ?>  s.d.  <?= $izinDetail['jam_keluar']?> </pre>
<pre class="c21">
Untuk Keperluan                                    : <?= $izinDetail['keperluan'] ?> </pre>
        <pre class="c21">

Demikian  izin ini diberikan kepada yang bersangkuta untuk digunakan sebagaimana mestinya.

            
            
                                                                                                          Slawi,  <?php echo date(' d m Y'); ?>
            <pre>




            
                                            (                       )
</pre>
            </pre>
        </pre>


        
         
    
    <script>window.print();</script>