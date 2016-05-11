# Project

## Development

vagrant-Box with docker stuff

    cd vagrant
    vagrant up
    vagrant ssh
    cd project/
    
if project is empty (this
has to be done only once on the initial startup)

    exit 
    vagrant reload

else

    vagrant ssh
    cd project/
    bin/start
    


    # enter Vagrant, enter php container and projectfolder
    vagrant ssh
    cd project/
    bin/php bash
    cd default-project
    
    composer install
    (if it crashes try to execute composer install outside of vagrant)
    
    # Behta Tests ausführen
    bin/behat
    
Frontend Stuff outside of Vagrant:
    cd default-project
    npm install
