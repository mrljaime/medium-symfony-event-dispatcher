mysql -u root -pvinitela -e "CREATE user 'medium'@'%' IDENTIFIED BY 'stories'"
mysql -u root -pvinitela -e "GRANT ALL PRIVILEGES ON medium_event_dispatcher.* TO 'medium'@'%'"
mysql -u root -pvinitela -e "FLUSH PRIVILEGES"