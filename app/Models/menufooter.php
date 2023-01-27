<?php

namespace App\Models;

class menufooter 
{
    static $kami = [
        [
            "title" => "Corporate Website",
            "link" => "https://www.qwords.co.id/"
        ],
        [
            "title" => "Qwords History",
            "link" => "https://www.qwords.com/about-qwordscom/history/"
        ],
        [
            "title" => "Qwords Differences",
            "link" => "https://www.qwords.com/about-qwordscom/difference/"
        ],
        [
            "title" => "Network & Infrastructure",
            "link" => "https://www.qwords.com/about-qwordscom/network/"
        ],
        [
            "title" => "Media Publication",
            "link" => "https://www.qwords.com/media-publication/"
        ],
        [
            "title" => "Media Kit",
            "link" => "https://cdnserver.qwords.com/qwords/pdf/MediaKit2021.pdf?_ga=2.64834348.2000066905.1674717591-227653171.1671551752"
        ],
        [
            "title" => "Partner",
            "link" => "https://www.qwords.com/about-qwordscom/partner/"
        ],
        [
            "title" => "Career & Development",
            "link" => "https://www.qwords.co.id/people/employment/"
        ]

    ];

    public static function km()
        {
            return collect(self::$kami);
        }

    static $msa = [
        [
            "title" => "Master Service Agreement",
            "link" => "https://www.qwords.com/master-service-agreement/"
        ],
        [
            "title" => "Product Life Cycle Policy",
            "link" => "https://www.qwords.com/master-service-agreement/?tab-content=sla-product-life-cycle-policy"
        ],
        [
            "title" => "Penggunaan Merek dan Logo",
            "link" => "https://www.qwords.com/about-qwordscom/penggunaan-merek-dan-logo/"
        ],
        [
            "title" => "Migrasi Ke Qwords",
            "link" => "https://www.qwords.com/master-service-agreement/migrasi-pelanggan/"
        ],
        [
            "title" => "Refund Policy",
            "link" => "https://www.qwords.com/master-service-agreement/?tab-content=refund-policy"
        ],
        [
            "title" => "Privacy Policy",
            "link" => "https://www.qwords.com/master-service-agreement/?tab-content=private-policy"
        ],
        [
            "title" => "Faktur Pajak",
            "link" => "https://www.qwords.com/permintaan-faktur-pajak/"
        ]
    ];

    public static function ms()
        {
            return collect(self::$msa);
        }

    static $layanan = [
        [
            "title" => "Private Label cPanel Reseller",
            "link" => "https://www.qwords.com/private-label-hosting-reseller/"
        ],
        [
            "title" => "Private Label Domain Reseller",
            "link" => "https://www.qwords.com/private-label-domain-reseller/"
        ],
        [
            "title" => "Flexi Main Domain",
            "link" => "https://www.qwords.com/flexi-main-domain/"
        ],
        [
            "title" => "Standard Support",
            "link" => "https://www.qwords.com/services/standard-support/"
        ],
        [
            "title" => "Hosting Insurance",
            "link" => "https://www.qwords.com/services/hosting-insurance/"
        ],
        [
            "title" => "Qwords Partner",
            "link" => "https://www.qwords.com/qwordscom-package-reseller/"
        ],
        [
            "title" => "Afiliasi",
            "link" => "https://www.qwords.com/afiliasi/"
        ],
        [
            "title" => "FTP Backup",
            "link" => "https://www.qwords.com/ftp-backup/"
        ]
    ];

    public static function lay()
        {
            return collect(self::$layanan);
        }

    static $kantor = [
        [
            "title" => "Kantor Jakarta",
            "alamat" => "Jl. Terusan Setra Indah I No.19, Sukagalih, Kec. Sukajadi, Kota Bandung 40163 - Indonesia",
            "telp" => "022 30508800"
        ],
        [
            "title" => "Kantor Bandung",
            "alamat" => "Jl. Terusan Setra Indah I No.19, Sukagalih, Kec. Sukajadi, Kota Bandung 40163 - Indonesia",
            "telp" => "022 30508800"
        ],
        [
            "title" => "Kantor Yogyakarta",
            "alamat" => "Jl. Blotan No 18 Kayen, Desa/Kel. Wedomartani, Kec. Ngemplak, Kab. Sleman, Provinsi D.I.Yogyakarta 55584 - Indonesia",
            "telp" => "0274 6058800"
        ],
        [
            "title" => "Kantor Surabaya",
            "alamat" => "Gedung MNC Tower Lt. 10, Jl. Taman AIS Nasution No. 21, Surabaya 60271 - Indonesia",
            "telp" => "031 30008800"
        ]
    ];

    public static function ktr()
    {
        return collect(self::$kantor);
    }
    
}