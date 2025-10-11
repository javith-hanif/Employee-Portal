<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    /*
   public string $fromEmail  = 'javithhanif732@gmail.com';
    public string $fromName   = 'Your App Name';
    public string $recipients = '';

    public string $protocol   = 'smtp';
    public string $SMTPHost   = 'smtp.gmail.com';
    public int    $SMTPPort   = 587;
    public string $SMTPUser   = 'javithhanif732@gmail.com';
    public string $SMTPPass   = ''; // not Gmail password, but App Password
    public string $SMTPCrypto = 'tls';

    public string $mailType   = 'html';
    public string $charset    = 'utf-8';
    public bool   $wordWrap   = true;
    */
public string $fromEmail  = 'javithhanif732@gmail.com';
public string $fromName   = 'Gmail';
public string $protocol   = 'smtp';
public string $SMTPHost   = 'smtp.gmail.com';
public int    $SMTPPort   = 587;
public string $SMTPUser   = 'javithhanif732@gmail.com';
public string $SMTPPass   = 'nikd eopf deuu nglz'; 
public string $SMTPCrypto = 'tls';
public string $mailType   = 'html';
}
