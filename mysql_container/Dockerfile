FROM ubuntu

MAINTAINER Dipayan Dutta inbox.dipayan@gmail.com

RUN apt-get update && apt-get install -y vim

RUN apt-get install -y wget 

RUN wget http://dev.mysql.com/get/mysql-apt-config_0.6.0-1_all.deb

RUN echo mysql-apt-config mysql-apt-config/repo-distro select ubuntu | debconf-set-selections

RUN echo mysql-apt-config mysql-apt-config/repo-codename select trusty | debconf-set-selections
RUN echo mysql-apt-config mysql-apt-config/select-server select mysql-5.7 | debconf-set-selections
RUN echo mysql-community-server mysql-community-server/root-pass password securePassword | debconf-set-selections
RUN echo mysql-community-server mysql-community-server/re-root-pass password securePassword | debconf-set-selections

CMD dpkg -i mysql-apt-config_0.6.0-1_all.deb

RUN apt-get install -y mysql-server --force-yes

RUN apt-get install -y augeas-tools

CMD augtool set /files/etc/mysql/my.cnf/target[3]/character-set-server utf8
CMD augtool set /files/etc/mysql/my.cnf/target[3]/collation-server utf8_unicode_ci

CMD mkdir -p /home/script

RUN  usermod -d /var/lib/mysql mysql 

ADD mysql.sh /home/script/mysql.sh

RUN chmod +x /home/script/mysql.sh

RUN /home/script/mysql.sh

ENTRYPOINT /bin/bash
