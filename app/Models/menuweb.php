<?php

namespace App\Models;

class menuweb
{
    static $cloudhost = [
        [
            "title" => "Value Cloud Hosting",
            "link" => "https://www.qwords.com/hosting-murah/"   
        ],
        [
            "title" => "Wordpress Hosting",
            "link" => "https://www.qwords.com/wordpress-hosting/"   
        ],
        [
            "title" => "Unlimited Hosting",
            "link" => "https://www.qwords.com/unlimited-hosting/"   
        ]
    ];

    public static function cloud()
    {
        return collect(self::$cloudhost);
    }

    static $domen = [
        [
            "title" => "Daftar Domain",
            "link" => "https://www.qwords.com/domain-name/"
        ],
        [
            "title" => "Domain Premium .id",
            "link" => "https://www.qwords.com/domain-premium-id/"
        ],
        [
            "title" => "Domain Backorder",
            "link" => "https://www.qwords.com/domain-backorder/"
        ],
        [
            "title" => "Domain Privacy Protection",
            "link" => "https://www.qwords.com/domain-privacy-protection/"
        ],
        [
            "title" => "Sewa Domain",
            "link" => "https://www.qwords.com/sewa-domain-domain-lease/"
        ],
        [
            "title" => "Jual Beli & Lelang Domain",
            "link" => "https://www.qwords.com/jual-beli-lelang-domain/"
        ],
        [
            "title" => "Domain Negotiator / Domain Broker",
            "link" => "https://www.qwords.com/domain-broker-domain-negotiator/"
        ],
        [
            "title" => "Private Label domain Reseller",
            "link" => "https://www.qwords.com/private-label-domain-reseller/"
        ]
    ];

    public static function men()
    {
        return collect(self::$domen);
    }

    static $perform = [
        [
            "title" => "High Performance Bussines",
            "link" => "https://www.qwords.com/business-cloud-hosting/"
        ],
        [
            "title" => "High Performance Enterprise",
            "link" => "https://www.qwords.com/hosting-indonesia/high-performance-cloud-hosting/"
        ],
        [
            "title" => "Private Label cPanel Reseller",
            "link" => "https://www.qwords.com/private-label-hosting-reseller/"
        ]
    ];

    public static function per()
    {
        return collect(self::$perform);
    }

    static $acc = [
        [
            "title" => "Broadband Home",
            "link" => "https://www.qwords.com/internet-rumah/"
        ],
        [
            "title" => "Broadband Bussines",
            "link" => "https://www.qwords.com/internet-bisnis/"
        ],
        [
            "title" => "Broadband Wireless",
            "link" => "https://www.qwords.com/internet-wireless/"
        ],
        [
            "title" => "Check Coverage Area Broadband",
            "link" => "https://www.qwords.com/checkcoverage/"
        ]
    ];

    public static function ac()
    {
        return collect(self::$acc);
    }

    static $serv = [
        [
            "title" => "Cloud VPS KVM SSD",
            "link" => "https://www.qwords.com/vps-indonesia/cloud-vps-kvm-ssd/"
        ],
        [
            "title" => "Server Sekolah CBT / Moodle",
            "link" => "https://www.qwords.com/dedicated-server/server-sekolah/"
        ],
        [
            "title" => "Flexible VPS",
            "link" => "https://fleksibel.com/"
        ],
        [
            "title" => "Dedicated Server",
            "link" => "https://www.qwords.com/dedicated-server/dedicated-box/"
        ],
        [
            "title" => "Colocation Server",
            "link" => "https://www.qwords.com/dedicated-server/colocation-server/"
        ],
        [
            "title" => "Leased To Owned Dedicated Server",
            "link" => "https://www.qwords.com/dedicated-server/leased-to-owned-dedicated-server/"
        ]
    ];

    public static function ser()
    {
        return collect(self::$serv);
    }

    static $mail = [
        [
            "title" => "EC Collaboration Suite",
            "link" => "https://www.qwords.com/eccs/"
        ],
        [
            "title" => "Microsoft 365",
            "link" => "https://www.qwords.com/microsoft365/"
        ],
        [
            "title" => "Google Workspace",
            "link" => "https://www.qwords.com/google-workspace/"
        ],
        [
            "title" => "Mailtogo",
            "link" => "https://www.qwords.com/mailtogo/"
        ]
    ];

    public static function em()
    {
        return collect(self::$mail);
    }

    static $servis = [
        [
            "title" => "SSL",
            "link" => "https://www.qwords.com/services/secured-sockets-layer-certificate/"
        ],
        [
            "title" => "Licenses",
            "link" => "https://www.qwords.com/licenses/"
        ],
        [
            "title" => "Web Design",
            "link" => "https://bikin.website"
        ],
        [
            "title" => "Offline Backup",
            "link" => "https://www.qwords.com/services/offline-backup/"
        ],
        [
            "title" => "Advanced Backup",
            "link" => "https://www.qwords.com/services/advance-backup/"
        ],
        [
            "title" => "Extended Support",
            "link" => "https://www.qwords.com/services/extended-support/"
        ],
        [
            "title" => "Digital Signature",
            "link" => "https://www.qwords.com/digital-signature/"
        ],
        [
            "title" => "Hosting Insurance",
            "link" => "https://www.qwords.com/services/hosting-insurance/"
        ],
        [
            "title" => "Manage The Box Server",
            "link" => "https://www.qwords.com/manage-the-box-dedicated-colocation-server/"
        ],
        [
            "title" => "WhatsApp Link Generator",
            "link" => "https://wa.share.web.id/"
        ],
        [
            "title" => "Qwords Data Protection",
            "link" => "https://www.qwords.com/qwords-data-protection/"
        ],
        [
            "title" => "Qwords Link-Q",
            "link" => "https://link.share.web.id/"
        ]
    ];

    public static function srv()
    {
        return collect(self::$servis);
    }

    static $cust = [
        [
            "title" => "FAQ",
            "link" => "https://www.qwords.com/faq/"
        ],
        [
            "title" => "Blog",
            "link" => "https://qwords.com/blog/?_ga=2.86010523.2000066905.1674717591-227653171.1671551752"
        ],
        [
            "title" => "Kontak",
            "link" => "https://www.qwords.com/about-qwordscom/contact-qwordscom/"
        ],
        [
            "title" => "Afiliasi",
            "link" => "https://www.qwords.com/afiliasi/"
        ],
        [
            "title" => "Pembayaran",
            "link" => "https://www.qwords.com/order-payment/"
        ],
        [
            "title" => "Qwords Reward",
            "link" => "https://www.qwords.com/qwords-rewards/"
        ],
        [
            "title" => "Network Tools",
            "link" => "https://qwords.info/"
        ],
        [
            "title" => "Knowledge Base",
            "link" => "https://kb.qwords.com/?_ga=2.51405610.2000066905.1674717591-227653171.1671551752"
        ],
        [
            "title" => "Bantuan 24 Jam via Support Ticket Respon Cepat",
            "link" => "https://portal.qwords.com/submitticket.php?_ga=2.253642506.2000066905.1674717591-227653171.1671551752"
        ]
    ];

    public static function cus()
    {
        return collect(self::$cust);
    }

    static $logint = [
        [
            "title" => "Login Qwords",
            "link" => "https://portal.qwords.com/clientarea.php?from=qwords.com&section=button_login&_ga=2.55509928.2000066905.1674717591-227653171.1671551752"
        ],
        [
            "title" => "Login Goldenfast",
            "link" => "https://client.goldenfast.net/clientarea.php"
        ]
    ];

    public static function log()
    {
        return collect(self::$logint);
    }

}