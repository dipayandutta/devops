FROM ubuntu

MAINTAINER abc

RUN apt-get update -y && \
    apt-get install -y python3 && \
    apt-get install -y python3-pip && \
    pip3 install django

RUN mkdir /app

WORKDIR /app

COPY . /app

ENTRYPOINT ["python3"]

CMD cd /HelloWorld

CMD pwd

EXPOSE 5000 

CMD ["manage.py" , "runserver" , "0.0.0.0:5000"]
