<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffa836910f34d9b5d00bc927cd71975b
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Roundcube\\Composer' => 
            array (
                0 => __DIR__ . '/..' . '/roundcube/plugin-installer/src',
            ),
        ),
        'P' => 
        array (
            'PEAR' => 
            array (
                0 => __DIR__ . '/..' . '/pear/pear_exception',
            ),
        ),
        'N' => 
        array (
            'Net' => 
            array (
                0 => __DIR__ . '/..' . '/pear/net_idna2',
                1 => __DIR__ . '/..' . '/pear/net_smtp',
                2 => __DIR__ . '/..' . '/pear/net_socket',
            ),
        ),
        'M' => 
        array (
            'Mail' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail_mime',
            ),
        ),
        'C' => 
        array (
            'Crypt' => 
            array (
                0 => __DIR__ . '/..' . '/pear/crypt_gpg',
            ),
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_commandline',
                1 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
        'A' => 
        array (
            'Auth' => 
            array (
                0 => __DIR__ . '/..' . '/pear/auth_sasl',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'Net_LDAP2' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2.php',
        'Net_LDAP2_Entry' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Entry.php',
        'Net_LDAP2_Error' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2.php',
        'Net_LDAP2_Filter' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Filter.php',
        'Net_LDAP2_LDIF' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/LDIF.php',
        'Net_LDAP2_RootDSE' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/RootDSE.php',
        'Net_LDAP2_Schema' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Schema.php',
        'Net_LDAP2_SchemaCache' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/SchemaCache.interface.php',
        'Net_LDAP2_Search' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Search.php',
        'Net_LDAP2_SimpleFileSchemaCache' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/SimpleFileSchemaCache.php',
        'Net_LDAP2_Util' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Util.php',
        'Net_LDAP3' => __DIR__ . '/..' . '/kolab/net_ldap3/lib/Net/LDAP3.php',
        'Net_LDAP3_Result' => __DIR__ . '/..' . '/kolab/net_ldap3/lib/Net/LDAP3/Result.php',
        'Net_Sieve' => __DIR__ . '/..' . '/pear/net_sieve/Sieve.php',
        'SieveTest' => __DIR__ . '/..' . '/pear/net_sieve/tests/SieveTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffa836910f34d9b5d00bc927cd71975b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffa836910f34d9b5d00bc927cd71975b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitffa836910f34d9b5d00bc927cd71975b::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitffa836910f34d9b5d00bc927cd71975b::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitffa836910f34d9b5d00bc927cd71975b::$classMap;

        }, null, ClassLoader::class);
    }
}
