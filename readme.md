# Wordpress Project Continues Deployment
I used a developed WordPress example on my computer and pushed a commit with git to github.
Adding repository on local computer with GIT, I push to Github first of course I create SSH Key on my local computer and add it to Github.

Next I will push to my VPS Server which has been setup with LEMP Stack, I use SSH RSYNC to PUSH to my VPS Server with the following documentation.

I'm using the Rsync Deployments Action which is on the github actions workflow marketplace https://github.com/marketplace/actions/rsync-deployments-action

The following is the configuration in the main.yml script that I created.

```sh
on:
  push:
    branches: [ main ]
name: 🚀 Deploy website on push
jobs:
  web-deploy:
    name: 🎉 Auto Deploy
    runs-on: ubuntu-latest
    steps:
    - name: 🚚 Get latest code
      uses: actions/checkout@v2.3.2

    - name: 📂 Sync files
      uses: burnett01/rsync-deployments@4.1
      with:
        switches: -avzr --delete --exclude=".git" --exclude=".github"
        path: /readme.md
        remote_path: ${{ secrets.DEPLOY_PATH }}
        remote_host: ${{ secrets.DEPLOY_HOST }}
        remote_port: ${{ secrets.DEPLOY_PORT }}
        remote_user: ${{ secrets.DEPLOY_USER }}
        remote_key: ${{ secrets.SSH_KEY }}
```

In the remote tag I use a secret variable to make it safer for our server access credentials to be safe and cannot be seen by other people.

Next, in setting up LEMP, I used the documentation on my own blog that I created a few months ago about setting up LEMP. Please check https://ramdani.web.id/cara-install-lnmp-lemp-stack-untuk-web-server/ in the Upload Website Data to VPS section. I skipped it because I deployed with GitHub

In accordance with the previous task of setting up the LAMP Stack (Linux, Nginx, MariaDB, and PHP), sorry here I use a VPS Server from Indonesia IDCloudHost, that doesn't mean I can't use other cloud providers such as AWS, Digital Ocean and others, I have experience with AWS and Digital Ocean, only now I already have a VPS that can be used from IDCloudHost. In my opinion, this can be used because it is the same way to use it. Below I have attached the VPS Server specifications that I use from IDCloudHost.

```sh
      Linux OS: Ubuntu 22.04
      Server Location: Singapore

      Web server package used.
      Nginx: Latest
      PHP Version: 7.4
      MariaDB: Latest
      SSL: Let’s Encrypt
```

Nginx has been optimized for basic caching only using fastcgi cache and gzip compression. The document root location is **/home/ramdani.biz.id** and for server block configuration **/etc/nginx/sites-available/ramdani.biz.id.conf** oh yes here sorry I used a domain from Indonesia and also biz.id subdomain. My current domain uses Cloudflare for DNS, but only DNS is turned off for the proxy.

I attached the server and WordPress credentials separately in the PDF I emailed.

