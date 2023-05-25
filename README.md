# MiniSOAFramwork
Developed to understand SOA by using PHP and Xampp server 


•We need multiple systems using different port to make a simple framework for SOA.
•Edit three configuraion files to establish ports:

1. httpd.conf
-> Xampp Control Pnael Config
-> Add Port List afterward default
-> Listen 8440….


2. httpd vhosts.conf
-> Xampp/apache/conf/extra/httpd-vhosts.conf
-> 
NameVirtualHost *:80  (delete # before the line)

<VirtualHost *:8440>
    DocumentRoot "D:/xampp/htdocs/orchestrator"
    ServerName localhost:8440
    <Directory "D:/xampp/htdocs/orchestrator" > 
         Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:8460>
    DocumentRoot "D:/xampp/htdocs/provider"
    ServerName localhost:8460
    <Directory "D:/xampp/htdocs/provider" > 
         Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:8480>
    DocumentRoot "D:/xampp/htdocs/provider1"
    ServerName localhost:8480
    <Directory "D:/xampp/htdocs/provider1" > 
         Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "D:/xampp/htdocs/default"
    ServerName localhost
    <Directory "D:/xampp/htdocs/default" > 
         Require all granted
    </Directory> 
</VirtualHost>


3. hosts
-> C: Windows System32 drivers etc hosts.txt
->Add: 
127.0.0.1 localhost:8440
127.0.0.1 localhost:8460
127.0.0.1 localhost:8480
