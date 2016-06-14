## Gmail Smtp Extension for Magento2
Configure Magento 2 to send all transactional email using Google Apps, Gmail, Amazon Simple Email Service (SES) and other SMTP server. 

All you need is either a (i) free Gmail account, (ii) paid Google Apps account or any other smtp service (i.e Amazon Simple Email Service / Amazon SES )

###Benefits
Since Google's SMTP server does not use Port 25, you'll reduce the probability that an ISP might block your email or flag it as SPAM. Also all your emails sent from Magento will be searchable and backed-up in your email account on Google's servers. 

###1 - Installation  Gmail Smtp Extension
##### Manual Installation
Install Gmail Smtp Extension for Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/Digimix/GmailSmtp
 * Copy the content from the unzip folder


#####Using Composer

```
composer config repositories.digimix-gmailsmtp git git@github.com:digimix/magento2-gmailsmtp.git
composer require digimix/magento2-gmailsmtp:dev-master
```

####2 -  Enable Gmail Smtp 
 * php -f bin/magento module:enable --clear-static-content MagePal_GmailSmtp
 * php -f bin/magento setup:upgrade

####3 - Config Gmail Smtp 
Log into your Magetno Admin, then goto Stores -> Configuration -> Advanced -> System -> Gmail/Google Apps SMTP Pro and enter your email credentials
