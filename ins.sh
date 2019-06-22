rm -r /opt/lampp/htdocs/login.php 
rm -r /opt/lampp/htdocs/procesar.php 
rm -r /opt/lampp/htdocs/index.php 
cp index.php /opt/lampp/htdocs
cp login.php /opt/lampp/htdocs
cp procesar.php /opt/lampp/htdocs
cp procesarregistro.php /opt/lampp/htdocs
cp styles.css /opt/lampp/htdocs
cp udenar.png /opt/lampp/htdocs
cp clave.txt /opt/lampp/htdocs
sudo chmod 777 /opt/lampp/htdocs/login.php 
sudo chmod 777 /opt/lampp/htdocs/procesar.php
sudo chmod 777 /opt/lampp/htdocs/index.php
sudo chmod 777 /opt/lampp/htdocs/procesarregistro.php
sudo chmod 777 /opt/lampp/htdocs/styles.css
sudo chmod 777 /opt/lampp/htdocs/clave.txt
sudo chmod 777 /opt/lampp/htdocs
/opt/lampp/lampp start



