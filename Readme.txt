=======================================
Jesus_Popup Setup
=======================================
Installation:
=============

During the installation process 

1. Backup your web directory and store database 
2. Download and unzip the extension. 
3. Copy Jesus folder to your Magento 2  app/code folder 
4. In command line, using "cd", navigate to your Magento 2 root directory 
5. Run commands: 
	php bin/magento setup:upgrade 
	php magento module:enable Jesus_Popup
	If the site is in Production mode please run below commands
	php bin/magento setup:di:compile 
	php bin/magento setup:static-content:deploy


Configuration:
=============

To configure the extension, login to admin area
1. Go to Stores --> Configuration --Jesus Extensions --> Popup.
2. Enable the extension and set Title, Image and Message.
3. Save config.
5. Lear cache from cache management.


===================================================================================