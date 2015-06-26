#!/bin/bash

echo "installing SSLStrip2..."

# INSTALL SSLStrip2

apt-get -y install python-twisted

wget https://github.com/xtr4nge/sslstrip2/archive/master.zip -O sslstrip2-master.zip
unzip sslstrip2-master.zip
chmod 755 sslstrip2-master/sslstrip.py

ln -s sslstrip2-master/sslstrip.py sslstrip

echo "..DONE.."
exit
