FROM ubuntu

MAINTAINER DipayanDutta inbox.dipayan@gmail.com

RUN apt-get update && apt-get install -y openssh-server && apt-get install -y sudo 

RUN mkdir -p /var/run/sshd 

RUN chmod 0755 /var/run/sshd

RUN useradd --create-home --shell /bin/bash --groups sudo dipayan

RUN echo "dipayan:password" | chpasswd

EXPOSE 22

ENTRYPOINT service ssh start && /bin/bash
