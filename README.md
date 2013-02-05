Git Learning
======

Instalation
----

- Create [Github](https://github.com/) Account
- Download and install [msysgit](http://code.google.com/p/msysgit/) git client
- Open git bash (you will be automatically directed to `C:/Users/[username]/ directory`)

Set git basic configuration (name and email)

    git config --global user.name "yourname"
    git config --global user.email "youremail@email.com"

Generate a public key

    ssh-keygen -t rsa -C "youremail@email.com"
        
- Open [Github SSH Settings](https://github.com/settings/ssh), click `Add SSH Key`, and then insert value of your public key (open `C:\Users\[username]\.ssh\id_rsa.pub`, copy the text, and paste to) to key 

Creating Repository and Git Basic Command
----

- Open git bash
- Create [Repository](https://github.com/new) on Github
- Clone the repository. There was 2 ways to do this.
* The first one is by clone the empty repository to your local pc first

        git clone git@github.com:username/repositoryname.git

* Or define your own folder as git repository and then set the remote

        git add init
        git remote add origin git@github.com:username/repositoryname.git
        git pull

- Create some file, and then add it using

        git add "yourfilename"

- Commit it

        git commit -m "your commit message"

- Push it to github server

        git push -u origin master

Author
----
Created by [Noval Agung](http://blog.novalagung.com/)