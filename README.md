# Project

## Development

vagrant-Box with docker stuff

    cd vagrant
    vagrant up
    vagrant ssh
    cd project/
    
if project is empty
has to be done only once on the initial startup...

    exit 
    vagrant reload

else

    vagrant ssh
    cd project/
    bin/start
    


    # enter Vagrant, enter php container and projectfolder
    bin/php bash
    cd wowza-client-test
    
    composer install
    
    # Behta Tests ausführen
    bin/behat
