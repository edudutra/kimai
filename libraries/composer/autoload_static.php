<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c00ac27a90dfc4ac1a7acb480023ed4
{
    public static $files = array (
        '77a96519c4483cee8899338015bc0df2' => __DIR__ . '/..' . '/phpclasses/ultimatemysql/mysql.class.php',
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'Zend_' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendframework1/library',
            ),
        ),
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
        'K' => 
        array (
            'Kimai_' => 
            array (
                0 => __DIR__ . '/../..' . '/libraries',
            ),
        ),
    );

    public static $classMap = array (
        'Datamatrix' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
        'PDF417' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
        'PclZip' => __DIR__ . '/..' . '/TinyButStrong/pclzip.lib.php',
        'QRcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
        'TCPDF' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf.php',
        'TCPDF2DBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
        'TCPDFBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
        'TCPDF_COLORS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
        'TCPDF_FILTERS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
        'TCPDF_FONTS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
        'TCPDF_FONT_DATA' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
        'TCPDF_IMAGES' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_images.php',
        'TCPDF_IMPORT' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_import.php',
        'TCPDF_PARSER' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_parser.php',
        'TCPDF_STATIC' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_static.php',
        'clsTbsDataSource' => __DIR__ . '/..' . '/TinyButStrong/tinyButStrong.class.php',
        'clsTbsLocator' => __DIR__ . '/..' . '/TinyButStrong/tinyButStrong.class.php',
        'clsTinyButStrong' => __DIR__ . '/..' . '/TinyButStrong/tinyButStrong.class.php',
        'tinyDoc' => __DIR__ . '/..' . '/TinyButStrong/tinyDoc.class.php',
        'tinyDocException' => __DIR__ . '/..' . '/TinyButStrong/tinyDoc.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8c00ac27a90dfc4ac1a7acb480023ed4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8c00ac27a90dfc4ac1a7acb480023ed4::$classMap;

        }, null, ClassLoader::class);
    }
}
