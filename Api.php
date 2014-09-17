<?php
/**
 * Created by PhpStorm.
 * User: mourad
 * Date: 9/16/14
 * Time: 1:56 PM
 */

namespace DigitalMania\HiPay\HiPayWallet;


class Api
{

    /**
     * Définition des montants sur lesquels s'appliquent les taxes
     *
     */
    const HIPAY_MAPI_TTARGET_TAX = 1;
    const HIPAY_MAPI_TTARGET_INSURANCE = 2;
    const HIPAY_MAPI_TTARGET_FCOST = 4;
    const HIPAY_MAPI_TTARGET_SHIPPING = 8;
    const HIPAY_MAPI_TTARGET_ITEM = 16;
    const HIPAY_MAPI_TTARGET_ALL = 31;

    /**
     * Type de paiements possibles
     *
     */
    const HIPAY_MAPI_METHOD_SIMPLE = 0;
    const HIPAY_MAPI_METHOD_MULTI = 0;

    /**
     * Valeurs par défaut
     *
     */
    const HIPAY_MAPI_DEFLANG = 'fr_FR';
    const HIPAY_MAPI_DEFMEDIA = 'WEB';

    const HIPAY_MAPI_MAX_INFO_LENGTH = 200;
    const HIPAY_MAPI_MAX_TITLE_LENGTH = 80;

    const HIPAY_MAPI_MAX_LOGIN_LENGTH = 20;
    const HIPAY_MAPI_MAX_PASSWORD_LENGTH = 20;

    const HIPAY_MAPI_MAX_RATING_LENGTH = 8;

    const HIPAY_MAPI_MAX_MDATAS_LENGTH = 200;

    const HIPAY_MAPI_MAX_ACKWD_LENGTH = 64;

    const HIPAY_MAPI_MAX_PRODUCT_NAME_LENGTH = 100;

    const HIPAY_MAPI_MAX_PRODUCT_INFO_LENGTH = 100;

    const HIPAY_MAPI_MAX_PRODUCT_REF_LENGTH = 35;

    const HIPAY_MAPI_MAX_TAX_NAME_LENGTH = 32;

    /**
     * Valeurs particulières pour le délai de capture
     *
     */
    const HIPAY_MAPI_CAPTURE_MANUAL = -1;
    const HIPAY_MAPI_CAPTURE_IMMEDIATE = 0;
    const HIPAY_MAPI_CAPTURE_MAX_DAYS = 7;

    const HIPAY_MAPI_OPE_AUTH = 'authorization';
    const HIPAY_MAPI_OPE_CANCEL = 'cancellation';
    const HIPAY_MAPI_OPE_REFUND = 'refund';
    const HIPAY_MAPI_OPE_CAPTURE = 'capture';
    const HIPAY_MAPI_OPE_REJECT = 'rejet';

    const HIPAY_MAPI_STATUS_OK = 'ok';
    const HIPAY_MAPI_STATUS_NOK = 'nok';

    // Nombre de secondes avant le timeout de curl avec le serveur Hipay
    // A régler en fonction de votre rapidité d'accès à la plate forme hipay
    const HIPAY_MAPI_CURL_TIMEOUT = 30;

    // Configuration d'un serveur proxy
    // activer cette option a true pour demander au curl de passer par un proxy
    const HIPAY_MAPI_CURL_PROXY_ON = false;
    // Adresse du proxy
    const HIPAY_MAPI_CURL_PROXY = 'http://';
    // port du proxy
    const HIPAY_MAPI_CURL_PROXYPORT = '';

    // Configuration d'un fichier de log pour curl en cas de pb de connexion avec le serveur Hipay
    const HIPAY_MAPI_CURL_LOG_ON = false;
    // fichier de log de curl (sous environnement windows, le chemin du fichier pourra être de type C:\tmp\mapicurl.log)
    const HIPAY_MAPI_CURL_LOGFILE = '/tmp/curl.log';

    const MAPI_VERSION = '1.0';

    const HIPAY_GATEWAY_URL = 'https://test-payment.hipay.com/order/';

    protected $client;

    protected $options = array(

    );
} 