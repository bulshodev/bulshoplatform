<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <style type="text/css">
            @page {
                margin: 0; }

            body {
                margin: 0;
                padding: 0 10px;
                width: 302px;
                font-size: 62.5%;
                font-family: "DejaVu Serif Condensed"; }

            .ticket-print h1, .ticket-print h2 {
                text-align: center;
                margin: 0; }
            .ticket-print table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                font-size: 11px;
                padding: 0px; }
            .ticket-print table th {
                border-bottom: 2px dashed #000000; }
            .ticket-print table.bets {
                border-bottom: 2px dashed #000000; }
            .ticket-print table.bets td {
                padding-right: 5px; }
            .ticket-print table.bets td.no-padding {
                padding-right: 0; }
            .ticket-print table.odds {
                font-weight: bold; }
            .ticket-print .align-right {
                text-align: right; }
        </style>
    </head>
    <body <?php if(in_array($this->Language->getLanguage(), array('fas', 'heb'))): ?>dir="rtl"<?php endif; ?>>
        <?php echo $content_for_layout; ?>
    </body>
</html>