wing-wkhtmltopdf
====
源码来自 https://github.com/aur1mas/Wkhtmltopdf.git
做了一些升级优化，增加了额外的参数支持！另外还加入了composer支持

###需要安装wkhtmltopdf
http://wkhtmltopdf.org/

###示例
    $wkhtmltopdf = new Wkhtmltopdf(array(
        "path"    => __DIR__ . "/pdfs/",
        "binpath" => __DIR__. "/bin/wkhtmltopdf"
    ));
    $wkhtmltopdf->setTitle("yuyi");
    $wkhtmltopdf->setMinimumFontSize(60);
    $wkhtmltopdf->setPageSize("A4");
    $wkhtmltopdf->setUrl("http://www.itdfy.com/details/863");
    $wkhtmltopdf->output(Wkhtmltopdf::MODE_SAVE, "yuyi.pdf");